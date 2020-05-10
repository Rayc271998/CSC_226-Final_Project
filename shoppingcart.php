<?php

require_once("dbconn.php");
require_once("function.php");

?>

<!doctype html>
<html>



<head>
	<title>Shopping Cart</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
	

<div class="container-fluid">
	<div class="row px-5">
		<div class="col-md-7">
			<h6>My Cart</h6>
			<hr>
            <form action="cart.php" method="get" class="cart-items">
            	<div class="border rounded">
            		<div class="row bg-white">
            		<div class="col-md-3">
            			<img src="" alt="Image1" class="img-fluid">
            		</div>	
            		<div class="col-md-3"></div>
            		<div class="col-md-6">
            			<h5 class="pt-2">Product 1</h5>
            			<h5 class="pt-2">$10.99</h5>
            			<button type="submit" class="btn btn-warning">Remove</button>
            		</div>
            		<div class="col-md-3">
            			<button type="button"class="btn bg-light border rounded circle"><i class="fas fas-minus"></i></button>
            			<input type="text" value="1" class="form-control w-25 d-inline">
            			<button type="button"class="btn bg-light border rounded circle"><i class="fas fas-plus"></i></button>
            		</div>


            		</div>
            	</div>
            </form>
		</div>
	</div>
</div>




	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</body>




</html>






//Function to dsiplay the cart


function CartComponent(){
    	$element= "<form action=\"cart.php\" method=\"get\" class=\"cart-items\">
            	<div class=\"border rounded\">
            		<div class=\"row bg-white\">
            		<div class=\"col-md-3\">
            			<img src='' alt=\"Image1\" class=\"img-fluid\">
            		</div>	
            		<div class=\"col-md-3\"></div>
            		<div class=\"col-md-6\">
            			<h5 class=\"pt-2\">Product 1</h5>
            			<h5 class=\"pt-2\">$10.99</h5>
            			<button type=\"submit\" class=\"btn btn-warning\">Remove</button>
            		</div>
            		<div class=\"col-md-3\">
            			<button type=\"button\"class=\"btn bg-light border rounded circle\"><i class=\"fas fas-minus\"></i></button>
            			<input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
            			<button type=\"button\"class=\"btn bg-light border rounded circle\"><i class=\"fas fas-plus\"></i></button>
            		</div>


            		</div>
            	</div>
            </form>";


    }
    ?>


