<?php $id = $_GET['id'];
include "connect.php";
mysqli_query($con,"delete from addcart_1 where id='$id'");
header("location:b-cart.php");
?>