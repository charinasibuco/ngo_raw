<?php
include('layout/header.php');
include('layout/navigation.php');
?>
<img src="assets/images/static_banner.png" style="width:100%">
<div class="container">
	<div class="col-sm-6 tabs">
		<h1 style="color:#ED232A">Location</h1><br>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<div style="overflow:hidden;height:500px;width:auto;">
				<div id="gmap_canvas" style="height:500px;width:600px;">
					<a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">map-embed.com</a>
					<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
					<a class="google-map-code" href="http://www.zahnarzt-rosenheim.org" id="get-map-data">Mr. Ngo (Main Office)</a></div>
					<script type="text/javascript"> 
					function init_map()
					{
						var myOptions = {zoom:18,center:new google.maps.LatLng(10.676247466526235,122.95327071884913),mapTypeId: google.maps.MapTypeId.HYBRID};
						map = new google.maps.Map(document.getElementById("gmap_canvas"), 
						myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(10.676247466526235, 122.95327071884913)});
						infowindow = new google.maps.InfoWindow({content:"<b>Mr. Ngo (Main Office)</b><br/>Lacson Street<br/>6100 Bacolod City" });
						google.maps.event.addListener(marker, "click", function()
								{
									infowindow.open(map,marker);
								});
									infowindow.open(map,marker);
					}
					google.maps.event.addDomListener(window, 'load', init_map);
					</script>
			</div>
		<div class="col-sm-6">
			<h4>LOCATION</h4>
			<p>8901 Marmora RoadGlasgow, DO4 89GR.</p>
		</div>
		<div class="col-sm-6">
			<h4>We are Open</h4>
			<p>From 8:00AM - 5:00PM Monday-Saturday</p>
		</div>
	</div>
	<div class="col-sm-6 tabs">
		
		<form action="send_message.php" method="post" id="contact">
			<h1 style="color:#ED232A">Contact Us</h1><br>
			<?php 
			$messageConfirmation =( isset($_GET[ 'messageSent']) ? $_GET[ 'messageSent'] : null);
		        if($messageConfirmation) {
		            if($messageConfirmation==1 ) {
		                echo"<div class='alert alert-success margin' data-dismiss='alert'>
		                     <button type='button' class='close' data-dismiss='alert'>&times;</button>
		                     Thank you for contacting us! We'll respond as soon as possible.
		                    </div>";
		            }
		            else if($messageConfirmation==2) {
		                 echo   "<div class='alert alert-danger margin' data-dismiss='alert'>
		                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
		                            We are not able to send your message due to some error. Please try again.
		                        </div>";
		            }
		        }
			?>
			<input type="text" class="form-control" name="full_name" placeholder="Full Name" required><br>
			<input type="email" class="form-control" name="email" placeholder="Email" required><br>
			<input type="text" class="form-control" name="contact_number" placeholder="Phone Number" required><br>
			<input type="text" class="form-control" name="subject" placeholder="Subject" required><br>
			<textarea rows="6" class="form-control" name="message" placeholder="Type your message here...." required></textarea><br>
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				<button type="submit" name="submit" class="btn view" style="float:right">Submit</button>
			</div>
			<div class="col-sm-4">
			</div>	
		</form>
	</div>
</div>
<?php
include('layout/connect.php');
include('layout/footer.php');
?>