<?php include('header.php'); ?>
<section class="inner-2"> <img src="images/inner2.jpg" alt="">
<div class="pagination_b">
<div class="container">
<ul class="pagi-inner">
<li><a href="index.php">Home </a></li>
<li><a href="#0"> Popular Package </a></li>
<?php
include '_dbconnect.php';
$ids = $_GET['id'];
$type= $_GET['type'];
$sql_package = "SELECT * from  tbl_packagetype where id='$type'";
$result_package = mysqli_query($conn, $sql_package);
$row_package = mysqli_fetch_assoc($result_package);?>
<li><a href="#0"> <?php echo $row_package['package_type']; ?> </a></li>
<?php
$sql_package = "SELECT * from  tbl_tourpackage where id='$ids'";
$result_package = mysqli_query($conn, $sql_package);
$tour_package = mysqli_fetch_assoc($result_package);?>
<li><a href="#0"> <?php echo $tour_package['package_name']; ?></a></li>
</ul>
</div>
</div>
</section>
<?php if($loggedin){?>
<section class="inner-3">
<div class="container">
<div class="details">
<div class="row">
<div class="col-md-6 col-md-push-6"><img src="images/<?php echo $tour_package['package_image']; ?>" alt=""></div>
<div class="col-md-6 col-md-pull-6">
<h3><?php echo $tour_package['package_name']; ?></h3>
<ul class="process">
<li><i class="fa fa-map-marker" aria-hidden="true"></i> <strong>Destinations</strong> : <?php echo $tour_package['package_location']; ?></li>
<li><i class="fa fa-tags" aria-hidden="true"></i> <strong>Price</strong> : <span class="price_color">Just Rs. <span class="price_size"><?php echo $tour_package['package_price']; ?></span> Per Person</span></li></ul>
<form method="post" action="_booktour.php">
<div class="card-body">
<div class="row">
<div class="col-md-1 col-lg-6">
<div class="form-group">
<label class="control-label">Start</label>
<input type="date" name="start" class="form-control" required />
</div>
</div>
<div class="col-md-3 col-lg-6">
<div class="form-group">
<label class="control-label">End</label>
<input type="date" name="end" class="form-control" required/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3 col-lg-12">
<div class="form-group">
<label class="control-label">Comment</label>
<textarea name="comment" class="form-control" required></textarea>
</div>
</div>
</div>
<input type="hidden" name="package_id" value="<?php echo $ids; ?>">
<button type="submit" class="btn-query">Book Now</button> <a href="#0" class="btn-numb"><i class="fa fa-phone" aria-hidden="true"></i> <span>+91 9876543210</span></a>
</div>
</form>
</div>
</div>
</div>

<!-- Nav tabs -->
<ul class="nav nav-tab" role="tablist">
<li role="presentation" class="active"><a href="#About" aria-controls="About" role="tab" data-toggle="tab">About Package</a></li>
<li role="presentation" ><a href="#Query" aria-controls="Query" role="tab" data-toggle="tab">Submit Query</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content tab-2">
<div role="tabpanel" class="tab-pane active" id="About">
<p><?php echo $tour_package['package_details']; ?></p>
</div>
<div role="tabpanel" class="tab-pane" id="Query">
<form method="post" action="_contact.php">
<div class="card-body">
<div class="row">
<div class="col-md-1 col-lg-6">
<div class="form-group">
<label class="control-label">Name</label>
<input type="text" name="name" class="form-control" required />
</div>
</div>
<div class="col-md-3 col-lg-6">
<div class="form-group">
<label class="control-label">Email</label>
<input type="email" name="emailid" class="form-control" required/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4 col-lg-6">
<div class="form-group">
	<label class="control-label"> Phone</label>
	<input type="text" name="phone" class="form-control" required/>
</div>
</div>
<div class="col-md-2 col-lg-6">
<div class="form-group">
	<label class="control-label">Subject</label>
	<input type="text" name="subject" class="form-control" required/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3 col-lg-12">
<div class="form-group">
<label class="control-label">Message</label>
<input type="text" name="message" class="form-control" required/>
</div>
</div>
</div>
<button type="submit" class="btn-query">Submit </button> 
</div>
</form>
</div>
</div>
</div>
</section>
<?php } else {
	echo "<script>
                    window.history.back(1);
                    </script>";
} ?>
<?php include('footer.php'); ?>