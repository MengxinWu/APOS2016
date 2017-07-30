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
	
	<div id="sidebar" style="height:1100px;" >
	    <div class="tit-image"> 
	    <img src="images/source/t2.jpg" style="height:120px;vertical-align:middle;" alt="title" align="left">
		</div>
		<!-- Begin 左边导航 -->
		<div id="menu" class="menu-v">
		  <ul>
				<li><a href="organization.php#conference-chairs" >Conference Chairs</a></li>
				<li><a href="inter-committee.php#inter-chairs" >International Steering Committee</a></li>
				<li><a href="tech-committee#technical-chairs" >Technical Program Committee</a></li>
				<li><a href="tech-committee#sub-chairs" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;Sub-Committees</a></li>
				<li><a href="local-committee#local-chairs" >Local Organizing Committee</a></li>
		  </ul>
		</div>
		<!-- End ! -->
    <?php
      echo file_get_contents("./html/caidan.html");
    ?>
	</div>
	<!-- End Sidebar -->
	
	<!-- Begin Content -->
	<div id="content">
    
		<div id="conference-chairs" >
		<div class="title" style="height:60px;">
		  <img src="images/source/p2.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
		</div>
        <div id="general-chairs" >
		   <p class="title">General Chair:</p>
		   <table>
		       <tbody>
			   <tr>
				   <td><img src="images/people/Zuyuan He.jpg" style="width:130px;vertical-align:middle;" alt="title" align="left">
				   <div class="chairs-content"><p><span style="font-weight:bold;">Prof. Zuyuan He</span><br>Shanghai Jiao Tong Univ., China</p></div>
				   </td>
			   </tr>
			   </tbody>
		   </table>
		   <p class="title">General Co-Chairs:</p>
		   <table>
		       <tbody>
			   <tr>
				   <td><img src="images/people/Wei Jin.jpg" style="width:130px;vertical-align:middle;" alt="Wei Jin" align="left">
				   <div class="chairs-content"><p><span style="font-weight:bold;">Prof. Wei Jin</span><br>The Hong Kong Polytechnic Univ., Hong Kong, China</p></div>
				   </td>
				   <td><img src="images/people/Yunjiang Rao.jpg" style="width:130px;vertical-align:middle;" alt="Yunjiang Rao" align="left">
				   <div class="chairs-content"><p><span style="font-weight:bold;">Prof. Yunjiang Rao</span><br>Univ. of Electronic Science and Technology of China, China</p></div>
				   </td>
			   </tr>
			   <tr>
				   <td><img src="images/people/Weijun Tong.jpg" style="width:130px;vertical-align:middle;" alt="title" align="left">
				   <div class="chairs-content"><p><span style="font-weight:bold;">Dr. Weijun Tong</span><br>Yangtze Optical Fibre and Cable Joint Stock Limited Company (YOFC), China</p></div>
				   </td>
			   </tr>
			   </tbody>
		   </table>
		</div>
		</div>

    
	</div>
	<!-- End Content -->
	
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
    <script src="js/jquery-3.2.1.js"></script>
	<script src="js/main.js"></script>
</body>
<div class="clear"></div>
<script type="text/javascript" src="style/js/scripts.js"></script>
<!--[if !IE]> -->
<script type="text/javascript" src="style/js/jquery.corner.js"></script>
<!-- <![endif]-->
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
<!-- InstanceEnd --></html>
<!-- site made by ZQ, arfanty2000@126.com !-->