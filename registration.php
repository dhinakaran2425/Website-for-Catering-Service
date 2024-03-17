<?php include "header.php"; ?> 
<body>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1> USER REGISTRATION</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
      <table cellpadding="10" cellspacing="12" align="left	">
     <form action="" method="POST"> 

  <tr>
  	<td>
  <input type="text" name="uid" value="" placeholder="Enter user id" required=""style="padding: 10px; width: 300%"> <br>  </td>
    </tr>
   
   <tr>	
 <td> <input type="password" name="pass" value="" placeholder=" Enter Your password" required="" style="padding: 10px; width: 300%" > <br> </td>
   </tr>

   <tr>  
 <td> <input type="mobile" name="mobile" value="" placeholder="Enter Your Mobile Number" required="" style="padding: 10px; width: 300%" required maxlength="10" pattern="^[6-9][0-9]{9}$">  <br> </td>
</tr> 

  <tr>  
 <td> <input type="email" name="email" value="" placeholder="Enter Your Email Address" required="" style="padding: 10px; width: 300%">  <br> </td>
</tr>
   
      <tr>   
<td align="center"><div class="input-group">
				<button name="submit" class="btn">submit</button>
			</div>    </tr>
    	
    </form>
 </table>

					<?php
					if(isset($_POST['submit']))
					{
						
						$uid = $_POST['uid'];
						$pass =$_POST['pass'];
						$mobile= $_POST['mobile'];
						$email = $_POST['email'];
						include "connect.php";
						mysqli_query($con,"insert into registration(userid, password,email,mobile) values('$uid','$pass','$email','$mobile')");
						echo "<script>alert('Registration SuccessFully')</script>";
						echo "<center>Registration SuccessFully ... Click to <a href='login.php'>login</a></center>";
					}	

					?>





				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>