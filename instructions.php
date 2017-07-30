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
<div id="wrapper" style="height:1100px;">

	<!-- 左边导航 -->
	<div id="sidebar" style="height:1100px;" >	
	    <div class="tit-image"> 
	    <img src="images/source/t4.jpg" style="height:120px;vertical-align:middle;" alt="title" align="left">
		</div>
		<div id="menu" class="menu-v">
		  <ul>
			<li><a href="conference.php#Plenary" >Plenary Speeches</a></li>
			<li><a href="invited.php#Plenary" >Invited Talks</a></li>
			<li><a href="program.php#program" >Conference Program</a></li>
			<li><a href="instructions.php#instruction" >Instructions for Presentations</a></li>
			<li><a href="postdeadline.php#instruction" >Post-Deadline Paper Session</a></li>
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
			  <img src="images/source/p28.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
			</div>

		    <p class="title">To Oral Presentation Speakers:</p>
		    <div id="reg-content" style="width:715px;text-align:justify;">
				<p>&bull; All oral presentation speakers should <b>upload their files to the computer before the start of their sessions.</b>
				Please check in at least <b>ten minutes prior to their scheduled session.</b> </p>
				<p>&bull; Regular oral presentation has 12 minutes for talk and 3 minutes for discussion.
					<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; The helpers will <b>ring the bell once</b> where there are <b>2 minutes left for talk;</b>
					<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; The helpers will <b>ring the bell twice</b> when the <b>talk time has run out;</b>
					<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; The helpers will <b>ring the bell three times</b> when the <b>presentation time has run out.</b> 
					<br/>&nbsp;Please pay attention to the time during your presentation.
				</p>
				<p>&bull; Invited presentation has 25 minutes (40 minutes for plenary presentation) 
				for talk and 5 minutes for discussion. 
					<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; The helpers will <b>ring the bell once</b> where there are <b>5 minutes left for talk;</b> 
					<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; The helpers will <b>ring the bell twice</b> when the <b>talk time has run out;</b>
					<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; The helpers will <b>ring the bell three times</b> when the <b>presentation time has run out.</b> 
					<br/>&nbsp;Please be attention to control time during your presentation.
				</p>	
				<p>&bull; No shows of the oral presentation will be reported to conference management and these <b>papers will not be published.</b></p>
			 </div>

			 
			<p class="title">To Poster Presentation Authors:</p>
			<div id="reg-content" style="width:715px;text-align:justify;">
				<p>&bull; Authors with a poster presentation should get their posters ready before the corresponding poster sessions start. 
				Authors are required to be standing by their posters for the duration of their allocated sessions to answer questions and 
				further discuss their work with attendees. No shows will be reported to conference management and these <b>papers will not be published.</b>
				<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; <b>Set-up Time - 08:00 on the day of corresponding Poster Session</b>
				<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; <b>Tear-down Time - 17:30 after the corresponding Poster Session</b>
				<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; <b>Poster Board Size - 2.3m (Height) X 1.0m (Width)</b>
				</p>
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