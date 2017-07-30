<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index-origin.dwt.php" codeOutsideHTMLIsLocked="false" -->


<!-- html文件头部输出  -->
<?php
   echo file_get_contents("./html/head.html");
?>
<script language="javascript" type="text/javascript" src="My97DatePicker/WdatePicker.js"></script>
<body>


<div class="container">
  
  
  <!-- 导航输出  -->
  <?php
    echo file_get_contents("./html/nav.html");
	
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
  <!-- End! -->
  
  
<!-- 主体内容 -->
<div id="wrapper" style="height:2430px;">

	<!-- 左边导航 -->
	<div id="sidebar" style="height:2430px;" >	
	    <div class="tit-image"> 
	    <img src="images/source/t6.jpg" style="height:120px;vertical-align:middle;" alt="title" align="left">
		</div>
		<div id="menu" class="menu-v" style="font-size:16px;">
		  <ul>
					<li><a href="registration.php#registration" >Registration</a></li>
					<li><a href="payment.php#payment" >Payment</a></li>
					<li><a href="venue.php#venue" >Venue</a></li>
					<li><a href="hotel-info.php#hotel-info" >Hotel Information</a></li>
					<li><a href="http://www.meet-in-shanghai.net/"  target="_blank" >About Shanghai</a></li>
					<li><a href="invitation-letter.php#invitation-letter" >Letter of Invitation</a></li>
					<li><a href="lunch.php#instruction" >Lunch, Reception&nbsp;&amp;&nbsp;Banquet</a></li>
					<li><a href="labandcampu.php#news-information" >Lab and Campus Tour</a></li>
					<li><a href="html/Conf-Noti.pdf" target="_blank">Conference Notification</a></li>
		  </ul>
		</div>
		
    <!-- 图片导航输出 -->
    <?php
      echo file_get_contents("./html/caidan.html");
    ?>
	</div>
	
	
	
	
	<!-- Begin Content -->
	<div id="content">
    
		<div id="invitation-letter">
		
			<div class="title" style="height:60px;">
			  <img src="images/source/p25.jpg" style="height:48px;vertical-align:middle;" alt="title" align="left"></img>
			</div>
		
		<?php 
		  
		   echo "
		   <div class='content'>
		   <div id='FormForInvitation'>
				<p> Individuals requiring letters of invitation to obtain travel visas may fill out the following form.
				Please include your full name as it appears on your passport, complete mail address, phone and fax number 
				and indicate which meeting you will be attending. If you are presenting a paper, include the title and 
				session that the paper will be presented in, or if you are exhibiting please indicate that in your request.  
				When requesting letters for more than one individual, please fill out one form for each person.</p>
				
				<p><b><span style='color:red;font-size:20px;'>Instruction: Please fill up the form in English!</span></b></p>
				<p><strong>*Please avoid using any accent marks when filling out your application as it 
				will delay processing.</strong></p>
				<form id='Invitation' method='post' action='invitation-letter.php'  >
				
				  <p class='title'>First Name:*</p>
				  <input name='FirstName' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[FirstName]' ";
				  } 
				  echo "/><span class='errorMessage'>  First Name is required.</span><br />
				  
				  
				  <p class='title'>Family Name:*</p>
				  <input name='FamilyName' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[FamilyName]' ";
				  }
			      echo " /><span class='errorMessage'>  Family Name is required.</span><br />
			    
				
				  <p class='title'>Title:</p>
				  <input name='Title' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[Title]' ";
				  }
				  echo " /><span class='errorMessage'>  Title is required.</span>
				  
				  <p class='title'>Company/Institute:*</p>
				  <input name='Company' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[Company]' ";
				  }
				  echo "' /><span class='errorMessage'>  Company is required.</span><br />
				  
				  <p class='title'>Address:*</p>
				  <input name='Address' type='text' style='width:550px;'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[Address]' ";
				  }
				  echo " /><span class='errorMessage'>  <br />Address is required.</span><br />
				  
				  <p class='title'>Address (cont'd):</p>
				  <input name='AddressC' type='text' style='width:550px;'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[AddressC]' ";
				  }
				  echo " /><span class='errorMessage'>  Address (cont'd) is required.</span>
				  
				  <p class='title'>City:*</p>
				  <input name='City' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[City]' ";
				  }
				  echo " /><span class='errorMessage'>  City is required.</span><br />
				  
				  <p class='title'>State/Province:</p>
				  <input name='State' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[State]' ";
				  }
				  echo " /><span class='errorMessage'>  State/Province is required.</span>
				  
				  <p class='title'>ZIP/Postal Code:*</p>
				  <input name='ZIP' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[ZIP]' ";
				  }
				  echo " /><span class='errorMessage'>  ZIP/Postal Code is required.</span><br />
				  
				  <p class='title'>Country:*</p>
				  <input name='Country' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[Country]' ";
				  }
				  echo " /><span class='errorMessage'>  Country is required.</span><br />
				  
				  <p class='title'>Email:*</p>
				  <input name='Email' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[Email]' ";
				  }
				  echo " /><span class='errorMessage'>  Email is required.</span><br />
				  
				  <p class='title'>Telephone:*</p>
				  <input name='Telephone' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[Telephone]' ";
				  }
				  echo " /><span class='errorMessage'>  Telephone is required.</span><br />
				  
				  <p class='title'>Ext:</p>
				  <input name='Ext' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[Ext]' ";
				  }
				  echo " /><span class='errorMessage'>  Ext is required.</span>
				  
				  <p class='title'>Fax:</p>
				  <input name='Fax' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[Fax]' ";
				  }
				  echo " /><span class='errorMessage'>  Fax is required.</span>
				  
				  <p class='title'>What is your birthdate?*<br />(MUST be in the following format <span style='color:red;'>
				  <b>MM/DD/YYYY</b></span>):</p>
				  <input name='Birthdate' type='text'
				  <input class='Wdate' type='text' onClick='WdatePicker()' ";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[Birthdate]'";
				  }
				  echo " /><span class='errorMessage'>  Birthdate is required.</span><br />
				 
				  <p class='title'>What is your gender?*</p>
				  <select name='Gender'>";
				  if (isset($_POST['issubmitted']) && $_POST['Gender'] == 'Female') 
				  {
					  echo "<option>Male</option>
							<option selected='selected'>Female</option>";
				  }
				  else
				  {
					  echo "<option selected='selected'>Male</option>
							<option>Female</option>";
				  }
				  echo "
				  </select>
				  <span class='errorMessage'>  Gender is required.</span><br />
				  
				  <p class='title'>Did you submit a paper to the meeting?*</p>
				  <select name='IsSubmission'>";
				  if (isset($_POST['issubmitted']) && $_POST['IsSubmission'] == 'No') 
				  {

						  echo "<option>Yes</option>
								<option selected='selected'>No</option>";

				  }
				  else
				  {
					  echo "<option selected='selected'>Yes</option>
							<option>No</option>";
				  }
				  echo "
				  </select><span class='errorMessage'>  Required.</span><br />
				  
				  <p class='title'>Please provide your accepted paper title:</p>
				  <textarea rows='2' cols='45' name='PaperTitle' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[PaperTitle]' ";
				  }
				  echo " ></textarea><span class='errorMessage'>  Paper Title is required.</span>
				  
				  <p class='title'>Please provide the  control number of your paper:</p>
				  <input name='PaperSession' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[PaperSession]' ";
				  }
				  echo " /><span class='errorMessage'>  Paper control number is required.</span>
				  
				  <p class='title'>Is your company exhibiting at the meeting?*</p>
				   <select name='IsExhibition'>";
				  if (isset($_POST['issubmitted']) && $_POST['IsExhibition'] == 'No') 
				  {

						  echo "<option>Yes</option>
								<option selected='selected'>No</option>";
				  }
				  else
				  {
					  echo "<option selected='selected'>Yes</option>
							<option>No</option>";
				  }
				  echo "
				  </select><span class='errorMessage'>  Required.</span><br />
				  
				  <p class='title'>What is your passport number?</p>
				  <input name='Passport' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[Passport]' ";
				  }
				  echo " /><span class='errorMessage'>  Passport Number is required.</span><br />
				 
				  <p class='title'>From what country is your passport issued?</p>
				  <input name='CountryPassport' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[CountryPassport]' ";
				  }
				  echo " /><span class='errorMessage'>  Required.</span><br />
				  
				  <p class='title'>How long will you stay in the destination country?</p>
				  <input name='StayTime' type='text'";
				  if (isset($_POST['issubmitted'])) 
				  {
					  echo " value='$_POST[StayTime]' ";
				  }
				  
				  echo " /><span class='errorMessage'>  Required.</span><br />
					  <input  id='submit' value='Submit' type='submit' onclick='return FormValidate(this.form)' />
					  <input name='issubmitted' value='' type='text' style='display:none' />
					  
				<!--  
				<p><strong>We will send your Invitation Letter as soon as possible, or you have any questions,
				please contact us via registration@apos2016.org.</strong></p>
				-->
				
				<script>  
				  function FormValidate(form)
				  {
					  var index;
					  var rev=true;
					  for(index=0;index < $('#Invitation > :input').length;index++)
					  {
						  if($('#Invitation > p').eq(index).text().indexOf('*')>0)
						  {
							  if($('#Invitation > :input').eq(index).val() == '')
							  {
								  $('.errorMessage').eq(index).show();
								  rev = false;
							  }
							  else
							  {
								  $('.errorMessage').eq(index).hide();
							  }
						  }
					  }
					  if (rev==true) 
					  {
						  form.issubmitted.value = 'yes';
					  }
					  return rev;
					  

				  }
				  </script>
				</form>	
				</div>		
							
				<p id='Submitting' style='display:none;' class='emphasize'>Your information already submitted successfully.<br />
				We will send your Invitation Letter as soon as possible, or you have any questions,	please contact us
				via registration@apos2016.org.</p>
				
				</div>"; 
				
				
			  if (isset($_POST['issubmitted']))
			  {
				echo "<script>
				$(document).ready(function()
				{
					$('span.ValidateCodeErrorMessage').hide();
					$('div#FormForInvitation').hide();
					$('p#Submitting').show();
				});
				</script>";  
				  
				  $con = mysql_connect("localhost","root","Apos(Admin!2016)");
		          mysql_select_db("APOS2016",$con);  
				  
				  $FirstName = check_input($_POST['FirstName']);
				  $FamilyName = check_input($_POST['FamilyName']);
				  $Name = $FirstName." ".$FamilyName;
				  $Title = check_input($_POST['Title']);
				  $Company = check_input($_POST['Company']);
				  $Address = check_input($_POST['Address']);
				  $AddressC = check_input($_POST['AddressC']);
				  $City = check_input($_POST['City']);
				  $State = check_input($_POST['State']);
				  $ZIP = check_input($_POST['ZIP']);
				  $Country = check_input($_POST['Country']);
				  $Email = check_input($_POST['Email']);
				  $Telephone = check_input($_POST['Telephone']);
				  $Ext = check_input($_POST['Ext']);
				  $Fax = check_input($_POST['Fax']);
				  $Birthdate = check_input($_POST['Birthdate']);
				  $Gender = check_input($_POST['Gender']);
				  $IsSubmission = check_input($_POST['IsSubmission']);
				  $PaperTitle = check_input($_POST['PaperTitle']);
				  $PaperSession = check_input($_POST['PaperSession']);
				  $IsExhibition = check_input($_POST['IsExhibition']);
				  $Passport = check_input($_POST['Passport']);
				  $CountryPassport = check_input($_POST['CountryPassport']);
				  $StayTime = check_input($_POST['StayTime']);
				  
				  if(!mysql_query("delete from InvitationLetter_table where 
				  FirstName='$_POST[FirstName]' and 
				  FamilyName='$_POST[FamilyName]' and
				  Company='$_POST[Company]'",$con))
				  {
					  echo"<script>
					  alert('Failed to connect to server. Pleas submit again later.');
					  </script>";
					  die('Could not connect: ' . mysql_error());
				  }
				  
				  else if(!mysql_query("insert into InvitationLetter_table 
				  (
					  FirstName,
					  FamilyName,
					  Name,
					  Title,
					  Company,
					  Address,
					  AddressC,
					  City,
					  State,
					  ZIP,
					  Country,
					  Email,
					  Telephone,
					  Ext,
					  Fax,
					  Birthdate,
					  Gender,
					  IsSubmission,
					  PaperTitle,
					  PaperSession,
					  IsExhibition,
					  Passport,
					  CountryPassport,
					  StayTime
				   )
				   values
				   (
					  $FirstName,
					  $FamilyName,
					  $Name,
					  $Title,
					  $Company,
					  $Address,
					  $AddressC,
					  $City,
					  $State,
					  $ZIP,
					  $Country,
					  $Email,
					  $Telephone,
					  $Ext,
					  $Fax,
					  $Birthdate,
					  $Gender,
					  $IsSubmission,
					  $PaperTitle,
					  $PaperSession,
					  $IsExhibition,
					  $Passport,
					  $CountryPassport,
					  $StayTime
				   )
				   ",$con))
				   {
					  echo"<script>
					  alert('Failed to connect to server. Pleas submit again later.');
					  </script>";
					  die('Could not connect: ' . mysql_error());
				   }
				   else
				   {
					   
					    $FirstName = $_POST['FirstName'];
						$FamilyName = $_POST['FamilyName'];
						$Name = $FirstName." ".$FamilyName;
						$Title = $_POST['Title'];
						$Company = $_POST['Company'];
						$Address = $_POST['Address'];
						$AddressC = $_POST['AddressC'];
						$City = $_POST['City'];
						$State = $_POST['State'];
						$ZIP = $_POST['ZIP'];
						$Country = $_POST['Country'];
						$Email = $_POST['Email'];
						$Telephone = $_POST['Telephone'];
						$Ext = $_POST['Ext'];
						$Fax = $_POST['Fax'];
						$Birthdate = $_POST['Birthdate'];
						$Gender = $_POST['Gender'];
						$IsSubmission = $_POST['IsSubmission'];
						$PaperTitle = $_POST['PaperTitle'];
						$PaperSession = $_POST['PaperSession'];
						$IsExhibition = $_POST['IsExhibition'];
						$Passport = $_POST['Passport'];
						$CountryPassport = $_POST['CountryPassport'];
						$StayTime = $_POST['StayTime'];
						$Today = date("j F, Y");
						if($PaperTitle != '' && $PaperSession != '')
						{
							$TitleAndCode = ' '.$PaperTitle.'(Control number:'.$PaperSession.')';
						}
						else
						{
							$TitleAndCode = '';
						}
						
						require_once('tcpdf_include.php');
						class myPDF extends TCPDF
						{
							public function Footer() 
							{
								$this->SetY(-15);
								$this->SetColor('text',23,54,93,false,'');
								$this->Cell(180,0,'5-108 SEIEE BUILDINGS, SHANGHAI JIAO TONG UNIVERSITY,',0,1,'C',false,'',0);
								$this->Cell(180,0,'800 DONGCHUAN ROAD, MINHANG, SHANGHAI 200240, CHINA',0,1,'C',false,'',0);
								$this->Cell(180,0,'=Phone: +86 2134204316 =Email: registration@apos2016.org =www.apos2016.org',0,1,'C',false,'',0);
							}
						}
						
						
					    // create new PDF document
						$pdf = new myPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

						$fontname = $pdf->addTTFfont('font/arial.ttf','TrueTypeUnicode','',32);

						// set document information
						$pdf->SetCreator('2016 APOS Committee');
						$pdf->SetAuthor('2016 APOS Committee');
						$pdf->SetTitle('Invitation Letter');
						$pdf->SetSubject('');
						$pdf->SetKeywords('');

						// set default header data
						$pdf->SetHeaderData('header.jpg', PDF_HEADER_LOGO_WIDTH, ''.'', '', array(255,255,255), array(255,255,255));
						$pdf->setFooterData(array(23,54,93), array(255,255,255));

						// set header and footer fonts
						$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
						$pdf->setFooterFont(Array($fontname, '', PDF_FONT_SIZE_DATA));

						// set default monospaced font
						$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

						// set margins
						$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
						$pdf->SetHeaderMargin(1);
						$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

						// set auto page breaks
						$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

						// set image scale factor
						$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);



						// ---------------------------------------------------------

						// set default font subsetting mode
						$pdf->setFontSubsetting(true);

						// Set font
						// dejavusans is a UTF-8 Unicode font, if you only need to
						// print standard ASCII chars, you can use core fonts like
						// helvetica or times to reduce file size.
						$pdf->SetFont('times', '', 11, '', true);

						// Add a page
						// This method has several options, check the source code documentation for more information.
						$pdf->AddPage();
						$pdf->Image('./images/visa/SKL & ZHE.png',18,217,60,45,'PNG','','',true,300);

						// set text shadow effect
						//$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html1 = <<<EOD
		<div style='background-color:white'>
		$Today<br>
		<br>
		$Title $FirstName $FamilyName<br>
		$Company<br>
		$Address<br>
		$City $ZIP<br>
		$Country<br>
		Phone: $Telephone<br>
		Fax: $Fax<br>
		Email: $Email<br>
		Passport No.: $Passport<br>
		Citizenship: $CountryPassport<br>
		Date of Birth: $Birthdate <br>
		Gender: $Gender<br>
		<br>
		Dear $Title $FamilyName,<br><br>
		&nbsp; &nbsp; &nbsp; &nbsp; On behalf of the Program Committee of the <b>Asia-Pacific Optical Sensors Conference (APOS)</b>,
		I am sending you this letter to welcome your participation in the APOS 2016 conference, which is to be held 11-14 October 2016 in Shanghai, China at Shanghai Jiao Tong University.
		The meeting is open to all Optical Society of America (OSA), Society of Photographic Instrumentation Engineers (SPIE), 
		IEEE Photonics Society, Chinese Optical Society (COS), Chinese Society for Optical Engineering(CSOE) members, and those with related optics interest.<br><br>
		  &nbsp; &nbsp; &nbsp; &nbsp; 
		  Your participation in the meeting includes presenting your paper<i>$TitleAndCode</i>, attending sessions in your area of interest, 
		  and an opportunity to communicate with others working in the field of optical sensors.<br><br>
		  &nbsp; &nbsp;&nbsp; &nbsp; 
		  This is an invitation to participate in the meeting but not a personal sponsorship of your stay in China.  
		  You will need to secure your own funding for travel, registration, and housing expenses for the meeting.<br><br>
		  &nbsp; &nbsp;  
		  Additional meeting information, including visa requirements, is available on the APOS website at  
		  &nbsp;<a href="www.apos2016.org">www.apos2016.org</a>. Thank you for your interest in the meeting and we look forward to seeing you in Shanghai.<br>
EOD;

$html2 = <<<EOD
		Sincerely,
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>						
		Zuyuan He<br>
		General Chair of APOS 2016<br>
		Professor, Shanghai Jiao Tong University
	</div>
EOD;

						// Print text using writeHTMLCell()
						$pdf->writeHTMLCell(0, 0, '', '', $html1, 0, 1, false, true, 'J', true); 
						$pdf->writeHTMLCell(0, 0, '', 219, $html2, 0, 1, false, true, 'J', true); 
						// ---------------------------------------------------------
						
						// Close and output PDF document
						// This method has several options, check the source code documentation for more information.
						$pdf->Output('./Invitation Letters/Invitation Letter For '.$Title.' '.$Name.'.pdf', 'F');
						$LetterPath = './Invitation Letters/Invitation Letter For '.$Title.' '.$Name.'.pdf';
						
						
						
		/**********************************************************************************************/				
		/***********************************调用邮件程序，发送邀请信***********************************/
		/**********************************************************************************************/		
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

					$mail->AddReplyTo("registration@apos2016.org","APOS 2016 Committee");

					$mail->From       = "registration@apos2016.org";
					$mail->FromName   = "APOS 2016 Committee";


					$mail->addAddress($Email,$Name.' '.$Title);

					$mail->Subject = 'Invitation Letter for '.$Name;

					$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
					$mail->WordWrap   = 80; // set word wrap

					$mail->AddAttachment($LetterPath,'Invitation Letter.pdf'); // 添加附件,并指定名称 
					$mail->msgHTML(
						
						'<p>Dear '.$Title.' '.$FamilyName.':</p>
						<p>On behalf of the Program Committee of the <b>Asia-Pacific Optical Sensors Conference (APOS)</b>,
						I am sending you this letter to welcome your participation in the APOS 2016 conference, which is to be held 11-14 October 2016 in Shanghai, 
						China at Shanghai Jiao Tong University.<br />
						If you have any questions,	please contact us via registration@apos2016.org.
						<br/><br/><br/><br/>
						--<br/>
						Zuyuan He, General Chair of APOS 2016<br/>
						Professor, Shanghai Jiao Tong University<br/>
						5-108 SEIEE BUILDINGS, SHANGHAI JIAO TONG UNIVERSITY<br/>
						800 DONGCHUAN ROAD, MINHANG, SHANGHAI 200240, CHINA<br/>
						Phone: +86 2134204316<br/>
						Email: registration@apos2016.org<br/>
						</p>
						', dirname(__FILE__));

					$mail->IsHTML(true); // send as HTML

					$mail->Send();
				} catch (phpmailerException $e) {
					echo $e->errorMessage();
				}			
			
				   }
				  
			  }
           ?>
					
		
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