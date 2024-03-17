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

.button1 {
    display: inline-block;
    color:white;
    background-color: green;
    border-radius: 20px;
    padding: 10px 18px;
    transition: 300ms;
}

.button1:hover {
    transform: translateY(5px);
}
</style>
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Bulk Order Menu</h1>
				</div>
			</div>
		</div>
	</div>
    <h1><span>Food Details</span></h1>
    <div class="gallery-box">
		<div class="container">
			<div class="row">

    
                <?php
ob_start();
$connect = mysqli_connect("localhost", "root", "", "balajicatering");
error_reporting(E_ERROR | E_PARSE);
$query = "select * from catering";
$data = mysqli_query($query);
?>
                <?php
				$query = "SELECT * FROM catering ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
                <div class="col-md-4">
				<form method="post" action="booking-list.php?action=add&p_id=<?php echo $row["p_id"]; ?>">
					<div style="border:1px solid #333; background-color:white; border-radius:5px; padding:16px;" align="center">
                    <h4><?php echo $row['p_id']; ?></h4>
                    <img src="<?php echo $row['path'];?>" width="267" height="179">
											<p> <h4>Items: </h4><?php echo $row['items']; ?></p>
											<p>Rs <?php echo $row['price']; ?> /-</p>
                         <?php if(isset($_SESSION['uid']))
									{
									?>
											<a class="button" href="addcart-1.php?pid=<?php echo $row['p_id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $row['price']; ?>">Add Cart</a></h5>
                                            <button type="button" name="add_review" id="add_review" class="button1">Review</button>
						<ul>
    					<?php include  "rating1.php"; ?>
    				</ul>

									<?php
									}
									else
									{
									?>
										<a href="login.php">Add Cart</a>
									<?php } ?>
						
    					
						<br>
                    </div>
                </form>
                </div>
                <?php
					}
				}
			?>
</div>

                            </div>
                        </div>
                    </div>
    </div>
    



<?php include "login-footer.php" ?>	
