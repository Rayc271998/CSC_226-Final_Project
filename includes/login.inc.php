<html>
    <head>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <?php
        /* This PHP file processes information and can redirect to home.php after conditions are met, 
		   so I think the HTML tags aren't needed.
		

		Session start done in header file. Two session values: 'loggedIn' and 'user'. They'll be our checks and 
		how we address the user */

		if(isset($_SESSION['loggedIn'] == true) //Checks if the user is logged in, then redirects to the home page.
		{
			header("location: ../home.php");
			exit;
		}

		//Database connection file.
		include "dbconnect.inc.php";
		
		if(isset($_POST['login'])) //If user clicked 'login'
		{
			//Collect information from POST and make a password check.
			$username = trim(stripslashes(htmlspecialchars($_POST['username'])));
			$password = trim(stripslashes(htmlspecialchars($_POST['password'])));
			
        
			/* Start a query for username. We need to see if they exist in the database. 
				Selects the entire row. */
			$query1 = "SELECT * FROM Customers WHERE username = ?";
			
			$stmt = $conn->prepare($query1);
			$stmt->bind_param("s", $username);
			$stmt->execute();

			/* Not entirely sure if this bottom bit is redundant, but the idea is to 
			   get the result from $stmt and store it into $result, then store that information as an 
			   associative array in another variable being $row, that way it can be worked 
			   on with the retreived information without tampering with $result */

			$result = $stmt->get_result();
			$row = $result->fetch_assoc();

			if($row['password'] == $password) //Successful Login Case, redirect to home.php.
			{
				$_SESSION['loggedIn'] = true;
				$_SESSION['user'] = $row['username'];
				header(loacation: "../home.php");
			}
			else //Incorrect Password Case, redirect back to login.
			{
				// $_SESSION['loggedIn'] = false; Not sure if needed.
				header(location "../login.php");
			}
		}
        ?>
    </body>
</html>
