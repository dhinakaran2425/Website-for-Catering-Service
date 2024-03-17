<?php session_start();
if(isset($_SESSION['uid']))
{

include "header.php"; ?>
<div style="background-color: white; width: 98%; margin: 0 auto; ">
	<br>
	<?php	include "connect.php";
	$pid = $_GET['pid'];
	$uid = $_GET['uid'];
		?>
		<?php include "connect.php";
			$sql = ("SELECT addcart_1.price, addcart_1.qty, addcart_1.total,addcart_1.id, catering.path, catering.items
FROM addcart_1
INNER JOIN catering ON addcart_1.p_id=catering.p_id where addcart_1.u_id='$uid'");
$result = mysqli_query($con, $sql) or die( mysqli_error($con));
		?>

	<table border=1 align="center" width=90% cellspacing="10" cellpadding="12">
		<tr>
		<th>items</th>
			<th>Price</th>
			<th>Qty</th>
			<th>Total</th>
			<th>IMAGE</th>
			
			
		</tr>
		<?php
			while($r = mysqli_fetch_array($result))
			{
		 ?>
		<tr>
		<td><?php echo $r['items']; ?></td>
				
				<td><?php echo $r['price']; ?></td>
				<td><?php echo $r['qty']; ?></td>
				<td><?php echo $r['total']; ?></td>
				<td align="right"><img src="<?php echo $r['path'];?>" width="267" height="179"></td>
			
		</tr>
		<?php
			}
		?>

	</table>
</div>

<?php include "footer.php"; ?>

<?php
}
else
{
     header("location:index.php");
}
?>
