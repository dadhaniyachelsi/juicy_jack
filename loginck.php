<?php session_start();


$u = $_POST['uid'];
$p = $_POST['pass'];
include  "connect.php";
$s = mysqli_query($con,"select * from registration where userid='$u' and password='$p'");

if($r = mysqli_fetch_array($s))
{
		$_SESSION['uid'] = $u;
		header("location:index.php");

}
else
{
		echo "<br><div style='color:black; border-radius:10px; padding:10px; text-align:center; background-color:tomato;'>Please Enter Valid User and password</div><br>";
		include "login.php";
}

?>