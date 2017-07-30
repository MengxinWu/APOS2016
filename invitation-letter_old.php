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
<div id="wrapper" style="height:1200px;">

	<!-- 左边导航 -->
	<div id="sidebar" style="height:1200px;" >	
	    <div class="tit-image"> 
	    <img src="images/source/t6.jpg" style="height:120px;vertical-align:middle;" alt="title" align="left">
		</div>
		<div id="menu" class="menu-v">
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
	
	<!-- 内容开始 -->
	<div id="content">
		<div id="payment">
		    <!-- 标题图片  -->
			<div class="title" style="height:60px;">
			  <img src="images/source/p25.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
			</div>
			
			<!-- 注册信息填写 -->
			
			<div class="content"> 
			<p style="color:red;font-size:18px;">The entrance of the invitation letter is closed.</p>
			</div>
		</div>	
	<!-- End Content -->
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