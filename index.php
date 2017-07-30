<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>::APOS 2016::The 6th Asia Pacific Optical Sensors Conference</title>
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/leftside.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
  	<?php
        echo file_get_contents("./html/nav.html");
    ?>
  
	<div id="wrapper" style="height:1050px;">

		<div id="sidebar" style="height:1050px;" >	
	    	<div class="tit-image"> 
	    		<img src="images/source/t1.jpg" style="height:120px;vertical-align:middle;" alt="title" align="left">
			</div>
		<div id="menu" class="menu-v">
		  	<ul>
				<li><a class="subnav_show" href="#welcome-message" >Welcome Messages</a></li>
				<li><a class="subnav_show" href="#news-information" >News Information</a></li>
				<li><a class="subnav_show" href="#important-dates" >Important Dates</a></li>
		  	</ul>
		</div>
		
    	<?php
      		echo file_get_contents("./html/caidan.html");
    	?>
		</div>
	
		<div id="content">
			<div id="welcome-message">
				<img src="images/source/p1.jpg" class="title_img" alt="welcome-message">
				<p>
					<font style="font-weight:bold;font-size:18px; color:rgb(66, 141, 199);">Asia-Pacific Optical Sensors Conference (APOS) 
					</font>
					has been held every 18 months tracing back to 2008, and continues a series of conferences that are intended to provide a central 
					forum for an update and review of technical information covering a wide range of optical sensing fields from fundamental researches to 
					systems and application. The conference is open to researchers and professionals from not only Asia-Pacific Rim area but also all regions of the world. 
					<br><br>
					The 6th APOS (APOS 2016) will be co-organized by Shanghai Jiao Tong University and Yangtze Optical Fibre and Cable Joint Stock 
					Limited Company (YOFC). It is jointly sponsored by OSA, SPIE, IEEE Photonics Society, Chinese optical society (COS) and Chinese Society 
					for Optical Engineering (CSOE). The APOS 2016 will be held in Shanghai, China from October 11 to 14, 2016. 
					<br><br>
					On behalf of the organizing committee of the APOS 2016, it is our great honor and pleasure to cordially invite you to the Conference, to share 
					your most significant advances, and to take the chance of interacting in a mutually profitable relationship.
					<br><br>
				    Welcome to APOS 2016, Shanghai.
				</p>
				
				<p class="title">Organized by:</p>
				<ul>
					<li>
						<img src="images/sponsors/sjtu.png" alt="title" style="width:200px;" >
						<img src="images/sponsors/changfei.png" alt="title" style="width:200px;">
					</li>
					<li>
						<img src="images/sponsors/skl.jpg" alt="title" style="width:250px;">
					</li>	
				</ul>

				<p class="title">Sponsored by:</p>
				<ul>
					<li>
						<img src="images/sponsors/PhotonicsSociety.png" alt="title" style="width:200px;">
						<img src="images/sponsors/spie.png" alt="title" style="width:200px;">
						<img src="images/sponsors/OSA.png" alt="title" style="width:200px;margin-left:15px;">
					</li>
					<li>
						<img src="images/sponsors/cos.jpg" alt="title" style="width:200px;">
						<img src="images/sponsors/csoe.png" alt="title" style="width:200px;margin-left:20px;margin-top:10px;">
					</li>
				</ul>
			</div>

			<div id="news-information">
				<img src="images/source/p4.jpg" class="title_img" alt="news-information">
				<p>
					&bull; The 2nd Call-For-Papers is ready with Plenary Speeches and Invited Talks. The deadline of submitting 
			  		Post-Deadline Papers to APOS2016 is <span style="color:red;font-weight:bold;">21st September, 2016</span>. Authors from Asia Pacific countries and the rest of the world are 
			  		all welcome.
			  		<br><br>
		  			&bull; The notification of acceptance or rejection have be announced  <span style="color:red;font-weight:bold;">in the middle of July, 2016</span>. 
		  			If you haven't received the email of notifiction, please contact us via submission@apos2016.org.
		  			<br><br>
		  			&bull; <a href="files/APOS2016_Program.pdf" target="_blank">The complete Conference Program is available for download.</a>
		  			<br><br>
		  			&bull; <a href="instructions.php#instruction" >The Instructions for Presentations is updated.</a>
		  			<br><br>
		  			&bull; <a href="postdeadline.php#instruction" >The Program of Post-Deadline Paper Session is ready.</a>
		  			<br><br>
		  			&bull; <a href="open.html" >The photo gallery of APOS2016 is updated.</a>
		  		</p>
			</div>

			<div id="important-dates">
				<img src="images/source/p5.jpg" class="title_img" alt="important-dates">
				<p>
					&bull; Paper Submission Deadline for Post-Deadline Papers: <span style="color:red;font-weight:bold;">21st September, 2016</span>.
				</p>
			</div>
		</div>
	</div>

<footer>
	<img src="images/source/footer.jpg" width="1055" alt="footer" />
</footer>

<script src="js/jquery-3.2.1.js"></script>
<script src="js/main.js"></script>
</body>
</html>
  