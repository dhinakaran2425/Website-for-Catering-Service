<?php 

include 'connect.php';

session_start();

error_reporting(0);

if (isset($_SESSION['uid'])) {
    header("Location: login-index.php");
}

if (isset($_POST['submit'])) {
	$uid = $_POST['uid'];
	$pass =($_POST['pass']);

	$sql = "SELECT * FROM registration WHERE userid='$uid' AND password='$pass'";
	$result = mysqli_query($con, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['uid'] = $row['uid'];
		header("Location: login-index.php");
	} else {
		echo "<div style='color:black; border-radius:10px; padding:10px; text-align:center; background-color:tomato;'>Please Enter Valid User and password</div>";
	}
}

?>

<?php include "header.php"; ?> 
<body>
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Login </h1>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
<form action="" method="post">

  <table border="0" align="center" cellpadding="5" cellspacing="7">
	
	        <tr align="right">	
		     <td> <img src="images/Avatar.png" style="width: 30%"> <br>
		      <a href="registration.php"> New User?</a></td>
		 </tr>
		<tr>
             <td> enter your user id </td>
        <td> <input type="text" name="uid" placeholder="Enter Your User ID" style="padding: 10px; width: 150%" value="<?php echo $uid; ?>" required> <br>  </td>
		
		</tr>

		<tr>
           <td> enter your password</td>
 <td> <input type="Password" name="pass" placeholder="Enter Your Password" style="padding: 10px; width: 150%" value="<?php echo $_POST['pass']; ?>" required> <br>   </td>
		
		</tr>

		<tr>	    
 <td align="right"><div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div> 
</tr>
               
              
</form>
		</table>			




				</div>
			</div>
		
		</div>
	</div>
<?php include "footer.php"; ?>