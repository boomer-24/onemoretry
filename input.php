<?php
$app= new COM("Word.Application"); 
$file = "doc.docx";
$app->visible = true; 
$app->Documents->Open($file);
$app->ActiveDocument->PrintOut();
?>