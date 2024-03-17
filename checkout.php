<?php session_start();
include "login-header.php";
?>
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

<div style="height: 150px;"></div>
<div style="width: 80%; margin: 0 auto;">
		<div style="width: 50%; margin: 0 auto;">
		
<?php include  "connect.php"; ?>

	<form action="order.php" method="post">

		<table align="center" border="1" cellspacing="14" cellpadding="12" style="width: 100%">
          <tr>
			<th> <h1 align="center" style="font-size: 2.3em;">Fill Up Details To Deliver Your Item</h1> </th>
		<br>
            </tr>
			<td style="color: red"> <h3> Select The Date </h3>
			<input type="date" name="edate" style="width: 100%; padding: 10px; color: orange; background-color: black;" required min="<?php echo date('Y-m-d'); ?>"></td>
			    <tr align="center">

			    	<td style="color: red"> <h3> Enter Your Name </h3>
			        <input type="text" name="nm" placeholder="Enter your name" style="width: 100%; padding: 10px; color: orange; background-color: black;" required="" pattern="[a-z,A-Z]*"></td>
			    		
			    </tr>

			    <tr align="center">
			    	<td style="color: red"> <h3>  Enter Mobile no </h3>
			        <input type="no" name="mo" placeholder="Enter Mobile no" style="width: 100%; padding: 10px; color: orange; background-color: black;" required="" pattern="\d{10}"></td>
			    </tr>

			    <tr align="center">
			    	<td style="color: red">  <h3> Enter Email Address </h3>
			        <input type="Email" name="em" placeholder="Enter email address" style="width: 100%; padding: 10px; color: orange; background-color: black;"></td>
			    </tr>

                <tr align="center">
                	<td style="color: red"><h3> Enter Address </h3>
                 <input type="text" name="ad" placeholder="enter your address" style="width: 100%; padding: 50px; color: orange; background-color: black;">
                </tr>	
				<tr align="center">
                	<td style="color: red"><img src="upi.jpg" width="200" height="200"><h3> Transaction ID</h3>
	    	<input type="text" name="transactionid" placeholder="transaction Id" maxlength="25" class="form-control" required="">
	    	<br><br>
	   </td>
</tr>

                <tr align="center">
                	<td colspan="4" > <input type="submit" name="s" value="Confirm Order" class="button"> </td>
                	
                </tr>

                		    </table>	
			</form>
		           <br> <br>



	</div>
</div>


<?php include "login-footer.php"; ?>