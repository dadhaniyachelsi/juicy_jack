<?php session_start(); 
 ?> 
<body>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1 style="margin-left:44%;">ADD CART </h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">

	<form action="" method="post">
		
		<table align="center" border="1" cellspacing="14" cellpadding="12" style="color: black"  >

			    <tr align="center">

			    	<td style="color: red">  Product ID  </td>
			    	<td> <input type="hidden" name="pid"  value="<?php echo $_GET['pid']; ?>"><?php echo $_GET['pid']; ?></td>
			    	
			    </tr>

			    <tr align="center">
			    	<td style="color: red">   Your USERID </td>
			        <td> <input type="hidden" name="uid" value="<?php echo $_GET['uid']; ?>"><?php echo $_GET['uid']; ?></td>
			    </tr>
			    <tr align="center">
			    	<td style="color: red">   Price </td>
			        <td> <input type="hidden" name="price" value="<?php echo $_GET['price']; ?>"><?php echo $_GET['price']; ?></td>
			    </tr>
				    <tr align="center">
			    	<td style="color: red">   QTY</td>
			        <td> <input type="number" name="qty" value="" min=1 max=10 required></td>
			    </tr>

                <tr align="center">
                	<td colspan="4"> 
						
							<input type="submit" name="sb" value="Add Cart Now">
						</a>
					</td>
                </tr>
		</table>
	</form>
			<?php
			if(isset($_POST['sb']))
			{
				$pid = $_POST['pid'];
				$uid = $_POST['uid'];
				$price = $_POST['price'];
				$qty = $_POST['qty'];
				$total  = $price*$qty;

				include "connect.php";
				mysqli_query($con,"insert into addcart(p_id,u_id,price,qty,total ) values('$pid','$uid','$price','$qty','$total')") or die(mysqli_error($con));
				echo "<script>alert('Your data Is Add Inside Cart')</script>";
				header("Location: cart.php");

			}

			?>
					




				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
