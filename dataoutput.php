
<?php

echo "<p>here-1</p>";
error_reporting(E_ALL);
date_default_timezone_set('Europe/London');

echo "<p>here-1</p>";
/** PHPExcel */
require_once '../phpclass/PHPExcel.php';


echo "<p>here-1</p>";
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

echo "<p>here-2</p>";

// Set properties
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
                             ->setLastModifiedBy("Maarten Balliauw")
                             ->setTitle("Office 2007 XLSX Test Document")
                             ->setSubject("Office 2007 XLSX Test Document")
                             ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
                             ->setKeywords("office 2007 openxml php")
                             ->setCategory("Test result file");
$objPHPExcel->getActiveSheet()->mergeCells('A1:G1');
$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);

// Add some data


$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', '通讯录')
            ->setCellValue('A2', '账号')
            ->setCellValue('B2', '姓名')
            ->setCellValue('C2', '手机')
            ->setCellValue('D2', '电话')
            ->setCellValue('E2', '科室')
            ->setCellValue('F2', '级别')
            ->setCellValue('G2', '编号');    
			
			
			echo "<p>here-1</p>";

//数据库连接
$db = mysql_connect("localhost", "root", "apos2016");
mysql_select_db("apos2016_register",$db);  //选择数据库，这里为"ywcl"。
mysql_query("SET NAMES UTF8"); //设定编码方式为UTF8


echo "<p>here-1</p>";

$sqlgroups="select * from APOS_Register order by id";
$resultgroups=mysql_query($sqlgroups);
    $numrows=mysql_num_rows($resultgroups);
    if ($numrows>0)
    {
        $count=2;
        while($data=mysql_fetch_array($resultgroups))
        {
            $count+=1;
            $l1="A"."$count";
            $l2="B"."$count";
            $l3="C"."$count";
            $l4="D"."$count";
            $l5="E"."$count";
            $l6="F"."$count";
            $l7="G"."$count";
            $objPHPExcel->setActiveSheetIndex(0)            
                        ->setCellValue($l1, $data['username'])
                        ->setCellValue($l2, $data['realname'])
                        ->setCellValue($l3, $data['mobile'])
                        ->setCellValue($l4, $data['bgdh'])
                        ->setCellValue($l5, $data['keshi'])
                        ->setCellValue($l6, $data['jibie'])
                        ->setCellValue($l7, $data['bianhao']);
        }
    }        

// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('通讯录');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="通讯录.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>