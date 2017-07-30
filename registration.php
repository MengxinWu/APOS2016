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
<div id="wrapper" style="height:1600px;">

	<!-- 左边导航 -->
	<div id="sidebar" style="height:1600px;" >	
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
		<div id="registration">
		    <!-- 标题图片  -->
			<div class="title" style="height:60px;">
			  <img src="images/source/p17.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
			</div>
			<!-- Registration Fees  -->
		    <p class="title">Registration Fees</p>
		    <div id="reg-content">
			    <table border="1" >
					<tr>
					  <td class="up-1" colspan="2"><b>APOS 2016</b></td>
					  <td class="up-2"><b>Early<br>(Before or on Sep. 9, 2016)</b></td>
					  <td class="up-3"><b>On-site<br>(After Sep. 9, 2016)</b></td>
					</tr>
					<tr>
					  <td class="int-1" rowspan="2"><b>Regular</b></td>
					  <td><b>Member</b></td>
					  <td>USD 450 (CNY 3000)</td>
					  <td>USD 500 (CNY 3300)</td>
					</tr>
					<tr>
					  <td><b>Non-Member</b></td>
					  <td>USD 550 (CNY 3600)</td>
					  <td>USD 600 (CNY 3900)</td>
					</tr>
					<tr>		
					  <td class="down-1" colspan="2"><b>Student</b></td>
					  <td>USD 350 (CNY 2300)</td>
					  <td>USD 400 (CNY 2600)</td>
					</tr>
			    </table>
			</div>
		    <!-- Notes  -->
		    <p class="title">Notes</p>
		    <div id="reg-content">
				<p><strong>Members are required to select which society listed below they belong to and 
				to enter their membership ID.</strong></p>
				<ul>
					<li><p>• IEEE Photonics Society</p></li>
					<li><p>• The Optical Society of America(OSA)</p></li>
					<li><p>• The International Society for Optical Engineering(SPIE)</p></li>
					<li><p>• The China Optical Society (COS)</p></li>
				</ul>
				<p><strong>Regular / Student Registration Fee includes:</strong></p>
				<ul>
					<li><p>• Conference materials</p></li>
					<li><p>• Access to the conference</p></li>
					<li><p>• Coffee break</p></li>
					<li><p>• Conference Lunch</p></li>
					<li><p>• Conference Reception</p></li>
					<li><p>• Conference Banquet</p></li>
				</ul>
				<p><strong>At least one of the accepted abstract authors should register to Regular or 
				Student type.</strong></p>
			 </div>
			<!-- Extra items  -->
			<p class="title">Extra items</p>
			<div id="reg-content">
				<table border="1">
				<tbody>
					<tr>
						<td class="ext-1"><b>Extra Banquet Ticket</b></td>
						<td class="ext-2">USD 100 (CNY 600)</td>
					</tr>
					<tr>
						<td class="ext-2"><b>Extra Reception Ticket</b></td>
						<td class="ext-1">USD 50 (CNY 300)</td>
					</tr>
					<tr>
						<td class="ext-1"><b>Extra conference program book and Technical Digest on USB Disk</b></td>
						<td class="ext-2">USD 50 (CNY 300)</td>
					</tr>
				</tbody>
				</table>
			</div>
			<!-- Register Entrance  -->
			<p class="title">Register Entrance</p>
			<div id="reg-content">
			<p><strong>For the oversea attendees, please register online through OSA via the 
			<a href="payment.php#oversea"  style="color:red;">registration link</a>. </strong></p>
			<p><strong>For the mainland Chinese attendees, please register online via the 
			<a href="payment.php#mainland" style="color:red;">registration link</a>. </strong>
			（中国大陆参会者请由此注册）</p>
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