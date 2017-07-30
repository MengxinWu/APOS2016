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
<div id="wrapper" style="height:2180px;">

	<!-- 左边导航 -->
	<div id="sidebar" style="height:2180px;" >	
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
	<!-- end! -->
	
	</div>
	<!-- End！ -->
	
	
	<!-- Begin Content -->
	<div id="content">
		<div id="venue">
			<div class="title" style="height:60px;">
		    <img src="images/source/p20.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
		    </div>
			
			<div id="ven-content">
			<p>The venue of APOS 2016, <b>Haoran high-tech mansion</b> is a 24-storey modernized office building. 
			It has a prime site in Xujiahui area, one of the most vibrant and habitable districts in downtown Shanghai. 
			Haoran high-tech mansion forms part of Shanghai Jiao Tong University Xuhui campus. It has outstanding transportation 
			links within Shanghai, with major railway stations and airports. With its on-campus and convenient location, 
			the building is a favoured choice for organizing academic conferences and commercial events.</p>
			</div>
			<div style="padding-left:190px;">
			<img src="images/source/venue.jpg" style="height:350px;vertical-align:middle;" alt="title" align="left"></img>
		    </div>
			<div id="ven-content">
			<p class="title">Address</p>
			<p><b>Haoran high-tech mansion</b><br>55 West Guangyun Road, Xuhui District, Shanghai, China<br>
			<b>浩然高科技大厦</b><br>上海市徐汇区广元西路55号
			</p>
			</div>
			<div style="padding-left:50px;">
			<img src="images/source/venue-map.jpg" style="height:450px;vertical-align:middle;" alt="title" align="left"></img>
		    </div>
		    <div id="ven-content">
			<p>The Metro is within walking distance at Jiaotong University and Xujiahui.<br>
               Line 1/9/11: <b>Xujiahui Station</b>, Exit 17/18<br>
               Line 10: <b>Jiao Tong University Station</b>, Exit 2 
			</p>
			<p class="title">How to get</p>
			<p><b>By Metro/Maglev Train</b></p>
			<div>
			<img src="images/source/track1.jpg" style="height:530px;vertical-align:middle;" alt="title" align="left"></img>
		    </div>
			<p><b>By Taxi</b></p>
			<div>
			<img src="images/source/track2.jpg" style="width:700px;vertical-align:middle;" alt="title" align="left"></img>
		    </div>
			</div>
		</div>
	</div>
	<!-- End Content -->
	
</div>
<!-- End! -->

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