<?php session_start();
	$uid = $_SESSION['uid'];
 include "header.php"; ?>
<style type="text/css">
	tr{

	}
	tr:hover{
		background-color: lightgreen;
		color: black;

	}
</style>
<div style="height: 150px;"></div>
<div style="width: 90%; margin: 0 auto;">
	<center> <img src="cart.jpg" width="10%"> </center>
<center> <p style="font-size: 2.4em; color: red"> VIEW CART PRODUCT HERE 	</p> </center> 
	<div style="width: 90%; padding: 20px; text-align: right;">
			<a href="checkout.php"><img src="images/chcekout.png" width="40"></a>
			<a href="checkout.php">Check Out</a> 
		</div>
	<br>
	<div>
		<?php include "connect.php";
		$grand_total = 0;
			$s = mysqli_query($con,"SELECT addcart.price, addcart.qty, addcart.total,addcart.id, menu.image
FROM addcart
INNER JOIN menu ON addcart.p_id=menu.id where addcart.u_id='$uid'");
		?>
        
		<table border=1 width="80%" align="center" cellpadding="8" cellspacing="10" style="color: black">
		<tr><th>image  </th>
			<th>Price</th>
			<th>Qty</th>
			<th>Total</th>
			<th>Remove</th>
		</tr>

		<?php
			while($r = mysqli_fetch_array($s))
			{
		 ?>
			<tr>
				<td align="right"><img src="admin/<?php echo $r['image']; ?>" width=100 height=100></td>
				<td><?php echo $r['price']; ?></td>
				<td><?php echo $r['qty']; ?></td>
				<td><?php echo $r['total']; ?></td>
				<td><a href="deletecart.php?id=<?php echo $r['id']; ?>">Delete</a></td>

			</tr>
			
            <?php $grand_total +=$r["total"];?>
            <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td> 
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong><?php echo number_format($grand_total,1); ?></strong></td>
                        </tr>
		
		<?php
		}
		?>
        
		</table>	
		<div style="width: 90%; padding: 20px; text-align: right;">
			<a href="checkout.php"><img src="images/chcekout.png" width="40"></a>
			<a href="checkout.php">Check Out</a> 
		</div>
        
	</div>
		
    <?php
include "footer.php";
?>