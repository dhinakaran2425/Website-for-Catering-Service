<?php session_start(); ?>
<?php include  "header.php"; ?>
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
			<th>UserID</th>
			<th>Username</th>
			<th>Date</th>
		</thead>
		<tbody>
	
<?php
			if (isset($_POST['submit'])){
				include('connect.php');
				$from=date('Y-m-d',strtotime($_POST['from']));
				$to=date('Y-m-d',strtotime($_POST['to']));
				
				$oquery=$con->query("select * from `checkout` where edate between '$from' and '$to'");
				while($orow = $oquery->fetch_array()){
					?>
					<tr>
						<td><?php echo $orow['u_id']?></td>
						<td><?php echo $orow['name']?></td>
						<td><?php echo $orow['edate']?></td>
					</tr>
					<?php 
				}
			}
		?>
        </tbody>
	</table>
</div>


<?php include "footer.php" ?>	