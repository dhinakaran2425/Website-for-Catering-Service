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
	<?php include  "connect.php"; ?>
	<table border=1 cellpadding="6" cellspacing="8">
	<form action="data-filter.php" method="post">
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
			<th>Customer Name</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Address</th>
            <th>Transaction Id</th>
            
			<th>View Product</th>
			<th>Delete</th>
		</tr>
		<?php
		$s = mysqli_query($con,"select * from checkout_1");
		while($r = mysqli_fetch_array($s))
		{
		?>
		<tr>
			<td><?php echo $r['p_id']; ?></td>
			<td><?php echo $r['u_id']; ?></td>
			<td><?php echo $r['edate']; ?></td>
			<td><?php echo $r['name']; ?></td>
			<td><?php echo $r['mobile']; ?></td>
			<td><?php echo $r['email']; ?></td>
			<td><?php echo $r['location']; ?></td>
            <td><?php echo $r['transactionid']; ?></td>
            
			<td><a href="viewcart_1.php?pid=<?php echo $r['p_id']; ?>&uid=<?php echo $r['u_id']; ?>">View Product</a></td>
			<td><a href="delorder_1.php?a=<?php echo $r['id']; ?>" class="del">DELETE</a></td>
        </tr>
			
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