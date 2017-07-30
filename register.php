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
<div id="wrapper" style="height:2120px;">

	<!-- 左边导航 -->
	<div id="sidebar" style="height:2120px;" >	
	    <div class="tit-image"> 
	    <img src="images/source/t6.jpg" style="height:120px;vertical-align:middle;" alt="title" align="left">
		</div>
		<div id="menu" class="menu-v">
		  <ul>
		    <li><a href="registration.php" >Registration</a></li>
			<li><a href="payment.php" >Payment</a></li>
			<li><a href="venue.php" >Venue</a></li>
			<li><a href="hotel-info.php" >Hotel Information</a></li>
			<li><a href="http://www.meet-in-shanghai.net/"  target="_blank" >About Shanghai</a></li>
			<li><a href="invitation-letter.php#invitation-letter" >Letter of Invitation</a></li>
		  </ul>
		</div>
		
    <!-- 图片导航输出 -->
    <?php
		echo file_get_contents("./html/caidan.html");
	    /*SQL输入安全检查函数*/
	  	function check_input($value)
		{
			// 去除斜杠
			if (get_magic_quotes_gpc())
			{
				$value = stripslashes($value);
			}
			// 如果不是数字则加引号
			if (!is_numeric($value))
			{
				$value = "'" . mysql_real_escape_string($value) . "'";
			}
			return $value;
		}
    ?>
	<?php

	echo "
	<script>
		$(document).ready(function(e) {";
	if (isset($_POST['issubmitted']))
	{
		echo "
			$('div#foreignRegister').hide();
		";
	}
	else 
	{
		echo"			
			//$('div#domesticRegister').hide();
			//$('div#foreignRegister').hide();";
	}
		echo "
			/*$('button').eq(1).click(function(e){
				if($('div#foreignRegister').is(':visible')==true)
					{
						$('div#foreignRegister').fadeOut(500,function(){
							$('div#domesticRegister').fadeIn(500);
							});
					}
				else
					$('div#domesticRegister').fadeIn(500);
			});
			
			$('button').eq(0).click(function(e){
				if($('div#domesticRegister').is(':visible')==true)
					{
						$('div#domesticRegister').fadeOut(500,function(){
							$('div#foreignRegister').fadeIn(500);
							});
					}
				else
					$('div#foreignRegister').fadeIn(500);
			});*/
			$('div.check').hide();
			$('div.submit').hide();			
	
		});
	</script>
	";
?>
	<!-- end! -->
	
	</div>
	<!-- End！ -->
	
	<!-- 内容开始 -->
	<div id="content">
		<div id="payment">
		    <!-- 标题图片  -->
			<div class="title" style="height:60px;">
			  <img src="images/source/p24.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
			</div>
			
			<!-- 注册信息填写 -->
			
			<div class="content"> <?php echo "
				<div class='wholeRegister'>  
					<div class='register' >

					<div id='domesticRegister'> 
						<p class='emphasize'>The Chinese Register(国内注册者)</p>
						<form action='register.php' method='post'>
						
						
							<div class='section1'>
							<p class='subtitle'> Section 1. 基本信息 </p>
 
							<p style='font-size:18px;'>国内注册者请用中文填写个人信息。</p>
							<div class='forminput'>
								<label class='information'>姓:*</label>
								<input name='FamilyName' type='text'";
								if (isset($_POST['issubmitted'])) 
								{
								  echo " value='$_POST[FamilyName]' ";
								}
								echo " /><span class='errorMessage'>  Family Name is required.</span>
							</div>
	
							<div class='forminput'>
								<label class='information'>名:*</label>
								<input name='FirstName' type='text'";
								if (isset($_POST['issubmitted'])) 
								{
									echo " value='$_POST[FirstName]' ";
								}
								echo "/><span class='errorMessage'>  First Name is required.</span>
							</div>
	
							<div class='forminput'>
								<label class='information'>称谓:*</label>
								<input name='Title' type='text'";
								if (isset($_POST['issubmitted'])) 
								{
								  echo " value='$_POST[Title]' ";
								}
								echo " /><span class='errorMessage'>  Title is required.</span>
							</div>
							
							<div class='forminput'>
								<label class='information'>就职机构:*</label>
								<input name='Affiliation' type='text'";
								if (isset($_POST['issubmitted'])) 
								{
								  echo " value='$_POST[Affiliation]' ";
								}
								echo "' /><span class='errorMessage'>  Affiliation is required.</span>
							</div>
							
							<div class='forminput' style='width:680px;height:80px;'>
								<label class='information'>邮寄地址:*</label>
								<textarea rows='2' cols='45' name='Address' type='text'";
								if (isset($_POST['issubmitted'])) 
								{
								  echo " value='$_POST[Address]' ";
								}
								echo " ></textarea><span class='errorMessage'>   Mailing Address is required.</span>
							</div>
							
							<div class='forminput'>
								<label class='information'>城市:*</label>
								<input name='City' type='text'";
								if (isset($_POST['issubmitted'])) 
								{
								  echo " value='$_POST[City]' ";
								}
								echo " /><span class='errorMessage'>  City is required.</span>
							</div>
							
							<div class='forminput'>
								<label class='information'>省:*</label>
								<input name='Province' type='text'";
								if (isset($_POST['issubmitted'])) 
								{
								  echo " value='$_POST[Province]' ";
								}
								echo " /><span class='errorMessage'>  State/Province is required.</span>
							</div>
							
							<div class='forminput'>
								<label class='information'>邮政编码:*</label>
								<input name='ZIP' type='text' onKeyPress='LimitToNumber(event)' style='ime-mode:disabled;' onKeyUp='this.value=this.value.replace(/\D/g,\'\')' ";
								if (isset($_POST['issubmitted'])) 
								{
								  echo " value='$_POST[ZIP]' ";
								}
								echo " /><span class='errorMessage'>  ZIP/Postal Code is required.</span>
							</div>
							
							<div class='forminput' id='email'>
								<label class='information'>邮箱:*</label>
								<input name='Email' type='text'";
								if (isset($_POST['issubmitted'])) 
								{
								  echo " value='$_POST[Email]' ";
								}
								echo " /><span class='errorMessage'>  Email is required.</span>
							</div>
							
							<div class='forminput'>
								<label class='information'>电话:*</label>
								<input name='Telephone' type='text'";
								if (isset($_POST['issubmitted'])) 
								{
								  echo " value='$_POST[Telephone]' ";
								}
								echo " /><span class='errorMessage'>  Telephone is required.</span>
							</div>
							
							<div class='forminput'>
								<label class='information'>分机:</label>
								<input name='Ext' type='text'";
								if (isset($_POST['issubmitted'])) 
								{
								  echo " value='$_POST[Ext]' ";
								}
								echo " /><span class='errorMessage'>  Ext is required.</span>
							</div>
							
							<div class='forminput'>
								<label class='information'>传真:</label>
								<input name='Fax' type='text'";
								if (isset($_POST['issubmitted'])) 
								{
								  echo " value='$_POST[Fax]' ";
								}
								echo " /><span class='errorMessage'>  Fax is required.</span>
							</div>
							
							<div class='forminput' style='float:left;width:640px;height:60px;'>
							<p style='font-size:18px;'>
							说明：有文章录用的请填写录用文章编号（<span style='color:red;'>Control Number：7位数字</span>），
							该编号用来生成汇款时需要填写的附言注明，没有请忽略。</p>
							</div>
							
							<div class='forminput' style='width:680px;'>
								<label style='width:300px;' class='information'>录用文章编号（Control Number）:</label>
								<input name='PaperCode' type='text'  onKeyPress='LimitToNumber(event)'";
								if (isset($_POST['issubmitted'])) 
								{
								  echo " value='$_POST[PaperCode]' ";
								}
								echo " /><span class='errorMessage'>  Paper code is required.</span>
							</div>
							
							<div class='forminput' style='width:680px;height:80px;'>
								<label class='information'>录用文章标题:</label>
								<textarea rows='2' cols='45'  name='PaperTitle' type='text'";
								if (isset($_POST['issubmitted'])) 
								{
								  echo " value='$_POST[PaperTitle]' ";
								}
								echo " ></textarea><span class='errorMessage'>  Paper title is required.</span>
							</div>
							
							<div class='forminput' id='needinvoice'>
								<label class='information' onKeyPress='LimitToNumber(event)'>是否需要发票:</label>
								<input name='NeedInvoice' type='radio' id='NeedInvoice-yes' checked='checked' value='1'/><label for='NeedInvoice-yes'>需要</label>
								<input name='NeedInvoice' type='radio' id='NeedInvoice-no' value='0'/><label for='NeedInvoice-no'>不需要</label>
								<span class='errorMessage'>  Paper code is required.</span>
							</div>
							<div class='forminput' id='invoicetitle'>
								<label class='information'>发票抬头*:</label>
								<input name='InvoiceTitle' type='text'";
								if (isset($_POST['issubmitted'])) 
								{
								  echo " value='$_POST[InvoiceTitle]' ";
								}
								echo " /><span class='errorMessage'>  Paper code is required.</span>
							</div>	
							</div>
							
							
							
							<!--注册类别:1(3000),2(3300),3(3600),4(3900),5(2300),6(2600)-->
							<div class='section2'>
							<p class='subtitle' style='clear:left;'> Section 2.  注册类别 </p> 
							
							<div class='forminput' style='float:left;width:640px;height:40px;'>
							<p style='font-size:18px;'>
							说明：网上注册截止时间为2016年9月20日，逾期需要现场注册。</p>
							</div>
							<table border='0' class='registerfee'>
							<tr>
								<th width='250' height='40' scope='col'></th>
								<th width='320' scope='col'><span style='color:#ADADAD;'>9月9日之前(已过期)</span></th>
								<th width='320' scope='col'>9月9日之后注册</th>
							</tr>
							
							<tr>
								<td height='40'>会员注册</td>
								<td><input type='radio' name='RegisterFee' id='RegisterFee-0'  disabled='disabled' /><label for='RegisterFee-0'><span style='color:#ADADAD;'> 3000元</span></label></td>
								<td><input type='radio' name='RegisterFee' id='RegisterFee-1' checked='true'/><label for='RegisterFee-1'> 3300元</label></td>
							</tr>
							
							<tr>
								<td height='40'>非会员注册</td>
								<td><input type='radio' name='RegisterFee' id='RegisterFee-2' disabled='disabled'/><label for='RegisterFee-2'><span style='color:#ADADAD;'> 3600元</span></label></td>
								<td><input type='radio' name='RegisterFee' id='RegisterFee-3' /><label for='RegisterFee-3'> 3900元</label></td>
							</tr>
							 
							<tr>
								<td height='40'>学生注册</td>
								<td><input type='radio' name='RegisterFee' id='RegisterFee-4' disabled='disabled'/><label for='RegisterFee-4'><span style='color:#ADADAD;'> 2300元</span></label></td>
								<td><input type='radio' name='RegisterFee' id='RegisterFee-5' /><label for='RegisterFee-5'> 2600元</label></td>
							</tr>
							</table>
							
							<p style='font-size:16px;color:#6e6e6e;'><b>针对会员注册，请提供会员信息：（非会员和学生注册请忽略该项）</b></p>
							<label class='information'>会员类型:</label>
							<div style='float:left;font-size:16px;color:#6e6e6e;'>
							
							<ul>
								<li style='line-height:30px;'><input type='radio' name='MemberType' id='MemberType-1' />
								<label for='MemberType-1'><b>IEEE Photonics Society</b></label></li>
								
								<li style='line-height:30px;'><input type='radio' name='MemberType' id='MemberType-2' />
								<label for='MemberType-2'><b>The Optical Society of America(OSA)</b></label></li>
								
								<li style='line-height:30px;'><input type='radio' name='MemberType' id='MemberType-3' />
								<label for='MemberType-3'><b>The International Society for Optical Engineering(SPIE)</b></label></li>
								
								<li style='line-height:30px;'><input type='radio' name='MemberType' id='MemberType-4' />
								<label for='MemberType-4'><b>The China Optical Society (COS)</b></label></li>
							</ul>
							</div>
							<div class='forminput'>
								<label class='information'>会员编号:</label>
								<input name='MemberID' type='text'";
								if (isset($_POST['issubmitted'])) 
								{
								  echo " value='$_POST[MemberID]' ";
								}
								echo " /><span class='errorMessage'>  MemberID is required.</span>
							</div>
							
							
							<div class='payment'>
								注册费用: <span style='color:red;'><b>3300</b>元</span>
							</div>
							</div>
							<input name='registertype' id='registertype' value='1' type='text' style='display:none' />
							<input name='membertype' id='membertype' value='0' type='text' style='display:none' />
							
							
							
							
							
							<!--附加费用-->
							<div class='section3'>
							<p class='subtitle'> Section 3.  附加项</p>	

							<div class='forminput' style='float:left;width:640px;height:80px;'>
							<p style='font-size:18px;'>
							说明：注册费用默认包含有一张宴会券、一张招待券和一份会议手册加U盘资料，额外的宴会券和招待券是
							给您同行的家属和朋友（不参会）使用的。</p>
							</div>
							
							<div class='additional'>	
								<label class='banquet'>额外的宴会券:</label>
								<input type='text' size=2 value=0 name='banquet' maxlength='2' onKeyPress='LimitToNumber(event)' id='banquet' /> <label for='banquet'>× 600元 </label>
							</div>
							
							
							<div class='additional' style='height:80px;display: none;'>		
								<label class='lunch'>午餐券(用于11月12到14日场馆提供的自助餐):</br></label>
								<input type='radio' name='lunch' id='lunch-0' value=0 checked='true' /><label for='lunch-0'>不需要</label>
								<input type='radio' name='lunch' id='lunch-1' value=1 /><label for='lunch-1'>1天，90元</label>
								<input type='radio' name='lunch' id='lunch-2' value=2 /><label for='lunch-2'>2天，180元</label>
								<input type='radio' name='lunch' id='lunch-3' value=3 /><label for='lunch-3'>3天，270元</label>				
							</div>
						
							
							<div class='additional'>
								<label class='reception'>额外的接待券:</label> 
								<input type='text' size=2 value=0 name='reception' maxlength='2' onKeyPress='LimitToNumber(event)' id='reception' />  <label for='reception'>× 300元 </label>
							</div>	
							
							<div class='additional'>
								<label class='publication'>额外的会议手册和U盘资料数:</label>
								<input type='text' size=2 value=0 name='publicationnumber' id='publicationnumber' maxlength='2' onKeyPress='LimitToNumber(event)' /> <label for='publicationnumber'>× 300元</label>
							</div>
							
							<div class='payment'>
								附加项费用: <span style='color:red;'><b>0</b>元</span>
							</div>
							</div>
						
						
							<div class='payment'>
								总费用: <span style='color:red;'><b>3300</b>元</span>
							</div>
						
							<div class='checkbutton'>
								<button class='button orange' onclick='return FormValidate(this.form)'>提交注册</button>
							</div>
					</div> 
				</div> 
			</div>
			
			
			
			
			  <div class='check'>
				<p><b>您所填写的信息如下：</b></p>
				<ul>
					<li><p>姓名：<a></a></p></li>
					<li><p>称谓：<a></a></p></li>
					<li><p>就职单位：<a></a></p></li>
					<li><p>地址：<a></a></p></li>
					<li><p>城市：<a></a></p></li>
					<li><p>省份：<a></a></p></li>
					<li><p>邮政编码：<a></a></p></li>
					<li><p>E-mail：<a></a></p></li>
					<li><p>电话：<a></a></p></li>
					<li><p>分机：<a></a></p></li>
					<li><p>传真：<a></a></p></li>
					<li><p>录用文章编号：<a></a></p></li>
					<li><p>录用文章标题：<a></a></p></li>
					<li style='display:none;'><p>留空：<a></a></p></li>
					<li><p>是否需要发票：<a></a></p></li>
					<li><p>发票抬头：<a></a></p></li>
					<li><p>额外的宴会券：<a></a></p></li>
					<li style='display:none;'><p>留白：：<a></a></p></li>	
					<li><p>额外的接待券：<a></a></p></li>
					<li><p>额外的会议手册和U盘资料数：<a></a></p></li>
					<li><p>总金额：<a></a></p></li>
					
					
				</ul>								
				</p>
			  </div>
				<input name='issubmitted' value='' type='text' style='display:none' />
				<input name='totalpayment' id='totalpayment' value='0' type='text' style='display:none' />
			  <div class='submit'>
			    <button class='button orange' onclick='return TurnBack()'>返回修改</button>
				<input class='button orange' id= 'submit' type='submit' value='确认提交'/>
			  </div>

  <script>
    var section2payment = 3000;
	var section3payment = 0;
    var section4payment = 0;
	var totalpayment = 3000;
	var needInvoice = true;
	
	var registertype = 1;
	document.getElementById('registertype').value = registertype;
	
	var membertype =  0;
	document.getElementById('membertype').value = membertype;
	
function FormValidate(form)
  	{
		var index;
		var rev=true;
		$('.forminput').each(function(index,element)
		{
		  if($('label.information',this).text().indexOf('*')>0)
		  {
			  if($('input',this).val() == '')
			  {
				  $('label',this).css('color','red');
				  $('label',this).css('font-weight','bold');
				  rev = false;
			  }
			  else
			  {
				  $('label',this).css('color','#000000');
				  $('label',this).css('font-weight','normal');
			  }
		  }
		});
		if( rev == true)
		{
			email_field = $('.forminput#email>:input').val();
			apos=email_field.indexOf('@');
			dotpos=email_field.lastIndexOf('.');
			if (apos<1||dotpos-apos<2) 
			{
				  $('.forminput#email>label').css('color','#FF0000');
				  $('.forminput#email>label').css('font-weight','bold');
				  rev = false;
			}
		}
		if (rev == false)
		{
			$('html, body').animate({scrollTop:0},300);
		}
		if (rev==true) 
		{
			$('div.wholeRegister').hide();
			$('div.check').show();
			$('div.submit').show();			
			var inputValue;
			$('div.check a').each(function(index,element) {
				if (index == 0)
				{
					inputValue = $('div.forminput > :input').eq(0).val() + ' ' + $('div.forminput > :input').eq(1).val();
					$(this).text(inputValue);
				}
				else if (index < $('div.forminput > :input').length-4)
				{
			    	inputValue = $('div.forminput > :input').eq(index+1).val();
					$(this).text(inputValue);
				}
				else if (index == $('div.forminput > :input').length-4)
				{
					if(needInvoice)
				    	inputValue = '需要';
					else
				    	inputValue = '不需要';						
					$(this).text(inputValue);
				}
				else if (index == $('div.forminput > :input').length-3)
				{
					if(needInvoice)
				    	inputValue = $('div.forminput > :input').eq(index+1).val();
					else
				    	inputValue = '';						
					$(this).text(inputValue);
				}				
				else if (index == $('div.forminput > :input').length-2)
				{
					inputValue = $('input#banquet').val();
					if (inputValue == '') 
					{
						inputValue = 0;
						$('input#banquet').val(0);
					}
					$(this).text(inputValue);					
				}
				else if (index == $('div.forminput > :input').length -1)
				{
					inputValue = $('input[name=\'lunch\']:checked').val();
					$(this).text(inputValue);
				}
				else if (index == $('div.forminput > :input').length)
				{
					inputValue = $('input#reception').val();
					if (inputValue == '') 
					{
						inputValue = 0;
						$('input#reception').val(0);
					}
					$(this).text(inputValue);
				}

				else if (index == $('div.forminput > :input').length + 1)
				{
					inputValue = $('input#publicationnumber').val();
					if (inputValue == '') 
					{
						inputValue = 0;
						$('input#publicationnumber').val(0);
					}					
					$(this).text(inputValue);
				}				
				else if (index == $('div.forminput > :input').length + 2)
				{
					inputValue = totalpayment;
					$(this).text(inputValue);
				}
			});
			$('input#totalpayment').val(totalpayment);
		}
		return false;
  	}
	
	function ToggleInvoiceTitle()
	{
		var needInvoiceSelectedId = $('input[name=NeedInvoice]:checked')[0].id;
		if(needInvoiceSelectedId == 'NeedInvoice-yes')
		{
			$('div#invoicetitle').show();
			$('div#invoicetitle > label.information').text('发票抬头*:');
			needInvoice = true;								
		}
		else if(needInvoiceSelectedId == 'NeedInvoice-no')
		{
			$('div#invoicetitle').hide();
			$('div#invoicetitle > label.information').text('发票抬头:');	
			needInvoice = false;					
		}		

	}
	function TurnBack()
	{
		$('div.wholeRegister').show();
		$('div.check').hide();
		$('div.submit').hide();	
		return false;
	}
    function LimitToNumber(event)
	{
		if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;
	}
	function LimitToNumberA(num, event)
	{
		if (event.keyCode < 48 || event.keyCode > num+48) event.returnValue = false;
	}
	
	function ChangeSection2Payment()
	{
		var registerfee = 0;
		var registerSelectedId = $('input[name=RegisterFee]:checked')[0].id;
		if(registerSelectedId == 'RegisterFee-0' ){
			registerfee = 3000;
			registertype = 1;
		}
		else if(registerSelectedId == 'RegisterFee-1' ){
			registerfee = 3300;
			registertype = 2;
		}
		else if(registerSelectedId == 'RegisterFee-2' ){
			registerfee = 3600;	
			registertype = 3;
		}		
		else if(registerSelectedId == 'RegisterFee-3' ){
			registerfee = 3900;
			registertype = 4;			
		}
		else if(registerSelectedId == 'RegisterFee-4' ){
			registerfee = 2300;
			registertype = 5;
		}
		else if(registerSelectedId == 'RegisterFee-5' ){
			registerfee = 2600;
			registertype = 6;
		}
			
		section2payment = registerfee;
		$('.payment b')[0].textContent = section2payment;
		totalpayment = section2payment + section3payment + section4payment;
		$('.payment b')[2].textContent = totalpayment;
		
		document.getElementById('registertype').value = registertype;								
	}
	
	function ChangeSection4Payment()
	{
		var membertype = 0;
		var memberSelectedId = $('input[name=MemberType]:checked')[0].id;
		if(memberSelectedId == 'MemberType-1' ){
			membertype = 1;
		}
		else if(memberSelectedId == 'MemberType-2' ){
			membertype = 2;
		}
		else if(memberSelectedId == 'MemberType-3' ){	
			membertype = 3;
		}		
		else if(memberSelectedId == 'MemberType-4' ){
			membertype = 4;			
		}
		
		document.getElementById('membertype').value = membertype;								
	}
	
	function ChangeSection3Payment()
	{
		var lunchPay = 0;
		var lunchSelectedId = $('input[name=lunch]:checked')[0].id;
		if(lunchSelectedId == 'lunch-0' )
			lunchPay = 0;
		else if(lunchSelectedId == 'lunch-1' )
			lunchPay = 90;	
		else if(lunchSelectedId == 'lunch-2' )
			lunchPay = 180;			
		else if(lunchSelectedId == 'lunch-3' )
			lunchPay = 270;	
			
		var reception = 0;
		var receptionString = $('input[name=reception]')[0].value;
		if(receptionString == '')
			reception = 0;
		else
			reception = parseInt(receptionString) * 300;
			
		var banquet = 0;
		var banquetString = $('input[name=banquet]')[0].value;
		if(banquetString == '')
			banquet = 0;
		else
			banquet = parseInt(banquetString) * 600;			
		
		var publication = 0;
		var publicationString = $('input[name=publicationnumber]')[0].value;
		if(publicationString == '')
			publication = 0;
		else
			publication = parseInt(publicationString) * 300;
		
		section3payment = lunchPay+reception+banquet+publication;
		$('.payment b')[1].textContent = section3payment;
		totalpayment = section2payment + section3payment;
		$('.payment b')[2].textContent = totalpayment;

	}
	$('input[name=NeedInvoice]').each(function(index,element){
		$(this).click(ToggleInvoiceTitle);
	});	
	$('input[name=RegisterFee]').each(function(index,element){
		$(this).click(ChangeSection2Payment);
	});
	
	$('div.additional input').each(function(index,element){
		$(this).change(ChangeSection3Payment);
		$(this).click(ChangeSection3Payment);
	});
	
	$('input[name=MemberType]').each(function(index,element){
		$(this).click(ChangeSection4Payment);
	});
  </script>
  
   </form>
  ";
  if (isset($_POST['issubmitted']))
  {

	  	echo "
	
			<script>
				$('div.wholeRegister').hide();
				$('div.check').hide();
				$('div.submit').hide();	
			</script>";
		$con = mysql_connect("localhost","root","Apos(Admin!2016)");
		mysql_query("set names 'utf8'");
		mysql_select_db("APOS2016",$con);

	
	    $FirstName = check_input($_POST['FirstName']);
		$FamilyName = check_input($_POST['FamilyName']);
		$Name = check_input($_POST['FamilyName']." ".$_POST['FirstName']);
		$Title = check_input($_POST['Title']);
		$Affiliation = check_input($_POST['Affiliation']);
		$Address = check_input($_POST['Address']);
		$City = check_input($_POST['City']);
		$Province = check_input($_POST['Province']);
		$ZIP = check_input($_POST['ZIP']);
		$Email = check_input($_POST['Email']);
		$Telephone = check_input($_POST['Telephone']);
		$Ext = check_input($_POST['Ext']);
		$Fax = check_input($_POST['Fax']);
		$PaperTitle = check_input($_POST['PaperTitle']);
		$NeedInvoice = check_input($_POST['NeedInvoice']);
		if($NeedInvoice == 0)
			$InvoiceTitle = check_input('');
		else
			$InvoiceTitle = check_input($_POST['InvoiceTitle']);
		$Publication = check_input($_POST['publicationnumber']);
		$Reception = check_input($_POST['reception']);
		$Banquet = check_input($_POST['banquet']);
		$Lunch = check_input($_POST['lunch']);
		$TotalPayment = check_input($_POST['totalpayment']);
		$RegisTime = check_input(date('Y-m-d H:i'));
		$RegisterType = check_input($_POST['registertype']);
		
		if($RegisterType == 1 || $RegisterType == 2){
			$MemberType = check_input($_POST['membertype']);
			$MemberID = check_input($_POST['MemberID']);
		}
		else{
			$MemberType = check_input('');
			$MemberID = check_input('');
		}
		
		
		/*******************************************************************************************/
		/*******一个人只能注册一次，判断姓名和单位，如果再次注册，则会直接删除之前的注册记录********/
		/*******************************************************************************************/
		$result = mysql_query("delete from APOS_Register where 
		  FirstName=$FirstName and 
		  FamilyName=$FamilyName and
		  Affiliation=$Affiliation",$con);  
		if(!$result)
		{
		  echo"<script>
		  alert('该注册信息已经存在，无法删除原来的注册信息！请联系网站管理员！');
		  </script>";
		  die('Could not connect: ' . mysql_error());
		}
		
		/*******************************************************************************************/
		/********************没有文章注册的编号从90000开始，依次加1进行编号*************************/
		/********************文章编号不能出现英文，只能是数字***************************************/
		/*******************************************************************************************/
		$PaperCode = 90000;
		if ($_POST['PaperCode']=='' || !is_numeric($_POST['PaperCode']))
		{
			do 
			{
				$PaperCode = $PaperCode + 1;
				$result = mysql_query("select * from APOS_Register where 
						  PaperCode=$PaperCode",$con);
				$PaperOrder_o = '';
			    
			}while (mysql_num_rows($result) != 0);
		}
		
		/*******************************************************************************************/
		/********************有文章注册的，按注册时的顺序，依次在文章编号的后面加字母***************/
		/*******************************************************************************************/
		else 
		{
			$PaperCode = check_input($_POST['PaperCode']);
			$PaperOrder_o = 'A';
			$result = mysql_query("select * from APOS_Register where 
					  PaperCode=$PaperCode",$con);
			$PaperOrder_o = chr(ord($PaperOrder_o)+mysql_num_rows($result));

		}
		$PaperOrder = check_input($PaperOrder_o);
		
		/*******************************************************************************************/
		/*******************************将数据直接写入数据库****************************************/
		/*******************************************************************************************/		
		$result = mysql_query("
		insert into APOS_Register
		(
		  FirstName,
		  FamilyName,
		  Name,
		  Title,
		  Affiliation,
		  Address,
		  City,
		  Province,
		  ZIP,
		  Email,
		  Telephone,
		  Ext,
		  Fax,
		  PaperTitle,
		  PaperCode,
		  PaperOrder,
		  NeedInvoice,
		  InvoiceTitle,
		  RegisterType,
		  MemberType,
		  MemberID,
		  Publication,
		  Reception,
		  Banquet,
		  TotalPayment,
		  RegisTime
		)
		values
		(
		  $FirstName,
		  $FamilyName,
		  $Name,
		  $Title,
		  $Affiliation,
		  $Address,
		  $City,
		  $Province,
		  $ZIP,
		  $Email,
		  $Telephone,
		  $Ext,
		  $Fax,
		  $PaperTitle,
		  $PaperCode,
		  $PaperOrder,
		  $NeedInvoice,
		  $InvoiceTitle,
		  $RegisterType,
		  $MemberType,
		  $MemberID,
		  $Publication,
		  $Reception,
		  $Banquet,
		  $TotalPayment,
		  $RegisTime		  
		)
		",$con);
		if(!$result)
		{
		  echo"<script>
		  alert('注册信息写入数据库失败！请联系网站管理员！');
		  </script>";
		  die('Could not connect: ' . mysql_error());		
		}
		else
		{
				/*******************************************************************************************/
		        /********************注册编号后缀，第一个字母代表注册类型，第二个字母表示额外付款***********/
		        /*******************************************************************************************/
				$FirstChar = $RegisterType;
				$SecondChar_o = min(26,$Reception * 9 + $Publication * 3 + $Banquet);
				if($SecondChar_o){
					$SecondChar = chr(ord("A") + $SecondChar_o - 1);
				}
				else{
					$SecondChar = 0;
				}
				$AffixContent = 'APOS-'.$PaperCode.$PaperOrder_o.'-'.$FirstChar.$SecondChar;


			    //发送邮件
				$FirstName = $_POST['FirstName'];
				$FamilyName = $_POST['FamilyName'];
				$Name = $FamilyName.$FirstName;
				$Title = $_POST['Title'];
				$Email = $_POST['Email'];
				require 'PHPMailer/class.phpmailer.php';

				try {
					$mail = new PHPMailer(true); //New instance, with exceptions enabled


					$mail->IsSMTP();                                 // tell the class to use SMTP
					$mail->SMTPAuth   = true;                        // enable SMTP authentication
					$mail->Port       = 25;                          // set the SMTP server port
					$mail->Host       = "smtp.exmail.qq.com"; 		 // SMTP server
					$mail->Username   = "registration@apos2016.org"; // SMTP server username
					$mail->Password   = "Reg0316";                   // SMTP server password
					$mail->CharSet    = "utf-8";

					//$mail->IsSendmail();  // tell the class to use Sendmail

					$mail->AddReplyTo("registration@apos2016.org","APOS2016组委会");

					$mail->From       = "registration@apos2016.org";
					$mail->FromName   = "APOS2016组委会";


					$mail->addAddress($Email,$Name.$Title);

					$mail->Subject = 'APOS注册确认邮件(编号：'.$PaperCode.$PaperOrder_o.')';

					$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
					$mail->WordWrap   = 80; // set word wrap

					$mail->msgHTML(
						
						'<p>'.$Name.' '.$Title.'：您好！</p>
						<p>非常感谢您对APOS2016的支持。您的注册信息已经提交到系统了，请在2016年9月23日之前将注册费'.$TotalPayment.'元汇款或转账至下述会议账户，以完成注册手续：</p>
						<p>（注：为了能够及时、准确地统计您的汇款明细，请务必在转账汇款时的 “用途”或“附言”栏，写上系统生成的附言。）</p>
						<p>账户名称：上海交通大学</p>
						<p>银行账号：439059226890</p>
						<p>开户银行：中国银行上海市交通大学支行</p>
						<p>附言注明：'.$AffixContent.'</p>
						
						<p><br/>请留意系统发送给您的附言注明，如果您填写了录用文章编号，那么附言注明中间的数字应该为文章编号，
						不是的话请确认您的信息填写是否正确。</p>
						<p><br/>如果注册时遇到任何问题，请联系registration@apos2016.org.</p>
						', dirname(__FILE__));

					$mail->IsHTML(true); // send as HTML

					$mail->Send();
							echo 
							"	<p class='emphasize'>信息提交成功！</p>
								<div class='reg-content'> 
								<p>非常感谢您对APOS2016的支持，您的注册编号是：$PaperCode$PaperOrder_o 。一封确认邮件将会发送到您的邮箱中以备您参考。
								请在2016年9月23日之前将注册费 $TotalPayment 元汇款或转账至下述会议账户，以完成注册手续：</p>
								<p>（注：为了能够及时、准确地统计您的汇款明细，请务必在转账汇款时的 “用途”或“附言”栏，写上系统生成的附言。）</p>
								<p><b><br/>具体汇款信息请查看系统发送的邮件内容。</b></p>
								<p><b><br/>如果注册时遇到任何问题，请联系registration@apos2016.org.</b></p>
							  </div>
							  ";
				} catch (phpmailerException $e) {
					echo $e->errorMessage();
				}			  
		}
		
  }
  ?>
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