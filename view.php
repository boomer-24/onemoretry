<?php
	
	$app= new COM("Word.Application"); 
	$file = "worddoc.doc";
	
	$app->visible = true;
	$app->Documents->Open($file);
	
	$app->ActiveDocument->PrintOut();
	echo $app->ActiveDocument;
	
	$app->ActiveDocument->Close();
	$app->Quit();
?>