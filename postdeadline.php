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
<div id="wrapper" style="height:1620px;">

	<!-- 左边导航 -->
	<div id="sidebar" style="height:1620px;" >	
	    <div class="tit-image"> 
	    <img src="images/source/t4.jpg" style="height:120px;vertical-align:middle;" alt="title" align="left">
		</div>
		<div id="menu" class="menu-v" >
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
			  <img src="images/source/p30.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
			</div>


			<div id="reg-content" style="width:680px;text-align:justify;">
				<p style="font-size:18px;"><b>Room 102
				<br/>10:30 -- 12:00
				<br/>JF2A &bull; Postdeadline Session</b></p>
				
				<p><b><span style="font-size:18px;">JF2A.1 &bull; 10:30</span>
				<br/>An exploration on distributed wind speed measurement of transmission line based on optical fiber sensing,</b> Haitao Wang<sup>1</sup>, Tao Li<sup>1.</sup>; 
				<i><sup>1</sup>Wuhan Nari Limited Liability Company of State Grid Electric Power Research Institute, China.</i> A method of distributed wind speed 
				measurement is proposed. The speed is calculated according to the Kaman vortex theory, by detecting the time-varying optical 
				signal on the transmission line. Field test demonstrates its validity. </p>
				
				<p><b><span style="font-size:18px;">JF2A.2 &bull; 10:45 </span>
				<br/>Research on Current Sensor Based on POTDR,</b> Xiao Zeng<sup>2</sup>, Hongjun Yang<sup>3</sup>, Zhaofeng Wu<sup>3</sup>, Muping Song<sup>1</sup>, Yan Lu<sup>1</sup>, Cong Yin<sup>1</sup>, 
				Qiaolan Xia<sup>1.</sup>; <i><sup>1</sup>Zhejiang University, China; <sup>2</sup>Wuhan KangPuChangQing Software Technology Co., Ltd, Wuhan, China; <sup>3</sup>Xiangyang State Grid Composite
				Insulator Co., Ltd, China.</i> A system of distributed current sensing based on Polarization Optical Time Domain Reflectometer (POTDR) is proposed
				to achieve the quantitative detection of current. Experimental results show that the system has high sensitivity.</p>
				
				<p><b><span style="font-size:18px;">JF2A.3 • 11:00 </span>
				<br/>Reconfigurable optical microbubble-on-tip sensor for microfluidic applications,</b> Chenlin Zhang<sup>1</sup>, Yuan Gong<sup>1</sup>, Wenliang Zou<sup>1</sup>, Yunjiang Rao<sup>1</sup>, 
				Gang-Ding Peng<sup>2.</sup>; <i><sup>1</sup>Univ of Electronic Science & Tech China, China; <sup>2</sup>University of New South Wales, Australia.</i> A novel reconfigurable optical
				microbubble-on-tip (MoT) structure is developed for microfluidic sensing applications. The generation and sensing mechanism of MoT is very 
				different from traditional optical fiber sensors and the sensing performance is excellent. </p>
				
				<p><b><span style="font-size:18px;">JF2A.4 • 11:15 </span>
				<br/>Theoretical Investigation on Whispering Gallery Modes of Microsphere with Anisotropic Deformation,</b> Xiaoxia Wang<sup>1,2</sup>, Honghui Zhang<sup>1,2</sup>,
				Jia Wang<sup>1,2.</sup>; <i><sup>1</sup>Key Lab. of Optoelectronic Technology and Systems of the Education Ministry of China, China; <sup>2</sup>College of Optoelectronic Engineering, 
				Chongqing University, China.</i> A sensing mechanism is proposed based-on microsphere with anisotropic deformation in whispering gallery modes. 
				Ellipsoid index ε is introduced to describe the deformation, which happens on the microsphere under a unidirectional force.  </p>
				
				<p><b><span style="font-size:18px;">JF2A.5 • 11:30 </span>
				<br/>Asymmetric Spin Splitter Based on Total Reflection at Glass-air Interface,</b> Wenguo Zhu<sup>1</sup>, JianHui Yu<sup>1</sup>, Zhe Chen<sup>1.</sup>; <i><sup>1</sup>Jinan Univeristy, China.</i> 
				We investigate the in-plane spin splitting of 1D Gaussian beam under total reflection. By tuning incident polarization, controllable asymmetric spin
				splitting can be achieved, and one spin component can undergo a displacement up to ±&omega;<sub>0</sub>/2. </p>
				
				<p><b><span style="font-size:18px;">JF2A.6 • 11:45 </span>
				<br/>Phase Noise Reduction of a Compact Brillouin/Erbium Fiber Laser,</b>  Chenyu Wang<sup>1,2</sup>, Mo Chen<sup>2</sup>, Zhou Meng<sup>2.</sup>; <i><sup>1</sup>College of Optoelectronic Science 
				and Engineering, National University of Defense Technology, China; <sup>2</sup>Academy of Ocean Science and Engineering, National University of Defense Technology,
				China.</i> A compact Brillouin/erbium fiber laser (BEFL) is investigated on its phase noise reduction characteristics. 
				The phase noise of the Brillouin pump can be reduced by 40 dB/Hz<sup>1/2</sup> through this BEFL.</p>
				
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