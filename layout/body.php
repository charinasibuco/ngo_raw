<div class="tile tabs">
	<div class="col-lg-2 col-sm-4">
			<img src="assets/images/food2.png">
			<span class="label label-info">P45.00</span>
			&nbsp;
			<h5 class="content-header">First Food Name</h5>
			<p class="content">Lorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
			 Imperdiet et sit donec, non libero et integer sem.</p>
		
	</div>
	<div class="col-lg-2  col-sm-4">
		<img src="assets/images/food4.png" >
		<span class="label label-info">P15.00</span>
		&nbsp;
		<h5 class="content-header">Second Food Name</h5>
		<p class="content">Lorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
		 Imperdiet et sit donec, non libero et integer sem.</p>
	</div>
	<div class="col-lg-2  col-sm-4">
		<img src="assets/images/food5.jpg" >
		<span class="label label-info">P25.00</span>
		&nbsp;
		<h5 class="content-header">Third Food Name</h5>
		<p class="content">Lorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
		 Imperdiet et sit donec, non libero et integer sem.</p>
	</div>
	<div class="col-lg-2 col-sm-4">
		<img src="assets/images/food3.png" >
		<span class="label label-info">P10.00</span>
		&nbsp;
		<h5 class="content-header">Fourth Food Name</h5>
		<p class="content">Lorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
		 Imperdiet et sit donec, non libero et integer sem.</p>
	</div>
	<div class="col-lg-2 col-sm-4">
		<img src="assets/images/food5.jpg" >
		<span class="label label-info">P30.00</span>
		&nbsp;
		<h5 class="content-header">Fifth Food Name</h5>
		<p class="content">Lorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
		 Imperdiet et sit donec, non libero et integer sem.</p>
	</div>
	<div class="col-lg-2 col-sm-4">
		<img src="assets/images/food1.jpg" >
		<span class="label label-info">P35.00</span>
		&nbsp;
		<h5 class="content-header">Sixth Food Name</h5>
		<p class="content">Lorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
		 Imperdiet et sit donec, non libero et integer sem.</p>
	</div>
</div>
<div class="col-sm-12 background">
	<div class="tabs" style="padding:10px; text-align:justify">
		<div class="col-lg-6 col-sm-7">
			<img src="assets/images/family-picnic.png" >
		</div>
		<div class="col-lg-6 col-sm-5" >
			<h3>Lorem Ipsum Dolor</h3>
			<p class="fourbox" >Lorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
				 Imperdiet et sit donec, non libero et integer sem.Lorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
		 Imperdiet et sit donec, non libero et integer semLorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
		 Imperdiet et sit donec, non libero et integer semLorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
		 Imperdiet et sit donec, non libero et integer semLorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
		 Imperdiet et sit donec, non libero et integer semLorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
		 Imperdiet et sit donec, non libero et integer semLorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
		 Imperdiet et sit donec, non libero et integer semLorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
		 Imperdiet et sit donec</p>
		 <div class="col-sm-4"></div>	
		 <div class="col-sm-4">
			<a href="contact_us.php"><button class="btn contact_btn">Contact Us</button></a>
		 </div>	
		 	<div class="col-sm-4"></div>	
		</div>
	</div>
</div>
<div class="col-sm-12 tabs">
	<div class="col-lg-3 col-sm-6">
		<div class="box boxleft">
			<img src="assets/images/health_benifits.png">
			<h5 class="content-header">HEALTH BENIFITS</h5>	
			<p>Lorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
				 Imperdiet et sit donec, non libero et integer sem.</p>
			<button class="btn view">VIEW MORE</button>
		</div>
	</div>
	<div class="col-lg-3 col-sm-6">
		<div class="box boxleft">
			<img src="assets/images/products.png">
			<h5 class="content-header">PRODUCTS</h5>	
			<p>Lorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
				 Imperdiet et sit donec, non libero et integer sem.</p>
			<button class="btn view">VIEW MORE</button>
		</div>
	</div>
	<div class="col-lg-3 col-sm-6">
		<div class="box boxright ">
			<img src="assets/images/franchise.png">
			<h5 class="content-header">HOW TO FRANCHISE</h5>	
			<p>Lorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
				 Imperdiet et sit donec, non libero et integer sem.</p>
			<button class="btn view">VIEW MORE</button>
		</div>
	</div>
	<div class="col-lg-3 col-sm-6">
		<div class="box boxright ">
			<img src="assets/images/why.png">
			<h5 class="content-header">WHY US?</h5>
			<p>Lorem ipsum dolor sit amet, gravida pellentesque amet ut id fringilla.
				 Imperdiet et sit donec, non libero et integer sem.</p>
			<button class="btn view text">VIEW MORE</button>
		</div>
	</div>
</div>
<div style="background-color:#FF" class="text">
	&nbsp;
</div>
<div class="parallax">
<p id="parallax">Text Here</p>
</div>
<script type="text/javascript">
var fourbox = $('.fourbox').offset().top;
var text = $('.text').offset().top;
$(window).scroll(function(){    
    if ($(this).scrollTop() >= fourbox){ 
        $('.boxleft').addClass('animated'); 
        $('.boxleft').addClass('fadeInLeft'); 
        $('.boxright').addClass('animated'); 
        $('.boxright').addClass('fadeInRight'); 
    }
});
$(window).scroll(function(){    
    if ($(this).scrollTop() >= text){ 
        $('.parallax p').addClass('animated'); 
        $('.parallax p').addClass('fadeInLeft'); 
    }
});
</script>