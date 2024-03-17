<?php session_start(); ?>
<?php include "login-header.php"; ?>
<div style="height: 140px;"></div>
<div style="width: 90%; margin: 0 auto; background-color: silver; padding: 50px;">
<style>
.button {
    display: inline-block;
    color:white;
    background-color: maroon;
    border-radius: 20px;
    padding: 10px 18px;
    transition: 300ms;
}

.button:hover {
    transform: translateY(5px);
	color: maroon;
	background-color: white;
}
</style>
<?php
if(isset($_SESSION['uid']))
{
	include "connect.php";
	$uid = $_SESSION['uid'];
	$edate = $_POST['edate'];
	$nm = $_POST['nm'];
	$mo = $_POST['mo'];
	$em = $_POST['em'];
	$ad = $_POST['ad'];
	$s= mysqli_query($con,"select * from addcart where u_id='$uid'");
	while($r = mysqli_fetch_array($s))
	{
		$p_id = $r['p_id'];
		mysqli_query($con,"insert into checkout(p_id, u_id,edate,name,mobile,email,location) values('$p_id','$uid', '$edate', '$nm','$mo','$em','$ad')") or die("Error");
	?>
		
	<?php
	}


?>

	<div style="background-color: #3b0878; font-size:2.3em; color: #b7e352;">Order Place SuccessFully </div>
	<div style="color: #4d2e1f; font-size:1.8em;"> 
			We Will Verify And Send The Invoice Copy To your Mail Id<br>
			
			
	</div>

	<div style="color: #4d2e1f; font-size:1.8em;"> 
			More Detail to Contact 24x7 <br>
			+91 63746 10120
	</div>

<?php
}
else
{
?>
		<div style="background-color: pink; color: black; padding: 20px; font-size: 2.1em;">No Record Found please Add to Cart Your Product Then Continue to Check Out</div>

<?php
}	
?>

</div> 
<br><br><br>



<?php include "login-footer.php"; ?>    

  
