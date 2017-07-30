<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index-origin.dwt.php" codeOutsideHTMLIsLocked="false" -->

<!-- html文件头部输出  -->
<?php
   echo file_get_contents("./html/head.html");
?>

<body>


<div class="container">

  <?php
    echo file_get_contents("./html/nav.html");
  ?>
<!-- Begin Wrapper -->


<div id="wrapper" style="height:1100px;">
	<!-- Begin Sidebar -->
	
	<div id="sidebar" style="height:1100px;">
	    <div class="tit-image"> 
	    <img src="images/source/t4.jpg" style="height:120px;vertical-align:middle;" alt="title" align="left">
		</div>
		<!-- Begin 左边导航 -->
		<div id="menu" class="menu-v">
		  <ul>
			<li><a href="conference.php#Plenary" >Plenary Speeches</a></li>
			<li><a href="invited.php#Plenary" >Invited Talks</a></li>
			<li><a href="program.php#program" >Conference Program</a></li>
			<li><a href="instructions.php#instruction" >Instructions for Presentations</a></li>
			<li><a href="postdeadline.php#instruction" >Post-Deadline Paper Session</a></li>
		  </ul>
		</div>
		<!-- End ! -->
    <?php
      echo file_get_contents("./html/caidan.html");
    ?>
	</div>
	<!-- End Sidebar -->
	
	<!-- Begin Content -->
    <div id="content" >
 
        
        <div id="program" >
			<div class="title" style="height:60px;">
			  <img src="images/source/p26.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
			</div>
			
			<div style="float:left;width:720px;padding-left:10px;padding-top:30px;padding-bottom:20px;"><a href="files/APOS2016_Program.pdf" target="_blank">Download the complete program.</a>
			</div>
			
			<div style="float:left;padding-left:10px;padding-top:30px;padding-bottom:20px;"><a href="files/PaG.pdf" target="_blank">Download the program at a glance.</a>
			</div>
			
			<div style="float:left;">
				<img src="images/program/PaG.png" name="program" width="710"  id="program" />
			</div>
		</div>
	<!-- End Content -->
	</div>
</div>
<!-- End Wrapper -->

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
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script>
</div>
<!-- InstanceEnd --></html>
<!-- site made by ZQ, arfanty2000@126.com !-->