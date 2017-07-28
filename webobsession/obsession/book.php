<?php

require_once "obsessionQuery.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$day = $_POST["day"];
$month = $_POST["month"];
$time = $_POST["time"];

addBooking($fname, $lname, $email, $day, $month, $time);

$search = $_GET["fname"];

$data = getBooking($search);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0">
		<link type="text/css" rel="stylesheet" href="mobile.css" media="(max-width: 451px)"/>
		<link type="text/css" rel="stylesheet" href="desktop.css" media="(min-width: 452px)"/>
        <link type="text/css" rel="stylesheet" href="https://www.brolmo.com/index.php?controller=AppAC&action=css&cid=24684" />
	
	
									<title>Obsession</title>
	</head>
	<body>
	    <div id="body">
		<div id="background">
		<div id="trans"></div>
	    
	    <div id="header">
	    	
	    	<div id="headerspace"> </div>
	    	<div id="headerspace"> </div>
	    	<div id="headerspace"> </div>
	    	<div id="headerspace"> </div>
	    	<div id="headerspace"> </div>
	    	
	    	  	<div id="logo"><a href="book.php" class="hoverbooking">make a booking</a></div>	    	
	    	   <!--<div id="book"><a href="book.html">Book an Appointment</a></div>-->
	            <div id="nav"><a href="index.html">Home</a></div>
	            <div id="nav"><a href="service.php">Services</a></div>
				<div id="nav"><a href="gallery.html">Gallery</a></div>
				<div id="nav"><a href="event.php">Events</a></div>
	            <div id="nav"><a href="about.php">About</a></div>
	            <div id="nav"><a href="contact.php">Contact</a></div>
	            
	            <div id="headerspace"> </div>
	            
	            <div id="icontop"><a href="contact.html"><img src="socialicons/phoneW.png" width="28"/></a></div>
	        <div id="headerspace"> </div>
	    </div>
	    <div class="contactbody">
			
	  		<div class="eventboxs">
	  			<div class="appointment"><h8>Make an Appointment</h8></div>
	  			<br/>
	  			
	  			<p>When <span style="font-weight: bold; color: orange">you</span> enter the front door of our <span style="font-weight: bold; color: orange">salon</span> - it is all about <span style="font-weight: bold; color: orange">you.</span><br/> 
	  			Get ready to be <span style="font-weight: bold; color: orange">pampered,</span> <span style="font-weight: bold; color: orange">loved</span> on, gushed over and provided with <br/>
	  			a <span style="font-weight: bold; color: orange">feeling</span> that will last you long after the appointment. <br/>
	  			We don't just cut or <span style="font-weight: bold; color: orange">colour</span> hair. 
	  			Our <span style="font-weight: bold; color: orange">desire</span> is to provide all our<br/> clients with an <span style="font-weight: bold; color: orange">incredible</span> 
	  			experience and a <span style="font-weight: bold; color: orange">professional</span> result.</p>
	  			
	  			<p>Fill in your details and your <span style="font-weight: bold; color: orange">desired</span>
	  			haircareday and we will send you <br/>a <span style="font-weight: bold; color: orange">confirmation</span>
	  			email back as soon as we can.</p>
	  				
	  			<span style=" color: orange; font-size: 22px">Hope to see you soon!</span>	
	  				
	  		</div>	<!-- container1 -->
	  		<br\>
			<div class="maps"> 
                <form action="book.php" method="post" class="bookform">
               			<fieldset id="contactinfo">
               				<legend><h6>Make a booking</h6></legend>
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
               					<input type="text" name="email" id="emailinput" placeholder="" />
               				</label><br/>
               				<label>
               					Day
               					<input type="text" name="day" id="dayinput" placeholder="" />
               				</label><br/>
               				<label>
               					Month 
               					<input type="text" name="phone" id="monthinput" placeholder="" />
               				</label><br/>
               				<label>
               					Time
               					<input type="text" name="time" id="timeinput" placeholder="" />
               				</label><br/>
               			</fieldset>

               			<fieldset id="submitbutton">
               				<input type="submit" id="submit" value="submit" />
               			</fieldset>               			
               		</form>
               	
                </div>  <!-- map -->
    		</div>	<!-- aboutbody -->
	  	
	
	  	</div>
	    	<div id="footer">
	    	
	        <div id="address"><h4>112 Edward  Street, Brisbane,  CBD</h4></div>
	       
	        <div id="icon">
	        <img src="socialicons/fbW.png" width="25"/>
	        <img src="socialicons/insW.png" width="25"/>
	        <img src="socialicons/pinW.png" width="25"/>
	        </div>
	       
	        <div id="copyright"><h4> &copy; 2016 Jenny Maria Hagglund</h4></div>
	  		</div>
		    </div>
		    </div>
	
	
		<div id="hiddenfooter">
		
		<div class="row">


			<div class="col-2">

			</div>

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
					<li>Sunday Closed</li>
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
					<li><span style="font-weight:bold">E info@obsession.com</span></li></ul>
			</div>

			<div class="col-2">

			</div>

		</div>
		
		 </div>
		 
</body>
</html>