<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css?<?php echo time(); ?>"/>
	<link rel="icon" type="image/x-icon" href="favicon.ico"/>
	<title>Contact DeRanged</title>
</head>
<body>
	<div id="wrapper">
	
	<!-- Header -->
		<nav class="headernav">		
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="news.html">News</a></li>
				<li><a href="furystream.html">Streams</a></li>				
				<li><a href="team.html" id="tab">Team</a></li>
				<li><a href="results.html">Results</a></li>
				<li><a href="videos.html">Videos</a></li>
			</ul>
			<img class="derangedlogo" src="DerangedLogo.png" alt="Deranged Logo" width="150" height="105">
		</nav>
	<!-- End Header -->
	
		<div class="contactuspage">		
		<!-- Form -->
			<form method="post">
				Your Email: <input type="text" name="name"></br>
				Subject: <span id="contactsubject"><input type="text" name="subject"></span></br>
				Please place your feedback in the box below:</br>
				<textarea rows="10" cols="40" name="message"></textarea><br/>
				<input type="submit" name="send" Value="Send">
				<?php
					if (isset($_POST["send"]))						
						{
							// Check if the "name" input field is filled out
							if (isset($_POST["name"]))
							{
								$name = $_POST["name"]; // sender email
								$subject = $_POST["subject"];
								$message = $_POST["message"];
								$message = wordwrap($message, 70);
								
								// send mail
								mail("tseitz10@hotmail.com", "DeRanged eSports: $subject", $message, "From: $name\n");
								echo "Thank you for sending us feedback";
							}
						}
				?>
			</form>
		<!-- End Form -->
		</div>
		
	<!-- Footer -->	
		<div class="footer">
			<span class="footer-copyright">Copyright &copy; DeRanged Gaming, all rights reserved.</span>			
			<a href="http://twitter.com/DeRangedCOD" target="_blank"><img class="footericons" src="TwitterIcon.png" alt="Twitter Icon" width="40" height="40"></a>						
			<a href="http://www.youtube.com/channel/UCTJ8DxXDFHle3zqEqZci2oQ/feed" target="_blank"><img class="footericons" src="YoutubeIcon.png" alt="Youtube Icon" width="40" height="40"></a>
			<a class="contactus" href="contactus.php">Contact Us</a>
		</div>
	<!-- End Footer -->
	</div>
</body>
</html>