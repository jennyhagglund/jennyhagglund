<?php


require_once "queryDb.php";


$search = $_GET["name"];


$data = getEvents();
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
			<div id="trans"></div>
	    
	   		<div id="header">
	    	
	    		<div id="headerspace"> </div>
	    		<div id="headerspace"> </div>
	    		<div id="headerspace"> </div>
	    		<div id="headerspace"> </div>
	    		<div id="headerspace"> </div>
	    		<div id="logo"><a href="book.php" class="hoverbooking">make a booking</a></div>	
	    	  	<!-- <div id="logo"><span style="color: orange; font-size: 40px; font-family: Gill Sans, Verdana">Obsession</span></div> -->	    	  	
	    	  	<!-- <div id="book"><a href="book.html">Book an Appointment</a></div> -->
	            <div id="nav"><a href="index.html">Home</a></div>
	            <div id="nav"><a href="service.php">Services</a></div>
				<div id="nav"><a href="gallery.html">Gallery</a></div>
				<div id="nav"><a href="event.php">Events</a></div>
	            <div id="nav"><a href="about.php"><span style="text-decoration: underline; color: orange">About</span></a></div>
	            <div id="nav"><a href="contact.php">Contact</a></div>
	            
	        	<div id="icontop"><a href="contact.php"><img src="socialicons/phoneW.png" width="28"/></a></div>
	        	<div id="headerspace"> </div>
			</div>
	   
	  		<div class="aboutbody">
	  		
	 			<div class="aboutcontainer">
	 				<h1>About us </h1> <br/><br/>
	 				<div class="about1">
       					<p>We are an <span style="font-weight: bold; color: orange">award winning</span> hair salon in Brisbane, 
       					offering a very high <br/>standard in all aspects of 
       					hairdressing including <span style="font-weight: bold; color: orange">Hair Extensions,</span><br/> 
       					Keratin <span style="font-weight: bold; color: orange">Hair Treatment</span> and Japanese Hair Straightening.
       					Here at<br/> <span style="font-weight: bold; color: orange">Obsession,</span> our primary commitment is 
       					to offer <span style="font-weight: bold; color: orange">exceptional</span> <br/>hair salon service. 
       					We <span style="font-weight: bold; color: orange">believe</span> in filling ourselves up with expert 
       					hair <br/>dressers knowledge to pour back out to <span style="font-weight: bold; color: orange">our clients.</span></p>
	  	 			</div>
				</div>	  	<!-- aboutcontainer -->
				
				<div class="aboutcontainer2">
						<div class="about2"> 
	  					<div class="img2"> <img src="galleryimg/about2.jpg" width="340" , height"170" /> </div>
	  					<div class="img2"> <img src="galleryimg/about2.jpg" width="340" , height"170" /> </div>
	  				</div>
					
	  				<!--<div class="about3">
	  					<h1>Whats on</h1>
	  					<p>To show how much we appriciate our clients we put together some events:</p>
					</div>-->
		
	   			<!-- <div class="img2"> <img src="galleryimg/about1.jpg" width="600" , height"350"/> </div>-->

	  			</div>	<!-- aboutcontainer2 -->
	  			<!--<div ="events">
	  				
	  				<table style="width: 100%">
                   		<thead>
                        	<th>ID</th>
                        	<th>Eventname</th>
                        	<th>Location</th>
                        	<th>Description</th>
                        	<th>Date</th>
                    	</thead>
                    	<tbody> 
                        	<?php
                            	foreach ($data as $dat){
                            	    echo "<tr>";
                            		echo "<td>&nbsp" . $dat["EVENTID"] . " </td>";
                            	    echo "<td>&nbsp" . $dat["EVENTNAME"] . " </td>";
                            	    echo "<td>&nbsp" . $dat["LOCATION"] . " </td>";
                            	    echo "<td>&nbsp" . $dat["DESCRIPTION"] . " </td>";
                            	    echo "<td>&nbsp" . $dat["DATE"] . " </td>";
                            	    echo "</tr>";
                                }
                        	?>
                    	</tbody>
                	</table>
	  				
	  				
	  			</div>-->
    		</div>	<!-- aboutbody -->
	   	
			<div id="footer">
	  		
	        	<div id="address"><h4>112 Edward  Street, Brisbane, CBD</h4></div>
	       
	       		<div id="icon">
					<img src="socialicons/fbW.png" width="25"/>
	        		<img src="socialicons/insW.png" width="25"/>
	        		<img src="socialicons/pinW.png" width="25"/>
	       		</div>
	        
	        	<div id="copyright"><h4> &copy; 2016 Jenny Maria Hagglund</h4></div>
			</div>	<!-- footer -->
		</div>	<!-- background -->	
	
		<div id="hiddenfooter">
		
			<div class="row">
				<div class="col-2"></div>

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

				<div class="col-2"> </div>
			</div>	<!-- row -->
		</div>	<!-- hiddenfooter -->
	</body>	
</html>