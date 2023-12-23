<?php $id = $_GET['id'];
include "connect.php";
mysqli_query($con,"delete from addcart where id='$id'");
header("location:cart.php");
?>