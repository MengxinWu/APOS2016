<?php

//Coded by WuYa on 2016.5.21
//Contact me mengxin@sjtu.edu.cn

//引入PHPExcel库文件:路径根据实际情况填写
include './PHPExcel.php';

//创建对象 
$excel = new PHPExcel(); 
$excel->getActiveSheet()->getStyle('A1:X1')->getFont()->setBold(true);
$excel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('J')->setWidth(14);
$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('W')->setWidth(16);
$excel->getActiveSheet()->getColumnDimension('X')->setWidth(16);
 

//Excel表格式 
$letter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y'); 
//表头数组 
$tableheader = array('序号','姓名','称呼','工作单位','地址','城市','省份','邮编','电邮','电话','分机','传真',
'论文题目','论文编码','文章次序','是否需要发票','发票抬头','注册类别','会员类别','额外的U盘','额外的招待券','额外的宴会券','总金额','注册日期','汇款留言'); 
//填充表头信息
 for($i = 0;$i < count($tableheader);$i++){
	 
		$excel->getActiveSheet()->setCellValue("$letter[$i]1","$tableheader[$i]"); 
	}
	
//数据库读取数据，生成表格数据
$mysql_server_name='localhost';                  //改成自己的mysql数据库服务器
$mysql_username='root';                  		 //改成自己的mysql数据库用户名
$mysql_password='Apos(Admin!2016)';              //改成自己的mysql数据库密码
$mysql_database='APOS2016';                      //改成自己的mysql数据库名

$conn = mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting"); //连接数据库
mysql_query("set names 'utf8'");                 //数据库输出编码 
mysql_select_db($mysql_database);                //打开数据库
$sql ="select * from APOS_Register order by ID"; //SQL语句
$result = mysql_query($sql,$conn);               //查询

$data = array();
$index = 0;
while($row = mysql_fetch_array($result))
{ 
	$data[$index][0] = $index + 1;
	$data[$index][1] = $row['Name'];
	$data[$index][2] = $row['Title'];
	$data[$index][3] = $row['Affiliation'];
	$data[$index][4] = $row['Address'];
	$data[$index][5] = $row['City'];
	$data[$index][6] = $row['Province'];
	$data[$index][7] = $row['ZIP'];
	$data[$index][8] = $row['Email'];
	$data[$index][9] = $row['Telephone'];
	$data[$index][10] = $row['Ext'];
	$data[$index][11] = $row['Fax'];
	$data[$index][12] = $row['PaperTitle'];
	$data[$index][13] = $row['PaperCode'];
	$data[$index][14] = $row['PaperOrder'];
	$data[$index][15] = $row['NeedInvoice'];
	$data[$index][16] = $row['InvoiceTitle'];
	$data[$index][17] = $row['RegisterType'];
	/***************************************************/
	/**********************生成会员信息*****************/
	/***************************************************/	
	$data[$index][18] = $row['MemberType'].'-'.$row['MemberID'];
	
	$data[$index][19] = $row['Publication'];
	$data[$index][20] = $row['Reception'];
	$data[$index][21] = $row['Banquet'];
	$data[$index][22] = $row['TotalPayment'];
	$data[$index][23] = $row['RegisTime'];
	/***************************************************/
	/**********************生成汇款留言信息*************/
	/***************************************************/
	$SecondChar_o = min(26,$row['Reception'] * 9 + $row['Publication'] * 3 + $row['Banquet']);
	if($SecondChar_o){
		$SecondChar = chr(ord("A") + $SecondChar_o - 1);
	}
	else{
		$SecondChar = 0;
	}
	$data[$index][24] = $row['PaperCode'].$row['PaperOrder'].'-'.$row['RegisterType'].$SecondChar;
	
	$index++;
} 




//填充表格信息
for ($i = 2;$i <= count($data) + 1;$i++) {
	$j = 0;
	foreach ($data[$i - 2] as $key=>$value) {
		$excel->getActiveSheet()->setCellValue("$letter[$j]$i","$value");
		$j++;
	}
}

//创建Excel输入对象
$filename = "Register_".date('Y-m-d(H-i)').".xls";
$write = new PHPExcel_Writer_Excel5($excel);
header("Pragma: public");
header("Expires: 0");
header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
header("Content-Type:application/force-download");
header("Content-Type:application/vnd.ms-execl");
header("Content-Type:application/octet-stream");
header("Content-Type:application/download");
header("Content-Disposition:attachment;filename=$filename");
header("Content-Transfer-Encoding:binary");
$write->save('php://output');

?>