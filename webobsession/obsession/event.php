<?php


require_once "queryDb.php";


$search = $_GET["name"];


$data = getEvents();


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$phone = $_POST["phone"];

addCustomer($fname, $lname, $address, $phone);

$submit = $_GET["fname"];

$kund = getCustomers($submit);

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
				<div id="nav"><a href="event.php"><span style="text-decoration: underline; color: orange">Events</span></a></div>
	            <div id="nav"><a href="about.php">About</a></div>
	            <div id="nav"><a href="contact.php">Contact</a></div>
	            
	        	<div id="icontop"><a href="contact.php"><img src="socialicons/phoneW.png" width="28"/></a></div>
	        	<div id="headerspace"> </div>
			</div>
	   
	  		<div class="eventbody">
			
	  			<div class="eventbox">
	  					<h1>Events</h1><br/>
	  					<p>To show how much we <span style="font-weight: bold; color: orange">appriciate</span> our clients we have put <span style="font-weight: bold; color: orange">together</span> some events and we would <span style="font-weight: bold; color: orange">love</span> you to join. <br/>Fill in your details to the right to sign up for the events!!</p>
						
	  				<table style="width: 100%">
                   		<thead>
                        	<th>Eventname</th>
                        	<th>Location</th>
                        	<th>Description</th>
                        	<th>Date</th>
                    	</thead>
                    	<tbody> 
                        	<?php
                            	foreach ($data as $dat){
                            	    echo "<tr>";
                            	    echo "<td>&nbsp" . $dat["EVENTNAME"] . " </td>";
                            	    echo "<td>&nbsp" . $dat["LOCATION"] . " </td>";
                            	    echo "<td>&nbsp" . $dat["DESCRIPTION"] . " </td>";
                            	    echo "<td>&nbsp" . $dat["DATE"] . " </td>";
                            	    echo "</tr>";
                                }
                        	?>
                    	</tbody>
                	</table>
	  				
	  			</div>	<!-- container1 -->
	  			<br\>
				<div class="map"> 
                
               		<form action="event.php" method="post">
               			<fieldset id="contactinfo">
               				<legend><h6>SIGN UP FOR EVENTS HERE!</h6></legend>
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
               		</form>
                </div>  <!-- map -->
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