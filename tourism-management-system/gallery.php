<?php include('header.php'); ?>
<section class="inner-2"> <img src="images/inner2.jpg" alt="">
<div class="pagination_b">
<div class="container">
<ul class="pagi-inner">
		<li><a href="#0">Home</a></li>
		<li><a href="#0"> Gallery</a></li>
</ul>
</div>
</div>
</section>
<section class="inner-3">
<div class="container">
<div class="fil_list">
<ul class="nav " role="tablist">
		<li role="presentation" class="active"><a href="#Ladakh" aria-controls="Ladakh" role="tab" data-toggle="tab">Leh-Ladakh</a></li>
		<li role="presentation"><a href="#Himachal" aria-controls="Himachal" role="tab" data-toggle="tab">Himachal</a></li>
		<li role="presentation"><a href="#Kashmir" aria-controls="Kashmir" role="tab" data-toggle="tab">Kashmir</a></li>
		<li role="presentation"><a href="#Rishikesh" aria-controls="Rishikesh" role="tab" data-toggle="tab">Rishikesh</a></li>
</ul>
</div>
<div class=" blog_d">
<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="Ladakh">
				<ul class="list-unstyled  lightgallery">
						<li data-responsive="images/portfolios/app/1.jpg" data-src="images/portfolios/app/1.jpg" >
								<div class="grid_box"> <img src="images/portfolios/app/1.jpg" alt=""> </div>
						</li>
						<li data-responsive="images/portfolios/app/2.jpg" data-src="images/portfolios/app/2.jpg" >
								<div class="grid_box"> <img src="images/portfolios/app/2.jpg" alt=""> </div>
						</li>
						<li data-responsive="images/portfolios/app/3.jpg" data-src="images/portfolios/app/3.jpg" >
								<div class="grid_box"> <img src="images/portfolios/app/3.jpg" alt=""> </div>
						</li>
				</ul>
		</div>
		<div role="tabpanel" class="tab-pane" id="Himachal">
				<ul class="list-unstyled  lightgallery">
						<li data-responsive="images/portfolios/card/1.jpg" data-src="images/portfolios/card/1.jpg" >
								<div class="grid_box"> <img src="images/portfolios/card/1.jpg" alt=""> </div>
						</li>
						<li data-responsive="images/portfolios/card/2.jpg" data-src="images/portfolios/card/2.jpg" >
								<div class="grid_box"> <img src="images/portfolios/card/2.jpg" alt=""> </div>
						</li>
						<li data-responsive="images/portfolios/card/3.jpg" data-src="images/portfolios/card/3.jpg" >
								<div class="grid_box"> <img src="images/portfolios/card/3.jpg" alt=""> </div>
						</li>
				</ul>
		</div>
		<div role="tabpanel" class="tab-pane" id="Kashmir">...</div>
		<div role="tabpanel" class="tab-pane" id="Rishikesh">...</div>
</div>
</div>
</div>
</section>
<?php include('footer.php'); ?>