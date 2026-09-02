<?php 
include('header.php'); ?>
<section class="inner">
<div class="inner_data">
<h2>Change Password</h2>
<ul class="pagi-inner">
<li><a href="index.php">Home </a></li>
<li><a href="#0"> Change Password</a></li>
</ul>
</div>
</section>
<section class="contacts">
<div class="container">
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
<h3>Change Password</h3>
<form method="post" action="_updatePassword.php">
<div class="row">
<div class="col-md-6"> 
		<!-- Name input-->
		<div class="form-group">
			<label class="control-label">Current Password:</label>
				<input id="cpassword" name="cpassword" type="password" placeholder="Current Password*" class="form-control" required>
		</div>
</div>
<div class="col-md-6"> 
		
		<!-- Email input-->
		<div class="form-group">
			<label class="control-label">New Password:</label>
				<input id="npassword" name="npassword" type="password" placeholder="New Password*" class="form-control" required>
		</div>
</div>
</div>
<div class="row">
<div class="col-md-6"> 
		<!-- Mobile input-->
		<div class="form-group">
			<label class="control-label">Confirm Password:</label>
				<input id="conpassword" name="conpassword" type="password" placeholder="Confirm Password*" class="form-control"required>
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