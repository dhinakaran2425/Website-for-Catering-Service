<?php session_start();
	$uid = $_SESSION['uid'];
 include "login-header.php"; ?>
<style type="text/css">
	tr{

	}
	tr:hover{
		background-color: lightgreen;
		color: black;

	}
</style>
<div style="height: 150px;"></div>
<div style="width: 90%; margin: 0 auto;">
	<center> <img src="cart.jpg" width="10%"> </center>
<center> <p style="font-size: 2.4em; color: red"> VIEW CART PRODUCT HERE 	</p> </center> 
	<div style="width: 90%; padding: 20px; text-align: right;">
			<a href="catering-booking.php"><img src="images/chcekout.png" width="40"></a>
			<a href="catering-booking.php">Check Out</a> 
		</div>
	<br>
	<div>
		<?php include "connect.php";
			$sql = ("SELECT addcart_1.price, addcart_1.qty, addcart_1.total,addcart_1.id, catering.path, catering.items
FROM addcart_1
INNER JOIN catering ON addcart_1.p_id=catering.p_id where addcart_1.u_id='$uid'");
$result = mysqli_query($con, $sql) or die( mysqli_error($con));
		?>
		
		<table border=1 width="80%" align="center" cellpadding="8" cellspacing="10" style="color: black">
		<tr><th>items</th>
			<th>image</th>
			<th>Price</th>
			<th>Qty</th>
			<th>Total</th>
			<th>Remove</th>
		</tr>

		<?php
			while($r = mysqli_fetch_array($result))
			{
		 ?>
			<tr>
			<td><?php echo $r['items']; ?></td>
				<td align="right"><img src="<?php echo $r['path'];?>" width="267" height="179"></td>
				<td><?php echo $r['price']; ?></td>
				<td><?php echo $r['qty']; ?></td>
				<td><?php echo $r['total']; ?></td>
				<td><a href="deletecart_1.php?id=<?php echo $r['id']; ?>">Delete</a></td>

			</tr>
			
		
		<?php
		}
		?>
		</table>	
		<div style="width: 90%; padding: 20px; text-align: right;">
        <a href="catering-booking.php"><img src="images/chcekout.png" width="40"></a>
			<a href="catering-booking.php">Check Out</a>
		</div>
	</div>


</div>
<?php
include "login-footer.php";
?>