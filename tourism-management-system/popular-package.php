<?php include('header.php'); ?>
<section class="inner-2"> <img src="images/inner2.jpg" alt="">
<div class="pagination_b">
<div class="container">
<ul class="pagi-inner">
<li><a href="index.php">Home </a></li>
<li><a href="#0"> Popular Package </a></li>
<?php
include '_dbconnect.php';
$type= $_GET['type'];
$sql_package = "SELECT * from  tbl_packagetype where id='$type'";
$result_package = mysqli_query($conn, $sql_package);
$row_package = mysqli_fetch_assoc($result_package);?>
<li><a href="#0"> <?php echo $row_package['package_type']; ?></a></li>
</ul>
</div>
</div>
</section>
<section class="inner-3">
<div class="container">
<div  style="background:#999; padding:15px; display:flow-root">
<?php
include '_dbconnect.php';
$sql_package = "SELECT * from  tbl_tourpackage where package_type='$type'";
$result_package = mysqli_query($conn, $sql_package);

if (mysqli_num_rows($result_package) > 0) {
   while ($row_package = mysqli_fetch_assoc($result_package)) {?>
<div class="col-md-3">
<div class="card">
<div class="card_img"> <img src="images/<?php echo $row_package['package_image']; ?>" alt=""> </div>
<div class="card_data">
		<h3><?php echo $row_package['package_name']; ?></h3>
		<ul class="process">
				<li><i class="fa fa-location-arrow" aria-hidden="true"></i> <strong>Location</strong> : <?php echo $row_package['package_location']; ?></li>
				<li><i class="fa fa-tags" aria-hidden="true"></i> <strong>Price </strong> : <span class="price_color">Just <span class="price"> Rs. <?php echo $row_package['package_price']; ?></span></span></li>
		</ul>
		<?php if($loggedin){
		echo '<div class="btn-flex"> <a href="package-details.php?id='.$row_package["id"].'&type='.$type.'" class="btn-detail">View Details</a></div>';
		 } else {?>
                  <div class="btn-flex"> <a style="cursor:pointer;" data-toggle="modal" data-target="#loginModal" class="btn-detail">View Details</a></div>

		<?php } ?>
</div>
</div>
</div>
<?php        
}    
}
?>
</div>
</section>
<?php include('footer.php'); ?>