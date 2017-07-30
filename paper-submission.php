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
<div id="wrapper" style="height:1080px;">

	<!-- 左边导航 -->
	<div id="sidebar" style="height:1080px;" >	
	    <div class="tit-image"> 
	    <img src="images/source/t3.jpg" style="height:120px;vertical-align:middle;" alt="title" align="left">
		</div>
		<div id="menu" class="menu-v">
		  <ul>
		    <li><a href="submission.php#submission" >Submission</a></li>
			<li><a href="paper-submission.php#author-timeline" >Author Timeline</a></li>
			<li><a href="author-inst.php#author-inst" >Author Instruction</a></li>
			<li><a href="awards-notifi.php#Awards" >Awards,Grants and Prizes</a></li>
			<li><a href="awards-notifi.php#Notification" >Notification</a></li>
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
    
		<div id="author-timeline">
		
		<div class="title" style="height:60px;">
		  <img src="images/source/p6.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
		</div>
		
		<div id="sub-content">
            <p></p>
		</div>	
		
		<div id="table-paper">
		<table border="1" bordercolor="black">
			<tbody>
			<tr>
			    <td class="qian"> 9th Jun., 2016</td>
				<td class="hou">Submission deadline</td>
		    </tr>
			<tr style="background-color: rgb(204, 204, 204);">
			    <td class="qian">Middle Jul., 2016</td>
				<td>Author notification</td>
		    </tr>
		    <tr>
			    <td class="qian"> 9th Sept., 2016</td>
				<td>Early bird registration deadline</td>
		    </tr>
			<tr style="background-color: rgb(204, 204, 204);">
			    <td class="qian"> 21st Sept., 2016</td>
				<td>Postdeadline paper submission deadline</td>
		    </tr>
			<tr>
			    <td class="qian"> 11th Oct., 2016</td>
				<td>Meeting</td>
		    </tr>
			<tr style="background-color: rgb(204, 204, 204);">
			    <td class="qian"> 31st Oct., 2016</td>
				<td>Paper achieved in OSA’s publishing platform</td>
		    </tr>
			</tbody>
		</table>
		</div>
			
	    <div id="sub-content">
            <p>Questions regarding the paper submission and review process can be directed to 
			the Technical Papers staff at <a href="http://submission@apos2016.org">submission@apos2016.org.</p>
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