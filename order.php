<?php session_start(); ?>
<?php include "header.php"; ?>
<div style="height: 140px;"></div>
<div style="width: 90%; margin: 0 auto; background-color: silver; padding: 50px;">

<?php
if(isset($_SESSION['uid']))
{
	include "connect.php";
	$uid = $_SESSION['uid'];
	$nm = $_POST['nm'];
	$mo = $_POST['mo'];
	$em = $_POST['em'];
	$ad = $_POST['ad'];
	$s= mysqli_query($con,"select * from addcart where u_id='$uid'");
	while($r = mysqli_fetch_array($s))
	{
		$p_id = $r['p_id'];
		mysqli_query($con,"insert into checkout(p_id, u_id,name,mobile,email,location) values('$p_id','$uid','$nm','$mo','$em','$ad')") or die("Error");
	?>
		
	<?php
	}


?>

	<div style="background-color: #3b0878; font-size:2.3em; color: #b7e352;">Order Place SuccessFully </div>
	<div style="color: #4d2e1f; font-size:1.8em;"> 
			More Detail to Contact 24x7 <br>
			+91 96248 23167<br>
			+91 93275 25361<br>
			<a class="btn btn-lg btn-circle btn-outline-new-white" href="index.php">Home</a>
			</div>

<?php
}
else
{
?>
		<div style="background-color: pink; color: black; padding: 20px; font-size: 2.1em;">No Record Found please Add to Cart Your Product Then Continue to Check Out</div>

<?php
}	
?>

</div>
<br><br><br>



<?php include "footer.php"; ?>    

  
