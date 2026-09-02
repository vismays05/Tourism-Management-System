<?php include('header.php'); ?>
<section class="inner">
<div class="inner_data">
<h2>Contact Us</h2>
<ul class="pagi-inner">
<li><a href="index.php">Home </a></li>
<li><a href="#0"> Contact Us</a></li>
</ul>
</div>
</section>
<section class="contacts">
<div class="container">
<div class="row">
<div class="col-md-4">
<h3>Our Office</h3>
<ul>
<li><i class="fa fa-location-arrow" aria-hidden="true"></i></li>
<li>Delhi, India </li>
</ul>
<ul>
<li><i class="fa fa-phone" aria-hidden="true"></i></li>
<li>Call us for any Query<br>
<strong>+91 9876543210</strong></li>
</ul>
<ul>
<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
<li>Send us email for any Information<br>
<strong>info@indiatraveldevils.in </strong></li>
</ul>
</div>
<div class="col-md-8">
<h3>Please Fill this Form to Contact us</h3>
<form method="post" action="_contact.php">
<div class="row">
<div class="col-md-6"> 
		<!-- Name input-->
		<div class="form-group">
				<input id="name" name="name" type="text" placeholder="Enter Your Name*" class="form-control" required>
		</div>
</div>
<div class="col-md-6"> 
		
		<!-- Email input-->
		<div class="form-group">
				<input id="email" name="email" type="email" placeholder="Enter Your Email*" class="form-control" required>
		</div>
</div>
</div>
<div class="row">
<div class="col-md-6"> 
		<!-- Mobile input-->
		<div class="form-group">
				<input id="phone" name="phone" type="text" placeholder="Enter Your Phone No*" class="form-control" required>
		</div>
</div>
<div class="col-md-6"> 
		
		<!-- Mobile input-->
		<div class="form-group">
				<input  name="subject" type="text" placeholder="Enter Your Subject*" class="form-control" required>
		</div>
</div>
</div>

<!-- Message body -->
<div class="form-group">
<textarea class="form-control" name="message" placeholder="Enter Your Message*" rows="8" required></textarea>
</div>

<!-- Form actions -->
<div class="form-group">
<div class="col-md-12 text-center">
		<button type="submit" class="btn-view">Send Message</button>
</div>
</div>
</form>
</div>
</div>
</div>
</section>
<?php include('footer.php'); ?>