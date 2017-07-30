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


<div id="wrapper" style="height:6700px;">
	<!-- Begin Sidebar -->

	<div id="sidebar" style="height:6700px;" >
	    <div class="tit-image">
	    <img src="images/source/t2.jpg" style="height:120px;vertical-align:middle;" alt="title" align="left">
		</div>
		<!-- Begin 左边导航 -->
		<div id="menu" class="menu-v">
		  <ul>
				<li><a href="organization.php#conference-chairs" >Conference Chairs</a></li>
				<li><a href="inter-committee.php#inter-chairs" >International Steering Committee</a></li>
				<li><a href="tech-committee.php#technical-chairs" >Technical Program Committee</a></li>
				<li><a href="tech-committee.php#sub-chairs" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;Sub-Committees</a></li>
				<li><a href="local-committee.php#local-chairs" >Local Organizing Committee</a></li>
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

		<div id="technical-chairs" >
		<div class="title" style="height:60px;">
		  <img src="images/source/p10.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
		</div>
		<p class="title">Chairs:</p>
        <div id="chairs-content" >
            <p><span style="font-weight:bold;">Prof. Xinyu Fan</span>, Shanghai Jiao Tong Univ., China</p>
		    <p><span style="font-weight:bold;">Prof. Kentaro Nakamura</span>, Tokyo Institute of Technology, Japan</p>
	        <p><span style="font-weight:bold;">Prof. John Canning</span>, The Univ. of Sydney, Australia</p>
		</div>
		</div>

		<div id="sub-chairs" >
			<div class="title" style="height:60px;">
			  <img src="images/source/p12.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
			</div>

			    <div id="quick-guide">
				<p class="top-title">Quick Guide</p>
			    <ul>
				<li><a href="sub-committee.php#track1" ><p class="title">Track 1: Physical Sensing</p></a></li>
				<li><a href="sub-committee.php#track2" ><p class="title">Track 2: Chemical and Gas Sensing</p></a></li>
				<li><a href="sub-committee.php#track3" ><p class="title">Track 3: Biological / Biomedical Sensing and Imaging</p></a></li>
				<li><a href="sub-committee.php#track4" ><p class="title">Track 4: Integrated Technologies for Sensing</p></a></li>
				<li><a href="sub-committee.php#track5" ><p class="title">Track 5: Specialty Optical Fibers for Sensing</p></a></li>
				<li><a href="sub-committee.php#track6" ><p class="title">Track 6: Grating and Component Technologies for Sensing</p></a></li>
				<li><a href="sub-committee.php#track7" ><p class="title">Track 7: Novel Materials for Sensing</p></a></li>
				<li><a href="sub-committee.php#track8" ><p class="title">Track 8: Distributed, Multiplexed and Networked Sensing</p></a></li>
				<li><a href="sub-committee.php#track9" ><p class="title">Track 9: Industrial Structural Monitoring</p></a></li>
			    </ul>
				</div>



				<div id="track1">
				<p class="top-title">Track 1: Physical Sensing</p>
				<p class="title">Chair:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Satoshi Tanaka</span>,
					National Defense Academy of Japan, Japan</p>
				</div>
				<p class="title">Co-Chairs:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Dongning Wang</span>,
					China Jiliang University, China</p>
					<p><span style="font-weight:bold;">Prof. Luca Palmieri</span>,
					University of Padova, Italy</p>
				</div>
				<p class="title">Members:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Chunliu Zhao</span>,
					China Jiliang University, China</p>
					<p><span style="font-weight:bold;">Prof. Yuanhong Yang</span>,
					Beihang University, China</p>
					<p><span style="font-weight:bold;">Prof. Fei Xu</span>,
					Nanjing University, China</p>
					<p><span style="font-weight:bold;">Prof. Andrea Cusano</span>,
					University of Sannio, Italy</p>
					<p><span style="font-weight:bold;">Dr. Sylvie Delepine-Lesoille</span>,
					Agence Nationale pour la Gestion des Dechets Radioactifs, France</p>
					<p><span style="font-weight:bold;">Prof. José Manuel Baptista</span>,
					University of Madeira, Portugal</p>
					<p><span style="font-weight:bold;">Prof. Yukihiro Ishii</span>,
					Tokyo University of Science, Japan</p>
					<p><span style="font-weight:bold;">Prof. Ribun Onodera</span>,
					Polytechnic University, Japan</p>
					<p><span style="font-weight:bold;">Dr. Atsushi Wada</span>,
					National Defense Academy, Japan</p>
				</div>
				</div>



				<div id="track2">
				<p class="top-title">Track 2: Chemical and Gas Sensing</p>
				<p class="title">Chair:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Yiping Wang</span>,
					Shenzhen University, China</p>
				</div>
				<p class="title">Co-Chairs:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Dr. Changrui Liao</span>,
					Shenzhen University, China</p>
					<p><span style="font-weight:bold;">Prof. Lin Zhang</span>,
					Aston University, UK</p>
					<p><span style="font-weight:bold;">Prof. Perry Shum</span>,
					Nanyang Technological University, Singapore</p>
				</div>
				<p class="title">Members:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Dr. Ying Wang</span>,
					Shenzhen University, China</p>
					<p><span style="font-weight:bold;">Prof. Yange Liu</span>,
					Nankai University, China</p>
					<p><span style="font-weight:bold;">Dr. Lei Su</span>,
					Queen Mary University of London, UK</p>
					<p><span style="font-weight:bold;">Dr. Chao Wang</span>,
					University of Kent, UK</p>
					<p><span style="font-weight:bold;">Dr. Yinlan Ruan</span>,
					The University of Adelaide, Australia</p>
					<p><span style="font-weight:bold;">Prof. Long Jin</span>,
					Jinan University, China</p>
					<p><span style="font-weight:bold;">Prof. Qizhen Sun</span>,
					Huazhong University of Science and Technology, China</p>
					<p><span style="font-weight:bold;">Prof. Ming Ding</span>,
					Beihang University, China</p>
					<p><span style="font-weight:bold;">Dr. Chao Wang</span>,
					Wuhan University, China</p>
					<p><span style="font-weight:bold;">Dr. Jun Ma</span>,
					Washington Univ. in St. Louis, USA</p>
					<p><span style="font-weight:bold;">Dr. Fan Yang</span>,
					The Hong Kong Polytechnic University, HK, China</p>
				</div>
				</div>

				<div id="track3">
				<p class="top-title">Track 3: Biological / Biomedical Sensing and Imaging</p>
				<p class="title">Chair:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Baiou Guan</span>,
					Jinan University, China</p>
				</div>
				<p class="title">Co-Chairs:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Yuji Matsuura</span>,
					Tohoku University, Japan</p>
					<p><span style="font-weight:bold;">Prof. Chang-Seok Kim</span>,
					Pusan National University, Korea</p>
				</div>
				<p class="title">Members:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Eunseo Choi</span>,
					Chosun University, Korea</p>
					<p><span style="font-weight:bold;">Prof. Aaron H. P. Ho</span>,
					The Chinese University of Hong Kong, China</p>
					<p><span style="font-weight:bold;">Dr. Katsunori Ishii</span>,
					Osaka University, Japan</p>
					<p><span style="font-weight:bold;">Prof. Byoungjo Jung</span>,
					Yonsei University, Korea</p>
					<p><span style="font-weight:bold;">Prof. Takashi Katagiri</span>,
					Tohoku University, Japan</p>
					<p><span style="font-weight:bold;">Prof. Zhongping Chen</span>,
					University of California, USA.</p>
					<p><span style="font-weight:bold;">Prof. Izumi Nishidate</span>,
					 Tokyo University of Agriculture and Technology, Japan</p>
					<p><span style="font-weight:bold;">Prof. Junle Qu</span>,
					Shenzhen University, China</p>
					<p><span style="font-weight:bold;">Dr. Lidai Wang</span>, 
					City University of Hong Kong, China</p>
					<p><span style="font-weight:bold;">Prof. Yunfeng Xiao</span>,
					Peking University, China</p>
					<p><span style="font-weight:bold;">Prof. Lei Xu</span>,
					Fudan University, China</p>

				</div>
				</div>

				<div id="track4">
				<p class="top-title">Track 4: Integrated Technologies for Sensing</p>
				<p class="title">Chair:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Kevin Chen</span>,
					Pittsburgh University, USA</p>
				</div>
				<p class="title">Co-Chairs:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Graham Town</span>,
					Macquarie University, Australia</p>
					<p><span style="font-weight:bold;">Prof. Myeong Soo Kang</span>,
					KAIST, Korea</p>

				</div>
				<p class="title">Members:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Jung-Hoon Shi</span>,
					 KAIST, Korea</p>
					<p><span style="font-weight:bold;">Prof. Gun-Yong Sung</span>,
					 Hallym University, Korea</p>
					<p><span style="font-weight:bold;">Prof. Christos Markos</span>,
					Danish Technical University,  Demark</p>
					<p><span style="font-weight:bold;">Prof. Gangadhara Prusty</span>,
					 University of New South Wales, Australia</p>
					<p><span style="font-weight:bold;">Dr. Ming-Jun Li</span>,
					 Corning Inc, USA</p>
					<p><span style="font-weight:bold;">Prof. Hai Xiao</span>,
					Clemson University, USA</p>
					<p><span style="font-weight:bold;">Prof. Li Qian</span>,
					University of Toronto, Canada</p>
					<p><span style="font-weight:bold;">Prof. Xinglin Tong</span>,
					Wuhan University of Technology, China</p>
				</div>
				</div>


				<div id="track5">
				<p class="top-title">Track 5: Specialty Optical Fibers for Sensing</p>
				<p class="title">Chair:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Yasufumi Enami</span>,
					Hiroshima University, Japan</p>
				</div>
				<p class="title">Co-Chairs:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Dr. Liyang Shao</span>,
					Southwest Jiao Tong University, China</p>
					<p><span style="font-weight:bold;">Prof. Shibin Jiang</span>,
					Advalue Company, USA</p>
				</div>
				<p class="title">Members:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Libo  Yuan</span>,
					Harbin Engineering University, China</p>
					<p><span style="font-weight:bold;">Prof. Jaehee Park</span>,
					Keimyung University, Korea</p>
					<p><span style="font-weight:bold;">Prof. Lin Ma</span>,
					Shanghai Jiao Tong University, China</p>
					<p><span style="font-weight:bold;">Prof. Kin Seng Chiang</span>,
					City University of Hong Kong,  HongKong, China</p>
					<p><span style="font-weight:bold;">Prof. Sheng-Lung Huang</span>,
					National Taiwan University, Taiwan, China</p>
					<p><span style="font-weight:bold;">Prof. Zhe  Chen</span>,
					Jinan University, China</p>
					<p><span style="font-weight:bold;">Dr. Zhenggang Lian</span>,
					Yangtze Optical Electronic Company Ltd., China</p>
					<p><span style="font-weight:bold;">Prof. Guiyao Zhou</span>,
					South China Normal University</p>
				</div>
				</div>

				<div id="track6">
				<p class="top-title">Track 6: Grating and Component Technologies for Sensing</p>
				<p class="title">Chair:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Young-Geun Han</span>,
					Hanyang University, Korea</p>
				</div>
				<p class="title">Co-Chairs:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Xinyong Dong</span>,
					China Jiliang University, China</p>
					<p><span style="font-weight:bold;">Dr. Koji Omichi</span>,
					Fujikura Ltd., Japan</p>
				</div>
				<p class="title">Members:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Min Young Jeon</span>,
					 Chungnam national Univ. , Korea</p>
					<p><span style="font-weight:bold;">Prof. Myoung Jin Kim</span>,
					Korea photonics Technology institute, Korea</p>
					<p><span style="font-weight:bold;">Prof. Ciero Martelli</span>,
					 Federal Univ. of Technology,  Brazil</p>
					<p><span style="font-weight:bold;">Prof. Sergio G. Leon-Saval</span>,
					 The University of Sydney, Australia</p>
					<p><span style="font-weight:bold;">Prof. Yoji Okabe</span>,
					 The University of Tokyo, Japan</p>
					<p><span style="font-weight:bold;">Prof. Yunqi Liu</span>,
					 Shanghai University, China</p>
					<p><span style="font-weight:bold;">Prof. Bo Liu</span>,
					Nankai University, China</p>
					<p><span style="font-weight:bold;">Prof. Li Pei</span>,
					Beijing Jiaotong University, China</p>
					<p><span style="font-weight:bold;">Prof. Tuan Guo</span>,
					Jinan University, China</p>
				</div>
				</div>

				<div id="track7">
				<p class="top-title">Track 7: Novel Materials for Sensing</p>
				<p class="title">Chair:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Gang-Ding Peng</span>,
					University of NSW, Australia</p>
				</div>
				<p class="title">Co-Chair:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Tatsutoshi Shioda</span>,
					Saitama University, Japan</p>
				</div>
				<p class="title">Members:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Dr. Shouji Adachi</span>,
					Yokogawa Electric Corporation, Japan</p>
					<p><span style="font-weight:bold;">Prof. Neil Broderick</span>,
					University of Auckland, New Zealand</p>
					<p><span style="font-weight:bold;">Prof. Jun Chang</span>,
					Shandong University, China</p>
					<p><span style="font-weight:bold;">Prof. Samuel Choi</span>,
					Niigata University, Japan</p>
					<p><span style="font-weight:bold;">Prof. Yuan Gong</span>,
					University of Electronic Science and Technology of China, China</p>
					<p><span style="font-weight:bold;">Dr. Masanori Nishiura</span>,
					Sevensix Inc. Technical Department, Japan</p>
					<p><span style="font-weight:bold;">Prof. Ginu Rajan</span>,
					University of Wollongong, Australia</p>
					<p><span style="font-weight:bold;">Prof. Kyung Rak Sohn</span>,
					Korea Maritime University, Korea</p>
					<p><span style="font-weight:bold;">Dr. Banh Quoc Tuan</span>,
					Saitama University, Japan</p>
					<p><span style="font-weight:bold;">Prof. Jianzhong Zhang</span>,
					Harbin Engineering University, China</p>
				</div>
				</div>

				<div id="track8">
				<p class="top-title">Track 8: Distributed, Multiplexed and Networked Sensing</p>
				<p class="title">Chair:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Tao Zhu</span>,
					Chongqing University, China</p>
				</div>
				<p class="title">Co-Chairs:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Dr. Fabrizio Di Pasquale</span>,
					Scuola Superiore Sant'Anna, Pisa, Italy</p>
					<p><span style="font-weight:bold;">Prof. Kwang Yong Song</span>,
					Chung-Ang University, Korea</p>
					<p><span style="font-weight:bold;">Prof. Zinan Wang</span>,
					University of Electronics and Science Technology of China, China</p>
				</div>
				<p class="title">Members:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Yosuke Mizuno</span>,
					Tokyo Institute of Technology,  Japan</p>
					<p><span style="font-weight:bold;">Dr. Il-Bum Kwon</span>,
					Korea Research Institute of Standards and Science, Korea</p>
					<p><span style="font-weight:bold;">Dr. Kwanil Lee</span>,
					Korea Institute of Science and Technology, Korea</p>
					<p><span style="font-weight:bold;">Prof. Yongkang Dong</span>,
					Harbin Institute of Technology, China</p>
					<p><span style="font-weight:bold;">Prof. Aldo Minardo</span>,
					Seconda Università degli Studi di Napoli, Italy </p>
					<p><span style="font-weight:bold;">Dr. Marcelo Soto</span>,
					EPFL Swiss Federal Institute of Technology, Switzerland</p>
					<p><span style="font-weight:bold;">Dr. Prasant Kumar Sahu</span>,
					IIT Bhubaneswar, India</p>
					<p><span style="font-weight:bold;">Prof. Deming Liu</span>,
					Huazhong University of Science Technology, China</p>
					<p><span style="font-weight:bold;">Prof. Manuel Lopez-Amo Sainz</span>,
					Universidad Publica de Navarra, Spain</p>
					<p><span style="font-weight:bold;">Prof. Miguel Gonzalez Herraez</span>,
					 University of Alcalá, Spain</p>
				</div>
				</div>

				<div id="track9">
				<p class="top-title">Track 9: Industrial Structural Monitoring</p>
				<p class="title">Chair:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Minghong Yang</span>,
					Wuhan University of Technology, China</p>
				</div>
				<p class="title">Co-Chairs:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Xuping Zhang</span>,
					Nanjing University, China</p>
					<p><span style="font-weight:bold;">Prof. Reinhardt Willsch</span>,
					Institute of Applied Photonics (IAP), Germany</p>
				</div>
				<p class="title">Members:</p>
				<div id="chairs-content" >
					<p><span style="font-weight:bold;">Prof. Tiegen Liu</span>,
					Tianjing University, China</p>
					<p><span style="font-weight:bold;">Dr. Yeon Wan Ko</span>,
					Fiberpro Inc., Korea</p>
					<p><span style="font-weight:bold;">Prof. Tongyu Liu</span>,
					Shandong Academy of Science, China</p>
					<p><span style="font-weight:bold;">Dr. Jie Zeng</span>,
					Nanjing University of Aeronautics and Astronautics, China</p>
					<p><span style="font-weight:bold;">Prof. Ignacio R. Matias</span>,
					Public University of Navarra, Spain</p>
					<p><span style="font-weight:bold;">Dr. Marco Petrovich</span>,
					University of Southampton, UK</p>
					<p><span style="font-weight:bold;">Dr. Fei Luo</span>,
					University of Boston, USA</p>
					<p><span style="font-weight:bold;">Prof. Zhishen Wu</span>,
					Southeast University, China</p>
				</div>
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

</body>
<div class="clear"></div>
<script type="text/javascript" src="style/js/scripts.js"></script>
<!--[if !IE]> -->
<script type="text/javascript" src="style/js/jquery.corner.js"></script>
<!-- <![endif]-->
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
<!-- InstanceEnd --></html>
<!-- site made by ZQ, arfanty2000@126.com !-->
