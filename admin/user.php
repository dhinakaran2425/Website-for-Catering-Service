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
		<tr>
			 <th colspan="8">CLIENTS</th>
		</tr>
		<tr>
			<th>User ID</th>
			<th>Mobile</th>
			<th>Email</th>
		
		</tr>
		<?php
		$s = mysqli_query($con,"select * from registration");
		while($r = mysqli_fetch_array($s))
		{
		?>
		<tr>

			<td><?php echo $r['userid']; ?></td>

			<td><?php echo $r['mobile']; ?></td>
			<td><?php echo $r['email']; ?></td>

		
			
		<?php
		}
		?>
	</table>

	</div>
</div>

<?php include "footer.php"; ?>