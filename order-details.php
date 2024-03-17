<?php session_start(); ?>
<?php include  "login-header.php"; ?>
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
<br><br><br><br><br><br><br><br>
<?php
ob_start();
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "0";
$uid=$_SESSION['uid'];
include('connect.php');
error_reporting(E_ERROR | E_PARSE);
$query = "SELECT * from catering where id='$id'";
$data = mysql_query($query);
?>

<div class="container">
<form role="form"  method="post" action="catering-booking.php" enctype="multipart/form-data">
					<h3>Details</h3>
					<ul>
                        <li>Price : <?php echo $rec['price']; ?></span></li>
                        <li><i class="fa fa-angle-right"></i> Items:<b> <?php echo $rec['items']; ?></b></span></li>
                        </ul>
                <div class="input-group">
               <input type="date" name="edate" required min="<?php echo date('Y-m-d'); ?>">
               <input type="text" value="<?php echo $rec['id']; ?>" name="id" style="display:none;">
               <input type="text" value="<?php echo $rec['cname']; ?>" name="cname" style="display:none;">
                <br>
                <button type="submit" class="button">Check</button>
                        </div>
                        </form>
</div>
                        



<?php include  "login-footer.php"; ?>
