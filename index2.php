<?php
#<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	$chief = $since = $to = $alternate = "    ";
#	if(!isset($_POST['comment']))
#	{
#		$comment = $_POST['comment'];
		
		$chief = $_POST['chief'];
		$since = $_POST['since'];
		$to = $_POST['to'];
		$alternate = $_POST['alternate'];
#	}

	echo 'Document was created';
	require 'vendor/autoload.php';
	$phpWord = new \PhpOffice\PhpWord\PhpWord();
	
	
	$phpWord->setDefaultFontName('Times New Roman');
	$phpWord->setDefaultFontSize(14);
	$properties = $phpWord->getDocInfo();  

	$properties->setCreator('Name');
	$properties->setCompany('Company');
	$properties->setTitle('Title');
	$properties->setDescription('Description');
	$properties->setCategory('My category');
	$properties->setLastModifiedBy('My name');
	$properties->setCreated(mktime(0, 0, 0, 3, 12, 2015));
	$properties->setModified(mktime(0, 0, 0, 3, 14, 2015));
	$properties->setSubject('My subject');
	$properties->setKeywords('my, key, word'); 
	
	$sectionStyle = array(
 
#	'orientation' => 'landscape',
	'marginTop' => \PhpOffice\PhpWord\Shared\Converter::pixelToTwip(10),
	'marginLeft' => 600,
    'marginRight' => 600,
    'colsNum' => 1,
    'pageNumberingStart' => 1,
    'borderBottomSize'=>100,
    'borderBottomColorer'=>'FFC0C0'
	);
	$section = $phpWord->addSection($sectionStyle);
	
	$text0 = "";
	$text1 = "ФГУП";	
	$text2 = "НАУЧНО-ПРОИЗВОДСТВЕННЫЙ ЦЕНТР";
	$text3 = "АВТОМАТИКИ И ПРИБОРОСТРОЕНИЯ";
	$text4 = "имени академика Н.А. ПИЛЮГИНА";
	$fontStyle = array('name'=>'Times New Roman', 'size'=>14, 'color'=>'000000', 'bold'=>TRUE, 'italic'=>FALSE);
	$parStyle = array('align'=>'center','spaceBefore'=>10);
 
	$section->addText(htmlspecialchars($text0), $fontStyle, $parStyle);
	$section->addText(htmlspecialchars($text1), $fontStyle, $parStyle);
	$section->addText(htmlspecialchars($text2), $fontStyle, $parStyle);
	$section->addText(htmlspecialchars($text3), $fontStyle, $parStyle);
	$section->addText(htmlspecialchars($text4), $fontStyle, $parStyle);
	
	$section->addText(htmlspecialchars("ПРИКАЗ"), 
	array('name'=>'Times New Roman', 'size'=>22, 'color'=>'000000', 'bold'=>TRUE, 'italic'=>FALSE), $parStyle);
	$section->addText(htmlspecialchars("________________		№__________"), 
	array('name'=>'Times New Roman', 'size'=>14, 'color'=>'000000', 'bold'=>FALSE, 'italic'=>FALSE), array('align'=>'left','spaceBefore'=>10));
	$section->addText(htmlspecialchars(" "), 
	array('name'=>'Times New Roman', 'size'=>22, 'color'=>'000000', 'bold'=>TRUE, 'italic'=>FALSE), $parStyle);
	
	$section->addText(htmlspecialchars("Об исполнении обязанностей временно отсутствующего работника"), 
	array('name'=>'Times New Roman', 'size'=>14, 'color'=>'000000', 'bold'=>FALSE, 'italic'=>FALSE), array('align'=>'left','spaceBefore'=>10));	
	
	$section->addText(htmlspecialchars("1.	В связи с отпуском начальника отдела № 138 $chief с $since по $to исполнение его обязанностей на указанный срок возложить на начальника группы отдела № 138 $alternate и установить ей доплату за исполнение обязанностей временно отсутствующего работника в размере 4000 рублей в месяц."), 
	array('name'=>'Times New Roman', 'size'=>14, 'color'=>'000000', 'bold'=>FALSE, 'italic'=>FALSE), array('align'=>'left','spaceBefore'=>10));
	
	$section->addText(htmlspecialchars("2.	Контроль за исполнением настоящего приказа возложить на заместителя генерального директора по качеству С.В. Орлова."), 
	array('name'=>'Times New Roman', 'size'=>14, 'color'=>'000000', 'bold'=>FALSE, 'italic'=>FALSE), array('align'=>'left','spaceBefore'=>10));	

	$section->addText(htmlspecialchars(" "), 
	array('name'=>'Times New Roman', 'size'=>14, 'color'=>'000000', 'bold'=>TRUE, 'italic'=>FALSE), $parStyle);
	$section->addText(htmlspecialchars(" "), 
	array('name'=>'Times New Roman', 'size'=>14, 'color'=>'000000', 'bold'=>TRUE, 'italic'=>FALSE), $parStyle);
	$section->addText(htmlspecialchars(" "), 
	array('name'=>'Times New Roman', 'size'=>14, 'color'=>'000000', 'bold'=>TRUE, 'italic'=>FALSE), $parStyle);
	$section->addText(htmlspecialchars(" "), 
	array('name'=>'Times New Roman', 'size'=>14, 'color'=>'000000', 'bold'=>TRUE, 'italic'=>FALSE), $parStyle);
	
	$section->addText(htmlspecialchars("Генеральный директор 							Е.Л. Межирицкий"), 
	array('name'=>'Times New Roman', 'size'=>14, 'color'=>'000000', 'bold'=>FALSE, 'italic'=>FALSE), $parStyle);
	
	$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord,'Word2007');
	$objWriter->save('doc.docx');
?>