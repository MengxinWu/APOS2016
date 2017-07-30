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


<div id="wrapper" style="height:2700px;">
	<!-- Begin Sidebar -->
	
	<div id="sidebar" style="height:2700px;">
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
 
        <!--
        <div id="temp"> 
        <p class="top-title">This column is under construction.<br>Stay tuned for more information!</p>
        </div>
        -->  
	  
		<div id="Plenary">
		
			<div class="title" style="height:60px;">
			  <img src="images/source/p21.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
			</div>
		
		
        <div id="speaker" >
		   <ul>
		       <li>
			        <img src="images/people/Hartmut.jpg" style="width:160px;vertical-align:middle;" alt="title" align="left">	  
			        <div class="name"><p id="name"><span style="font-weight:bold;">Prof. Hartmut Bartelt</span>
			        </br>(Leibniz Institute of Photonic Technology, Germany)</p>
					</div>
			        <div class="topic"><p id="name">"Technology and Applications of Fiber Bragg Grating Sensors in Germany"</p></div>
			        <div class="biograph"><p id="name" style="padding-left:0px;"><span style="font-weight:bold;font-size:18px;">Biography:</span>
				    Prof. Dr. Hartmut Bartelt graduated in Physics from University of Erlangen-Nuremberg (Germany) in 1976 and received his PhD for
				    research on wavelength multiplexed optical signal processing in 1980. From 1981 to 1982 he worked as a research assistant at the
				    University of Minnesota in Minneapolis (USA) in the field of volume holographic optical elements. In 1982 he returned to the
				    University of Erlangen-Nuremberg to continue his research activities and in 1985 he joined the corporate research laboratories
				    of Siemens AG in Erlangen (Germany).<br>
				    In 1994 he was appointed professor for Modern Optics at the University of Jena (Germany) and became head of the Optics Division
				    of the Institute for Physical High Technology (IPHT), now Department of Fiber Optics in the Leibniz Institute of Photonic
				    Technology (IPHT). From 1999 until 2006 he served as director and since 2006 as deputy director of the institute. His research
				    activities cover the fields of optical speciality fibres, micro and nano-structured fiber optics, fiber light sources, fiber Bragg
				    gratings and fiber optical sensors.</br>
					</br>
				    <span style="font-weight:bold;font-size:18px;">Abstract:</span>Fiber Bragg gratings have been proven to be extremely versatile
					elements for manifold sensing applications. They provide localized and fiber integrated sensing functionalities in combination with 
					easy multiplexing capabilities. Applications for many different physical parameters and stability also under extreme conditions have
					been shown. Such attractive properties have resulted successfully in specific commercialization activities in Germany which provide
					a good example how to develop industries in the field of optical sensing. 
				    </p>
					</div>
			   </li>
			   
		       <li>
			        <img src="images/people/Lu.jpg" style="width:160px;vertical-align:middle;" alt="title" align="left">	  
			        <div class="name"><p id="name"><span style="font-weight:bold;">Prof. Yanqing Lu</span>
			        </br>(Nanjing University, China)</p>
					</div>
			        <div class="topic"><p id="name">"Liquid crystal for non-display photonic applications"</p></div>
			        <div class="biograph"><p id="name" style="padding-left:0px;"><span style="font-weight:bold;font-size:18px;">Biography:</span>
				    Yanqing Lu received both his BS and Ph.D. degrees from Nanjing University, China, in 1991 and 1996 respectively. He has five-year
					experiences in US and China telecomm industries. He designed and developed a serial of liquid crystal based fiber-optic devices with
					his colleagues, which include variable optical attenuators, variable Mux/Demux, DWDM wavelength blocker etc. He is currently
					a Changjiang distinguished professor at Nanjing University and a Fellow of OSA. His research interests include liquid crystal
					photonics, fiber optics and nonlinear optics. He is the author or co-author of ~150 peer-reviewed papers in
					Science, Adv. Mater., Optica, Phys. Rev., Appl. Phys. Lett., Opt. Lett. etc. with over 2000 citations. He also holds more than
					40 domestic or international patents or pending patents.<br>
					</br>
				    <span style="font-weight:bold;font-size:18px;">Abstract:</span>Inducing micro-patterns and structures inside a Liquid crystal 
					(LC) cell is an effective way to improve the performance of LC display. However, in addition to display applications, LC also
					plays an important role in various tunable photonic devices with the advantages of low cost, no moving parts, low power
					consumption and high reliability. In this talk, I am going to review some of our work in merging LC and various artificial
					microstructures in different spans. The related photonic applications are discussed.
				    </p>
					</div>
			   </li>
			   
			   <li>
			        <img src="images/people/Minoshima.jpg" style="width:160px;vertical-align:middle;" alt="title" align="left">	  
			        <div class="name"><p id="name"><span style="font-weight:bold;">Prof. Kaoru Minoshima</span>
			        </br>(University of Electro-Communications, Japan)</p>
					</div>
			        <div class="topic"><p id="name">"Ultra-precision control of optical waves by use of fiber-based
					frequency combs and its application"</p>
					</div>
			        <div class="biograph"><p id="name" style="padding-left:0px;"><span style="font-weight:bold;font-size:18px;">Biography:</span>
				    Prof. Kaoru Minoshima is a Professor at the University of Electro-Communications (UEC), Tokyo, Japan, since 2013. She is also
					the Research Director of MINOSHIMA Intelligent Optical Synthesizer Project (IOS), Exploratory Research for Advanced
					Technology (ERATO), Japan Science and Technology Agency (JST). She received her Ph.D. degrees from the University of
					Tokyo in 1993, and joined the National Research Laboratory of Metrology (NRLM), which was reorganized to the National Institute
					of Advanced Industrial Science and Technology (AIST), where she has served as Group Leader and Bureau Manager until 2013.
					She also served as a Visiting Professor at the University of Bordeaux I, France (1996), a Visiting Scientist at the Massachusetts
					Institute of Technology, USA (2000-2001), and a guest professor at the Tokyo University of Science (2007-2013).<br>
					Her areas of research are ultrafast optical science and technology and their application to optical metrology, particularly
					time-resolved imaging, generation and application of frequency combs.</br>
					She received the Prize for Science and Technology given by the Minister of Education, Culture, Sports, Science and
					Technology (MEXT), Japan, in 2008, and the first Women Scientists Award from the Japan Society of Applied Physics (JSAP) in 2010, and so on.
					She served as several international committees including the General Co-Chair of the Conference on Lasers and Electro-Optics (CLEO) 2011.
					She is a member of the Science Council of Japan and a Fellow of the Optical Society (OSA) and JSAP.<br>
					<br>
				    <span style="font-weight:bold;font-size:18px;">Abstract:</span>Optical frequency combs have opened up several new application fields not
					only in frequency metrology as “ultraprecise frequency ruler” but also in broad area by use of its capability for fully controlling the phase,
					time, and frequency information of light waves, i.e., “optical synthesizer”, with an extreme precision and wide dynamic range. In this talk,
					development of fiber-based frequency combs, which are the key for practical application is presented. Moreover, some of the applications of
					frequency combs, including precision spectroscopy for gas sensing and material characterization, distance measurement, and imaging are presented.
				    </p>
					</div>
			   </li>
			   
			   
		   </ul>
		</div>
		</div> 
   
	   <!--
	    <div id="Invited">
			<div class="title" style="height:90px;">
			  <img src="images/source/title.ico" style="height:40px;vertical-align:middle;" alt="title" align="left"></img>
			  <div style="height:60px;"><h1 style="font-size:32px; color:blue;">&nbsp;Invited Talks</h1></div>
			  <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width = 710px color=blue SIZE=3>
			</div>
			
			<div id="temp"><p id="name">The determined invited talks are listed here. More to be announced.</p></div>
		    <div id="temp"><p id="name" style="color:red;">以下版式仅供参考，网站正式开放将被注释，等待内容更新！</p></div>
            
			<div id="invitedd">
			 <ul>
			    <li>
                 <div class="name"><p id="name">Hartmut Bartelt (IPHT Jena, Germany)</p></div>
				 <div class="topic"><p id="name">Optical Bragg Grating Sensor Fibers for Ultra-high Temperature Applications</p></div>
				</li>
				<li>
                 <div class="name"><p id="name">Hartmut Bartelt (IPHT Jena, Germany)</p></div>
				 <div class="topic"><p id="name">Optical Bragg Grating Sensor Fibers for Ultra-high Temperature Applications</p></div>
				</li>
			 </ul>
			</div>
	    </div>
        -->
       <!--
	    <div id="Conference">
			<div class="title" style="height:90px;">
			  <img src="images/source/title.ico" style="height:40px;vertical-align:middle;" alt="title" align="left"></img>
			  <div style="height:60px;"><h1 style="font-size:32px; color:blue;">&nbsp;Conference Program</h1></div>
			  <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width = 710px color=blue SIZE=3>
			</div>
			
			<div id="temp"><p id="name">Information is being updated, and is about to open.</p></div>
		    <div id="temp"><p id="name" style="color:red;">以下版式仅供参考，网站正式开放将被注释，等待内容更新！</p></div>

	    </div>
        -->
    
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
  
</body>
<div class="clear"></div>
<script type="text/javascript" src="style/js/scripts.js"></script>
<!--[if !IE]> -->
<script type="text/javascript" src="style/js/jquery.corner.js"></script>
<!-- <![endif]-->
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
<!-- InstanceEnd --></html>
<!-- site made by ZQ, arfanty2000@126.com !-->