<?php session_start(); ?>
<?php include "login-header.php"; ?>
<style>
	.wwa-box {
    background-color: green;
    padding: 30px;
    margin-left: 10px;
    text-align: center;
    color: white;

}

.wwa-box:first-child {
    margin-left: 0px;
}

.wwa-box h3 {
    margin-bottom: 5px;

}

.wwa-box:hover {
    box-shadow: 3px 5px 12px 0px maroon;
}


.flex-design {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.mb {
    margin-bottom: 3rem;
}


.mt {
    margin-top: 5rem;
}
.wwa-content {
    max-width: 1020px;
    margin-left: auto;
    margin-right: auto;
}

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
	<br>
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="images/aq1.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20">				<div>
					<?php
					if(isset($_SESSION['uid']))
					{
					?>
					Hi <?php echo $_SESSION['uid']; ?> &nbsp;&nbsp;<br>
					Are you looking for Great foods?
					<?php	
					}
					else
					{	
					?>
					<a href="registration.php">NEW USER</a>&nbsp;&nbsp;&nbsp;<a href="login.php">LOGIN</a>
					<?php
					}
					?>	

					  </div>
							<p><a class="button" href="login-menu.php">Food Menu</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/aq.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>We like  <br> to eat well.</strong></h1>
							<p class="m-b-40">Sri Balaji Food Catering Service is serving a high class Vegitarian Food 
<br>...</p>
							<p><a class="button" href="contact.php">Contact Us</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/267.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Yummy food with Balaji</strong></h1>
							<p class="m-b-40">Deliciousness jumping into the mouth<br> 
							We know our food..</p>
							<p><a class="button" href="review.php">Review</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Sri Balaji Food Catering Service</span></h1>
						<h4>Little Story</h4>
						<p>Here You Get a pure vegetarian catering foods around erode.</p>
						<p>Sri Balaji Food Catering Service, a budgetable Vegetarian Catering Service.We are doing Catering Food Delivery Orders aswell as we provide Bulk Catering Food Delivery Orders around erode through online....</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="contact.php">Contact Us</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/images.jpg"  width="200%" height="200%" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Sri Balaji Food Catering Service</span>
				</div>
			</div>
		</div>
	</div>
	<section class="wwa mt mb">
            <div class="wwa-content flex-design ">
                <div class="wwa-box">
                    <h1 style="color: maroon">Individual Foods</h1>
                    <h4><p>Here You Get a pure vegetarian foods around erode.Click the below link to order....</p></h4>
					<h5><p><a class="button" href="idorder.php">Order Now</a></p></h5>
                </div>
                <div class="wwa-box">
                    <h1 style="color: maroon">Bulk Function Order</h1>
                    <h4><p>Sri Balaji Mess And Bakery, a budgetable Vegetarian hotel.We are doing Catering Food Delivery Orders aswell we provide Bulk Catering Food Delivery Orders around erode through online.Click the below link to order....</p></h4>
					<h5><p><a class="button" href="border.php">Order Now</a></p></h5>
                </div>
        </section>
			
			
	
<?php include "login-footer.php"; ?>