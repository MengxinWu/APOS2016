<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index-origin.dwt.php" codeOutsideHTMLIsLocked="false" -->


<!-- html文件头部输出  -->
<?php
   echo file_get_contents("./html/head.html");
?>

<body>


<div class="container">
  
  
  <!-- 导航输出  -->
  <?php
    echo file_get_contents("./html/nav.html");
  ?>
  <!-- End! -->
  
  
<!-- 主体内容 -->
<div id="wrapper" style="height:1250px;">

	<!-- 左边导航 -->
	<div id="sidebar" style="height:1250px;" >	
	    <div class="tit-image"> 
	    <img src="images/source/t6.jpg" style="height:120px;vertical-align:middle;" alt="title" align="left">
		</div>
		<div id="menu" class="menu-v" style="font-size:16px;">
		  <ul>
					<li><a href="registration.php#registration" >Registration</a></li>
					<li><a href="payment.php#payment" >Payment</a></li>
					<li><a href="venue.php#venue" >Venue</a></li>
					<li><a href="hotel-info.php#hotel-info" >Hotel Information</a></li>
					<li><a href="http://www.meet-in-shanghai.net/"  target="_blank" >About Shanghai</a></li>
					<li><a href="invitation-letter.php#invitation-letter" >Letter of Invitation</a></li>
					<li><a href="lunch.php#instruction" >Lunch, Reception&nbsp;&amp;&nbsp;Banquet</a></li>
					<li><a href="labandcampu.php#news-information" >Lab and Campus Tour</a></li>
					<li><a href="html/Conf-Noti.pdf" target="_blank">Conference Notification</a></li>
		  </ul>
		</div>
		
    <!-- 图片导航输出 -->
    <?php
      echo file_get_contents("./html/caidan.html");
    ?>
	</div>
	
	
	
	
	<!-- Begin Content -->
	<div id="content">
    
		<div id="instruction">
		    <!-- 标题图片  -->
			<div class="title" style="height:60px;">
			  <img src="images/source/p29.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
			</div>

		    <p class="title"><u>Lunch:</u></p>
		    <div id="reg-content" style="width:680px;text-align:justify;">
				<p>&bull;&nbsp;&nbsp; <b>Date:</b>&nbsp; Oct. 11 (Tue.) ~ Oct. 14 (Fri.), noon
				<br/>&bull;&nbsp;&nbsp; <b>Place:</b>&nbsp; SJTU Faculty Club</p>	
				<p>All participants are invited. Faculty Club is an on-campus restaurant within walking distance from the conference venue. 
				Typical Chinese dishes will be served.</p>
			</div>
 
			<p class="title"><u>Welcome Reception</u></p>
			<div id="reg-content" style="width:680px;text-align:justify;">
				<p>&bull;&nbsp;&nbsp; <b>Date:</b>&nbsp; Oct. 11, 2016 (Tue.)
				<br/>&bull;&nbsp;&nbsp; <b>Place:</b>&nbsp; TIKI CHINA&nbsp;&amp;&nbsp;Patsy’s</p>	
				<p>All participants are invited. Reception buffet will be served with snacks and refreshments. 
				Please be gathered in Lobby (1F) after the session to follow a guided walking route to the restaurant. </p>
			</div>
			 
			<p class="title"><u>Conference Dinner (Banquet)</u></p>
			<div id="reg-content" style="width:680px;text-align:justify;">
				<p>&bull;&nbsp;&nbsp; <b>Date:</b>&nbsp; Oct. 13, 2016 (Thu.)
				<br/>&bull;&nbsp;&nbsp; <b>Place:</b>&nbsp; Shanghai Grand Theatre Banquet Hall</p>	
				<p>All participants are invited. Delicate Shanghai cuisines and beverage will be served. 
				Please be gathered in Lobby (1F) after the session to get on a shuttle bus.</p>
			</div>

		</div>
	</div>
<!-- End! -->
</div>
  <!-- 页面底部背景 -->
  <div class="footer">
  	<div>
    <a><img src="images/source/footer.jpg" name="footer_logo" width="1055" height="190" id="footer_logo" /></a> 
    </div>
  </div>
   <!-- end ! -->

  
  <div class="buttonUp">
  	<a><img style="width:100%; height:100%" src="images/button/buttonUp.png" /></a>
  </div> 
  <!-- end .container -->
 </div>
  
</body>
<div class="clear"></div>
<script type="text/javascript" src="style/js/scripts.js"></script>
<!--[if !IE]> -->
<script type="text/javascript" src="style/js/jquery.corner.js"></script>
<!-- <![endif]-->
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
<!-- InstanceEnd --></html>
<!-- site made by ZQ, arfanty2000@126.com !-->