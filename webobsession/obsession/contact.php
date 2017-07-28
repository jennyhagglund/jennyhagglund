<?php

require_once "queryDb.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$phone = $_POST["phone"];

addCustomer($fname, $lname, $address, $phone);

$search = $_GET["fname"];

$data = getCustomers($search);

?>


<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0">
		<link type="text/css" rel="stylesheet" href="mobile.css" media="(max-width: 451px)"/>
		<link type="text/css" rel="stylesheet" href="desktop.css" media="(min-width: 452px)"/>
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans+Condensed" />

									<title>Obsession</title>
	</head>
	<body>
		<div id="background">
		    <div id="trans"> </div>
	    
	        <div id="header">
	    	
	    	    <div id="headerspace"> </div>
	    	    <div id="headerspace"> </div>
	        	<div id="headerspace"> </div>
	        	<div id="headerspace"> </div>
	        	<div id="headerspace"> </div>
	        	<div id="logo"><a href="book.php" class="hoverbooking">make a booking</a></div>	
	    	  	<!--<div id="logo"><span style="color: orange; font-size: 40px; font-family: Gill Sans, Verdana">Obsession</span></div>	-->    	  	
	    	  	<!-- <div id="book"><a href="book.html">Book an Appointment</a></div> -->
	            <div id="nav"><a href="index.html">Home</a></div>
	            <div id="nav"><a href="service.php">Services</a></div>
				<div id="nav"><a href="gallery.html">Gallery</a></div>
				<div id="nav"><a href="event.php">Events</a></div>
	            <div id="nav"><a href="about.php">About</a></div>
	            <div id="nav"><a href="contact.php"><span style="text-decoration: underline; color: orange">Contact</span></a></div>

	            <div id="icontop"><a href="contact.php"><img src="socialicons/phoneW.png" width="28"/></a></div>
	            <div id="headerspace"> </div>
	        </div>
	  	
            <div class="contactbody">
	  	        
                <div class="contactleft"> 				
        
                    <h1>Contact us</h1><br/>
		            <p> 	
		            <ul>
					    <li>HEAD OFFICE</li>
					    <li>112 EDWARD STREET,</li>
					    <li>BRISBANE, CBD, 4000</li>
					    <br/>
					    <li><span style="font-weight:bold">T 02 9380 2299</span></li>
					    <li><span style="font-weight:bold">F 02 9380 2833</span></li>
					    <li><span style="font-weight:bold">E info@obsession.com</span></li>
			    	</ul>
				    </p><br/>
				    

		        </div>
                <div class="map2"> 
                               	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:350px;width:400px;'><div id='gmap_canvas' style='height:350px;width:400px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="https://privacypolicytemplate.net">privacy policy template</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(-27.47014,153.02867170000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-27.47014,153.02867170000002)});infowindow = new google.maps.InfoWindow({content:'<strong>Obsession</strong><br>112 edwars street  4000 brisbane, australien<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                               	
                               	<!---	<form action="contact.php" method="post">
               			<fieldset id="contactinfo">
               				<legend><h6>Sign up for our newsletter here!</h6></legend>
               				<label>
               					First name
               					<input type="text" name="fname" id="nameinput" placeholder="" />
               				</label><br/>
               				<label>
               					Last name
               					<input type="text" name="lname" id="lastnameinput" placeholder="" />
               				</label><br/>
               				<label>
               					Email
               					<input type="text" name="address" id="addressinput" placeholder="" />
               				</label><br/>
               				<label>
               					Phone 
               					<input type="text" name="phone" id="phoneinput" placeholder="" />
               				</label><br/>
               			</fieldset>

               			<fieldset id="submitbutton">
               				<input type="submit" id="submit" value="submit" />
               			</fieldset>               			
               		</form>-->
                </div>  <!-- map --> 
            </div>  <!-- contactbody -->
            
	    	<div id="footer">
	    	
				<div id="address"><h4>112 Edward  Street, Brisbane,  CBD</h4></div>
	       
	       		<div id="icon">
	       			<img src="socialicons/fbW.png" width="25"/>
	       			<img src="socialicons/insW.png" width="25"/>
	       			<img src="socialicons/pinW.png" width="25"/>
	       		</div>
	       
	       		<div id="copyright"><h4> &copy; 2016 Jenny Maria Hagglund</h4></div>
	   		</div>	<!-- footer -->

	   	</div>  <!-- background -->
	
	    <div id="hiddenfooter">
		
		    <div class="row">
		    <div class="col-2"> </div>

    			<div class="col-4">
	    			<h5>ABOUT</h5>
		    		<p>Obsession is an award winning best hairdresser and hair salon located in Brisbane CBD. We offer luxury hairstyles, cuts and colours.</p>
			    	<p>At Obsession hairdressing we strive to be fashion, forward in our approach to hair cutting, styling and colouring. We present to our clients exceptional personalised service with a focus on ensuring our clients leave the salon with fresh, beautiful and healthy hair.</p>
			    </div>

    			<div class="col-2">
	    			<h5>HOURS</h5>
		    		<ul>
			    		<li>Mon to Wed - 9am to 6pm</li>
			    		<li>Thursday - 9am to 7.30pm</li>
				    	<li>Friday - 9am to 8.30pm</li>
				    	<li>Saturday - 9am to 5.30pm</li>
				    	<li>Sunday <span style="font-weight:bold">Closed</span></li>
				    </ul>
			    </div>

		    	<div class="col-2">
	
			    	<h5>CONTACT</h5>
				    <ul>
				    	<li>HEAD OFFICE</li>
					    <li>112 EDWARD STREET,</li>
				    	<li>BRISBANE, CBD, 4000</li>
				    	<br/>
				    	<li><span style="font-weight:bold">T 02 9380 2299</span></li>
				    	<li><span style="font-weight:bold">F 02 9380 2833</span></li>
				    	<li><span style="font-weight:bold">E info@obsession.com</span></li>
				    </ul>
			    </div>

			    <div class="col-2"></div>

	        </div>  <!-- row -->
        </div>  <!-- hiddenfooter -->
    </body>
</html>