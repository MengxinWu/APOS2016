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
	<!-- end! -->
	
	</div>
	<!-- End！ -->
	
	<!-- 内容开始 -->
	<div id="content">
		<div id="payment">
		    <!-- 标题图片  -->
			<div class="title" style="height:60px;">
			  <img src="images/source/p24.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
			</div>
			<!-- The Oversea Attendees  -->
			<div id="oversea">
				<p class="title">The Oversea Attendees (海外参会者)</p>
				<div id="reg-content">
					<p>Please click the <strong><a href="http://www.osa.org/en-us/meetings/topical_meetings/the_6th_asia_pacific_optical_sensors_conference/registration/" target="_blank" style="color:red;">
					registration link</a></strong> to complete
					the registration. Please note that a paper will not be published without the registration of at least one of 
					its authors. If the first author of the paper is non-student, please make Regular Registration. 
					<strong>Online registration will close on 23rd September. On-site registration is available at the conference.
					</strong></p>
					<p>Attention: For the member of a cosponsor organization, the registration type available will remain "non-member". 
					However, on the payment page, the applicable discount will appear and you will receive the member pricing. 
					The payment page will be the last page in the registration process.</p>
				</div>
			</div>
			<!-- The Mainland Chinese Attendees  -->
			<div id="mainland">
				<p class="title">The Mainland Chinese Attendees (中国大陆参会者)</p>
				<div id="reg-content">
				<p>中国大陆参会者不用经过OSA系统注册，请首先在线提交注册信息，然后将注册费银行汇款至会议账号。每篇录用的论文需至少交一次注册费。
				如第一作者非学生，请进行普通注册。</p>
				<p>若需要邀请信，请在线填写<strong><a href="invitation-letter.php" target="_blank" style="color:red;">邀请信链接</a></strong>，以便给您发送邀请信。注册费发票在会场报到时领取。<br />
				若需要会议通知，请点击<strong><a href="html/Conf-Noti.pdf" target="_blank" style="color:red;">会议通知</a></strong>链接下载。</p>
				<p style="color:red;">在线提交注册的截止日期为2016年9月20日（银行汇款的截止时间是9月23日）。超过此期限请在会议现场进行注册和缴费（可以刷银行卡缴费）。
				<br>上海交通大学的参会者请用校内转账方式缴费，切勿通过银行汇款。</p>
				<p>如果注册时遇到任何问题，请联系 registration@apos2016.org</p>
				
				
				<p><strong><a href="register.php" style="color:red;">注册链接</a></strong></p>
				
				
				<!-- <p style="color:red;">在线注册已经关闭，请在会议现场进行注册和缴费。</p> -->
				
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