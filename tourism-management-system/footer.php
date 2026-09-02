<footer>
<div class="container">
<div class="row">
<div class="col-md-4">
<h4>About <span style="color:#ffcc33;">Travel</span> <span>Devils</span></h4>
<p>Travel Devils is a venture of daring and adventures acts. Fueled with Enthusiasm and talent the venture was founded on 8th June, 2016. Over the time span we have trekked to various rocking and alluring places like Rishikesh, Jim Corbett, Himachal, and exhibited Rafting, Trekking and many more killer and adventurous activities for the groups.</p>
</div>
<div class="col-md-4">
<h4>Useful <span>Links</span></h4>
<ul class="foot-menu">
<li><a href="index.php">Home</a></li>
<li><a href="about-us.php">About Us</a></li>
<li><a href="gallery.php">Trip Photo Gallery</a></li>
<li><a href="contact-us.php">Contact Us </a></li>
</ul>
</div>
<div class="col-md-4">
<h4>Upcoming <span>Trips</span></h4>
<div class="row">
<div class="col-md-3 col-xs-3"><img src="images/img7.jpg" class="img-rounded"></div>
<div class="col-md-9 col-xs-9">
<h6>Ladakh Bike Tour</h6>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-3 col-xs-3"><img src="images/img7.jpg" class="img-rounded"></div>
<div class="col-md-9 col-xs-9">
<h6>Ladakh Bike Tour</h6>
</div>
</div>
</div>
</div>
</div>
<div class="copyright">Copyright <?php echo date('Y'); ?> India Travel Devils. All Rights Reserved</div>
</footer>

<!-- jQuery --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.2/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/custom.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script> 
<script type="text/javascript">
jQuery(function () {

var filterList = {

init: function () {


$('#gallerylist').mixItUp({
selectors: {
target: '.gallery_frame',
filter: '.filter'	
},

load: {
filter: '.Leh-Ladakh'  
}     
});								

}

};

// Run the show!
filterList.init();


});	
</script>
</body>
</html>