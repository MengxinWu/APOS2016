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
<div id="wrapper" style="height:980px;">

	<!-- 左边导航 -->
	<div id="sidebar" style="height:980px;" >	
	    <div class="tit-image"> 
	    <img src="images/source/t1.jpg" style="height:120px;vertical-align:middle;" alt="title" align="left">
		</div>
		<div id="menu" class="menu-v">
		  <ul>
			<li><a href="index.php#welcome-message" >Welcome Messages</a></li>
			<li><a href="news-dates.php#news-information" >News Information</a></li>
			<li><a href="news-dates.php#important-dates" >Important Dates</a></li>
		  </ul>
		</div>
		
    <!-- 图片导航输出 -->
    <?php
      echo file_get_contents("./html/caidan.html");
    ?>
	</div>
	
	
	
	
	<!-- Begin Content -->
	<div id="content">
    
		<div id="news-information">
		
		<div class="title" style="height:60px;">
		  <img src="images/source/p4.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
		</div>
		
       <div id="wel-content" >
	      <p>&bull; The 2nd Call-For-Papers is ready with Plenary Speeches and Invited Talks. The deadline of submitting 
		  Post-Deadline Papers to APOS2016 is <span style="color:red;font-weight:bold;">21st September, 2016</span>. Authors from Asia Pacific countries and the rest of the world are 
		  all welcome.</p>
		  
		  <p>&bull; The notification of acceptance or rejection have be announced  <span style="color:red;font-weight:bold;">in the middle of July, 2016</span>. 
		  If you haven't received the email of notifiction, please contact us via submission@apos2016.org.</p>
		  
		  <p>&bull; <a href="files/APOS2016_Program.pdf" target="_blank">The complete Conference Program is available for download.</a></p>
		  
		  <p>&bull; <a href="instructions.php#instruction" >The Instructions for Presentations is updated.</a></p>
		  
		  <p>&bull; <a href="postdeadline.php#instruction" >The Program of Post-Deadline Paper Session is ready.</a></p>
		  
		  <p>&bull; <a href="open.html" >The photo gallery of APOS2016 is updated.</a></p>
	   </div>
		
		</div>
		
	    <div id="important-dates">
		
		<div class="title" style="height:60px;">
		  <img src="images/source/p5.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
		</div>
		
       <div id="wel-content">
			<p>&bull; Paper Submission Deadline for Post-Deadline Papers: <span style="color:red;font-weight:bold;">21st September, 2016</span>.</p>
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