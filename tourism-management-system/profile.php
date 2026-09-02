<?php 
include('header.php'); 
include '_dbconnect.php';
$id = $_SESSION['userId']; 
$sql = "Select * from tbl_userregistration where id='$id'"; 
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $row=mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['emailid'];
        $mobile = $row['mobile'];
    }
?>
<section class="inner">
<div class="inner_data">
<h2>My Profile</h2>
<ul class="pagi-inner">
<li><a href="index.php">Home </a></li>
<li><a href="#0"> Profile</a></li>
</ul>
</div>
</section>
<section class="contacts">
<div class="container">
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
<h3>My Profile</h3>
<form method="post" action="_profileUpdate.php">
<div class="row">
<div class="col-md-6"> 
		<!-- Name input-->
		<div class="form-group">
			<label class="control-label">Name:</label>
				<input id="name" name="name" type="text" placeholder="Enter Your Name*" class="form-control" value="<?php echo $name; ?>" required>
		</div>
</div>
<div class="col-md-6"> 
		
		<!-- Email input-->
		<div class="form-group">
			<label class="control-label">Emailid:</label>
				<input id="email" name="email" type="email" placeholder="Enter Your Email*" class="form-control" required value="<?php echo $email; ?>">
		</div>
</div>
</div>
<div class="row">
<div class="col-md-6"> 
		<!-- Mobile input-->
		<div class="form-group">
			<label class="control-label">Phone No.:</label>
				<input id="phone" name="phone" type="text" placeholder="Enter Your Phone No*" class="form-control" value="<?php echo $mobile; ?>" required>
		</div>
</div>

<div class="form-group">
<div class="col-md-12 text-center">
		<button type="submit" class="btn-view">Update</button>
</div>
</div>
</form>
</div>
<div class="col-md-2">
</div>
</div>
</div>
</section>
<?php include('footer.php'); ?>