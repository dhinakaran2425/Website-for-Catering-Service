<?php include "header.php"; ?>
<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
<ul class="widget widget-menu unstyled">
								<li><a style="background-color: green; color: #fff;"><i class="menu-icon icon-table" style="color: #fff;"></i> ORDER STATUS </a></li>
                                
									<li>
										<a style="background-color: limegreen; color:white;"href="todays-orders.php">
											<i class="icon-tasks"></i>
											Today's Orders
  <?php
  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 $result = mysql_query("SELECT * FROM Orders where orderDate Between '$from' and '$to'");
$num_rows1 = mysql_num_rows($result);
{
?>
											<b class="label orange pull-right"><?php echo htmlentities($num_rows1); ?></b>
											<?php } ?>
										</a>
									</li>
									<li>
										<a style="background-color: limegreen; color:white;"href="pending-orders.php">
											<i class="icon-tasks"></i>
											Pending Orders
										<?php	
	$status='Delivered';									 
$ret = mysql_query("SELECT * FROM Orders where orderStatus!='$status' || orderStatus is null ");
$num = mysql_num_rows($ret);
{?><b class="label orange pull-right"><?php echo htmlentities($num); ?></b>
<?php } ?>
										</a>
									</li>
									<li>
										<a style="background-color: limegreen; color:white;"href="delivered-orders.php">
											<i class="icon-inbox"></i>
											Delivered Orders
								<?php	
	$status='Delivered';									 
$rt = mysql_query("SELECT * FROM Orders where orderStatus='$status'");
$num1 = mysql_num_rows($rt);
{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>

										</a>
									</li>
							
                            </ul><!--/.widget-nav-->
							
							
						</ul>
                        <?php include "footer.php"; ?>