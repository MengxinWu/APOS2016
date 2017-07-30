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
<div id="wrapper" style="height:2550px;">

	<!-- 左边导航 -->
	<div id="sidebar" style="height:2550px;" >	
	    <div class="tit-image"> 
	    <img src="images/source/t7.jpg" style="height:120px;vertical-align:middle;" alt="title" align="left">
		</div>
		<div id="menu" class="menu-v">
		  <ul>
                <li><a href="sponsorship.php#sponsorship">Sponsors &amp; Exhibitors</a> </li>
                <li><a href="exhibition.php#exhibition">Exhibition Opportunities</a> </li>
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
		<div id="sponsorship">
			<div class="title" style="height:60px;">
			<img src="images/source/p18.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
			</div>
			
			<p class="title">Technical Sponsors</p>
		
			<div id="spo-content">	
			   <ul>
				    <li><a href="http://photonicssociety.org/" target="_blank">
						<img src="images/sponsors/PhotonicsSociety.png" alt="title" align="left" style="width:250px;"></a>	
				    </li>
				    <li><a href="http://www.osa.org/en-us/home/" target="_blank">
						<img src="images/sponsors/OSA.png" alt="title" align="left" style="width:250px;"></a>		
				    </li>
				    <li><a href="http://spie.org/?WT.svl=tn7" target="_blank">
						<img src="images/sponsors/spie.png" alt="title" align="left" style="width:300px;"></a>
				    </li>
				    <li><a href="http://www.cncos.org/" target="_blank">
						<img src="images/sponsors/cos.jpg" alt="title" align="left" style="width:220px;"></a>
				    </li>
					<li><a href="http://www.csoe.org.cn/" target="_blank">
						<img src="images/sponsors/csoe.png" alt="title" align="left" style="width:230px;margin-bottom:50px;"></a>
				    </li>
			   </ul>
			</div>
			
			<p class="title">Exhibitors</p>
			
			<div id="spo-content">	
			   <ul>
				    <li><a href="http://www.yofc.com/" target="_blank">
						<img src="images/sponsors/yofc.png" alt="title" align="left" style="width:250px;margin-bottom:30px;"></a>
				    </li>
					<li><a href="http://www.lusterinc.com/" target="_blank">
						<img src="images/sponsors/luster.png" alt="title" align="left" style="width:250px;margin-bottom:30px;"></a>
				    </li>
					<li><a href="http://www.chinafasten.com/index1.html" target="_blank">
						<img src="images/sponsors/fasten.png" alt="title" align="left" style="width:255px;margin-bottom:30px;"></a>
				    </li>
				    <li><a href="http://www.uni-silver.com" target="_blank">
						<img src="images/sponsors/unisi.png" alt="title" align="left" style="width:250px;"></a>
				    </li>
					<li><a href="http://www.ei41.com/" target="_blank">
						<img src="images/sponsors/ceic.png" alt="title" align="left" style="width:270px;"></a>
				    </li>
					<li><a href="http://www.asptech.com.cn/" target="_blank">
						<img src="images/sponsors/als.jpg" alt="title" align="left" style="width:260px;"></a>
				    </li>
					<li><a href="http://www.arcopt.com/" target="_blank">
						<img src="images/sponsors/ao.png" alt="title" align="left" style="width:270px;"></a>
				    </li>
					<li><a href="http://www.santec.com/cn/" target="_blank">
						<img src="images/sponsors/santec.png" alt="title" align="left" style="width:250px;"></a>
				    </li>
					<li><a href="http://www.femtofibertec.de/en/" target="_blank">
						<img src="images/sponsors/femto.png" alt="title" align="left" style="width:255px;"></a>
				    </li>
					<li><a href="http://www.zenfiber.cn/" target="_blank">
						<img src="images/sponsors/zenfiber.png" alt="title" align="left" style="width:255px;margin-bottom:30px;"></a>
				    </li>
					<li><a href="http://www.gtlsvc.com/" target="_blank">
						<img src="images/sponsors/gtl.png" alt="title" align="left" style="width:260px;"></a>
				    </li>
					<li><a href="http://www.fsphotonics.com/" target="_blank">
						<img src="images/sponsors/fs.png" alt="title" align="left" style="width:280px;"></a>
				    </li>
					<li><a href="http://www.fiberpro.com/" target="_blank">
						<img src="images/sponsors/fiberpro.png" alt="title" align="left" style="width:260px;margin-bottom:30px;"></a>
				    </li>
					<li><a href="http://www.beogold.com/" target="_blank">
						<img src="images/sponsors/beogold.png" alt="title" align="left" style="width:200px;"></a>
				    </li>
			   </ul>
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