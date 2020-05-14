<?php
session_start();
$connect=mysqli_connect("localhost","root","","store");
if(isset($_POST["add_to_cart"])){
	if(isset($_SESSION["shopping_cart"])){
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["ID"],$item_array_id)){
			$count = count($_SESSSION["shopping_cart"]);
			$item_array = array(
				'item_id'=>$_GET["ID"],
			    'item_name'=>$_POST["hidden_name"],
			    'item_price'=>$_POST["hidden_price"],
			    'item_quantity'=>$_POST["Count"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
			
		}
		else
		{
			echo "Item already added";


		}

	}
	else
	{
		$item_array = array(
			'item_Id'=>$_GET["ID"],
			'item_name'=>$_POST["hidden_name"],
			'item_price'=>$_POST["hidden_price"],
			'item_quantity'=>$_POST["Count"]




		);
		$_SESSION["shopping_cart"][0] = $item_array;

	}
}
if(isset($_GET["action"])){
	if($_GET["action"] == "delete"){
		foreach($_SESSION["shopping_cart"] as $keys => $values){
			if($values["item_Id"] == $_GET["ID"]){
				unset($_SESSION["shopping_cart"][$keys]);
			}
		}
	}
}

?>

<!doctype html>
/*<html>



<head>
	<title>Shopping Cart</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
	


			
     <h3>Order Details</h3>
     <div class="table-responsive">
     	<table class="table table-bordered">
     		<tr>
     			<th>Name</th>
     			<th>Quantity</th>
     			<th>Price</th>
     			<th>Total</th>
     			<th>Action</th>
     		</tr>
     		<?php
     		if(!empty($_SESSION["shopping_cart"])){
     			$total = 0;
     			foreach($_SESSION["shopping_cart"] as $keys => $values)
     			{
     		?>		<tr>
     			       <td><?php echo $values["item_name"]; ?></td>
     		           <td><?php echo $values["item_quantity"]; ?></td>
     		           <td>$ <?php echo $values["item_price"]; ?></td>
     		           <td><?php echo number_format($values["item_quantity"] * $values["item_quantity"]);?></td>
     		           <td><a href="test.php?action=delete&id=<?php echo $values["item_Id"]; ?>"><span class="text-danger">Remove</span></a></td>
                    </tr>
                    <?php
                         $total = $total + ($values["item_quantity"] * $values["item_price"]);

     			}?>
     			<td colspan="3" align="right">Total</td>
     			<td align="right">$ <?php echo number_format($total, 2); ?></td>
     		
     	</table>
     </div>
     
     
     
     \\I get an unexpected end of file error but im not 100% sure from where.I'm scouting through this thing to find it I'll edit it when i do
