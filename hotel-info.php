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
<div id="wrapper" style="height:3730px;">

	<!-- 左边导航 -->
	<div id="sidebar" style="height:3730px;" >
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
		<div id="hotel-info">
			<div class="title" style="height:60px;">
		    <img src="images/source/p23.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
		    </div>

			<div id="hotel-content">
				<p>The APOS 2016 conference venue is surrounded by different accommodation options, ranging from chain hotels,
          serviced apartments to budget hostels and inns. To make your booking in advance is highly recommended.
          Please find more information about how to make your reservations below. </p>
				<img src="images/venue/hotel01.jpg" style="height:470px;vertical-align:middle;" alt="title" align="left"></img>
      </div>



			<div id="hotel-content">
				<p class="title">Hotel Recommendation</p>
				<p><b>On-campus Hotels</b></p>
				  <img src="images/venue/hotel02.jpg" style="height:430px;vertical-align:middle;" alt="title" align="left">
				  <div id="hotel-table">
					<table class="bordered">
					  <thead>
					  <tr>
						<th>Hotel</th>
						<th>Room Rates From</th>
						<th>Distance</th>
						<th>Online Reservation</th>
					  </tr>
					  </thead>
					  <tr>
						<td>Faculty Club</td>
						<td>RMB 480</td>
						<td>4-min walk, 261 m</td>
						<td><a href="http://english.ctrip.com/hotels/shanghai-hotel-detail-1727183"><p>http://english.ctrip.com/hotels/shanghai-hotel-detail-1727183</p></a></td>
					  </tr>
					  <tr>
						<td>Bo Xue Lou Hotel</td>
						<td>RMB 360</td>
						<td>4-min walk, 287 m</td>
						<td><a href="http://english.ctrip.com/hotels/shanghai-hotel-detail-2238328"><p>http://english.ctrip.com/hotels/shanghai-hotel-detail-2238328</p></a></td>
					  </tr>
					  </table>
					</div>

         <p><b>Express Hotels</b></p>
         <img src="images/venue/hotel03.jpg" style="height:460px;vertical-align:middle;" alt="title" align="left">
         <div id="hotel-table">
           <table class="bordered">
             <thead>
             <tr>
               <th>Hotel</th>
               <th>Room Rates From</th>
               <th>Distance</th>
               <th>Online Reservation</th>
             </tr>
             </thead>
             <tr>
               <td>Jinjiang Inn</td>
               <td>RMB 360</td>
               <td>6-min walk, 495 m</td>
               <td><a href="http://english.ctrip.com/hotels/shanghai-hotel-detail-484476"><p>http://english.ctrip.com/hotels/shanghai-hotel-detail-484476</p></a></td>
             </tr>
             <tr>
               <td>Hanting Express</td>
               <td>RMB 360</td>
               <td>13-min walk, 1000 m</td>
               <td><a href="http://english.ctrip.com/hotels/shanghai-hotel-detail-1480638"><p>http://english.ctrip.com/hotels/shanghai-hotel-detail-1480638</p></a></td>
             </tr>
             <tr>
               <td>JI Hotel</td>
               <td>RMB 420</td>
               <td>13-min walk, 936 m</td>
               <td><a href="http://english.ctrip.com/hotels/shanghai-hotel-detail-449927"><p>http://english.ctrip.com/hotels/shanghai-hotel-detail-449927</p></a></td>
             </tr>
             <tr>
               <td>Ibis Hotel</td>
               <td>RMB 420</td>
               <td>10-min walk, 730 m</td>
               <td><a href="http://english.ctrip.com/hotels/shanghai-hotel-detail-661069"><p>http://english.ctrip.com/hotels/shanghai-hotel-detail-661069</p></a></td>
             </tr>
             </table>
           </div>

           <p><b>Star-rated Hotels</b></p>
           <img src="images/venue/hotel04.jpg" style="height:445px;vertical-align:middle;" alt="title" align="left">
           <div id="hotel-table">
             <table class="bordered">
               <thead>
               <tr>
                 <th>Hotel</th>
                 <th>Room Rates From</th>
                 <th>Distance</th>
                 <th>Online Reservation</th>
               </tr>
               </thead>
               <tr>
                 <td>Tianping Hotel</td>
                 <td>RMB 600</td>
                 <td>8-min walk, 549 m</td>
                 <td><a href="http://english.ctrip.com/hotels/shanghai-hotel-detail-375223"><p>http://english.ctrip.com/hotels/shanghai-hotel-detail-375223</p></a></td>
               </tr>
               <tr>
                 <td>Hengshan Picardie Hotel</td>
                 <td>RMB 680</td>
                 <td>13-min walk, 968 m</td>
                 <td><a href="http://english.ctrip.com/hotels/shanghai-hotel-detail-425179"><p>http://english.ctrip.com/hotels/shanghai-hotel-detail-425179</p></a></td>
               </tr>
               <tr>
                 <td>The Suites Shanghai（Xihua Hotel）</td>
                 <td>RMB 620</td>
                 <td>8-min walk, 596 m</td>
                 <td><a href="http://english.ctrip.com/hotels/shanghai-hotel-detail-669098"><p>http://english.ctrip.com/hotels/shanghai-hotel-detail-669098</p></a></td>
               </tr>
               <tr>
                 <td>Crowne Plaza Shanghai</td>
                 <td>RMB 1000</td>
                 <td>13-min walk, 963 m</td>
                 <td><a href="http://english.ctrip.com/hotels/shanghai-hotel-detail-385095"><p>http://english.ctrip.com/hotels/shanghai-hotel-detail-385095</p></a></td>
               </tr>
               </table>
             </div>

      </div>








			<div id="hotel-content">
				<p class="title">Online Reservation</p>
				<p><img src="images/source/booking.jpg" style="height:50px;vertical-align:middle;" alt="title" align="left"></img></br></br></p>
				<p><br/>Booking: <a href="http://www.booking.com" target="_blank">www.booking.com</a></br>
                Hotels in 83,000 destinations worldwide</br></p>

				<p><img src="images/source/ctrip.jpg" style="height:120px;vertical-align:middle;" alt="title" align="left"></img></br></br></br></br></p>
				<p>Ctrip: <a href="http://english.ctrip.com/hotels" target="_blank">english.ctrip.com/hotels</a></br>
                China’s leading online booking website</p>
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
