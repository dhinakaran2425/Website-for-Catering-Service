<style>


.dropdown {
  position: relative;
  display: inline-table;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: maroon;
  padding: 12px 12px;
  text-decoration: none;
  display: block;
}



.show {display: block;}
</style>
<link rel="stylesheet" type="text/css" href="style2.css">
<div class="h">Sri Balaji Food Catering Service</div>
<div class="mbg">
	<a href="after_login.php" class="menu">I-Order</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="border_list.php" class="menu">B-Order</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="food.php" class="menu">Food Menu</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="gallery.php" class="menu">Gallery</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="review.php" class="menu">Reviews</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<div class="dropdown">
  <a onclick="myFunction()" class="menu">Invoices</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
  <div id="myDropdown" class="dropdown-content">
  <a href="InvoiceMg-PHP/invoice-create.php" class="menu">Invoice</a>
    <a href="InvoiceMg-PHP/invoice-list.php" class="menu">Manage Invoice</a>
  </div>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.menu')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
	<a href="notification.php" class="menu">Notification</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="sales_report.php" class="menu">Sales Report</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="foodsales.php" class="menu">Food Sales</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="user.php" class="menu">User Registration</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
	<a href="logout.php" class="menu" style="color: red;">Logout</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
</div>
<br><br>
