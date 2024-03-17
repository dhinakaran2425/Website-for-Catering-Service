<?php include "header.php"; ?>
<style>.button {
    display: inline-block;
    color:white;
    background-color: maroon;
    border-radius: 20px;
    padding: 10px 18px;
    transition: 300ms;
}

.button:hover {
    transform: translateY(5px);
}
</style>

<div class="content">
<div>
	<form method="POST">
		<label>From: </label><input type="date" name="from" style="width: 10%; padding: 10px; color: orange; background-color: black;">
		<label>To: </label><input type="date" name="to" style="width: 10%; padding: 10px; color: orange; background-color: black;">
		<input type="submit" value="Get Data" name="submit" class="button">
	</form>
</div>
<h2>Data Between Selected Dates</h2>
<div>
	<table border="1" align="center" style="width: 100%; padding: 50px; color: black; background-color: white;">
		<thead>
			<th>Product</th>
			<th>Username</th>
			<th>Date</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Total</th>
		</thead>
		<tbody>
	
<?php
			if (isset($_POST['submit'])){
				include('connect.php');
				$from=date('Y-m-d',strtotime($_POST['from']));
				$to=date('Y-m-d',strtotime($_POST['to']));
				$oquery=$con->query("select * from `addcart` where edate between '$from' and '$to'");
				while($orow = $oquery->fetch_array()){
					?>
					<tr>
						<td><?php echo $orow['p_id']?></td>
						<td><?php echo $orow['u_id']?></td>
						<td><?php echo $orow['edate']?></td>
						<td><?php echo $orow['qty']?></td>
						<td><?php echo $orow['price']?></td>
						<td><?php echo $orow['total']?></td>
					</tr>
					<?php 
				}
			}
		?>
        </tbody>
	</table>
</div>
<h2>Sales Report</h2>
	<?php include  "connect.php"; ?>
	<table border=1 cellpadding="6" cellspacing="8">
	<form action="data-filter-sales.php" method="post">
	<div class="input-group">
    <input type="text" name="valueToSearch" placeholder="Value To Search"></div><br>
    <div class="input-group"> <input class="button" type="submit" name="search" value="Filter"></div>
		<tr>
			 <th colspan="8">CLIENTS</th>
		</tr>
		<tr>
			<th>Product ID</th>
			<th>User ID</th>
			<th>Date</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total</th>
		</tr>
		<?php
		$s = mysqli_query($con,"select * from addcart");
		while($r = mysqli_fetch_array($s))
		{
		?>
		<tr>
			<td><?php echo $r['p_id']; ?></td>
			<td><?php echo $r['u_id']; ?></td>
			<td><?php echo $r['edate']; ?></td>
			<td><?php echo $r['price']; ?></td>
			<td><?php echo $r['qty']; ?></td>
            <td><?php echo $r['total']; ?></td>
			
		<?php
		}
		?>
	</table>
	 
	<div class="input-group">
                                <form method="post" action="export.php">
     <input type="submit" name="export" class="button" value="Export" /></form></div>
     <form action="after-login.php" method="post">    <div class="input-group">  <input type="submit" class="button" value="Back"></div>
 </form>
                                     </form>
	</div>
</div>

<?php include "footer.php"; ?>