<?php
   $session_start();
   $connect = mysqli_connect("localhost","root","","CSC_226_Final_Project")
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Working Title</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<div class="container" style="width:60%">
		<h2 align="center">Shopping Cart</h2>
		<?php
		$query = "SELECT * FROM csc_226_final_project ORDER BY ID ASC";
		$result = mysqli_query($connect,$query);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result))
		
	?>
	<div class="col-md-4">
		<form method="post" action="shop.php?action=add&id=<?php echo $row["ID"];?>">
			<div style="border: 1px solid: margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;"align="center">
			<img src="<?php echo $row["Image"]; ?>"class="img-responsive">
			<h5 class="text-info"><?php echo $row["Name"]; ?></h5>
			<h5 class="text-danger">$ <?php echo["Price"]; ?> </h5>
			<input type="text"name="Quantity"class="form-control" value="<?php echo $row["Count"];?>">
			<input type="hidden" name="hidden_name"value="<?php echo $row["Name"];?>">
			<input type="hidden" name="hidden_price"value="<?php echo $row["Price"];?>">
			<input type="submit" name="add" style="margin-top:5px;"class="btn btn-default" value="Add to Bag">
		</div>
	</form>
    <?php{

    }
    ?>
    <div style="clear:both"></div>
    <h2>My Shopping Cart</h2>
    <div class="table-responsive">
    	<table class="table table-bordered">
    	<tr>
    	<th width="40%">Product Name</th>
    	<th width="10%">Quantity</th>
    	<th width="20%">Price</th>
    	<th width="15%">Total</th>
    	<th width="5%">Order</th>
    </tr>
</table>
    <?php 
    if(!empty($_SESSION["cart"])){

    	$total = 0;
    	foreach($_SESSION["cart"] as $keys => $values)
    ?>}
    {
    	<tr>
    		<td><?php echo $values["Name"]; ?></td>
    		<td><?php echo $values["Count"];?></td>
    		<td>$ <?php echo $values["Price"]; ?></td>
    		<td>$ <?php echo number_format($values["Count"] * $values["Price"]);?></td>
    		<td><a href="shop.php?action=delete&id=<?php echo $values["ID"];?>"><span class="text-danger">x</span></a></td>
    	</tr>
    	<?php{
    	$total = $TOTAL + ($values["Count"] * $values["Price"]);
          }?>
        <tr>
        <td colspan="3" align="right">Total</td>
        <td align="right">$ <?php echo number_format($total, 2); ?> </td>
         </tr>
    }

	</div>
</body>
</html>
