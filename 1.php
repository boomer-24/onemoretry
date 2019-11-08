<?php
// запускаем word
$word = new COM("word.application") or die("Unable to instantiate Word");
echo "Loaded Word, version {$word->Version}\n";

//делаем его активным окном
$word->Visible = 1;

//открываем пустой документ
$word->Documents->Add();

//Что то с ним делаем
$word->Selection->TypeText("This is a test...");
$word->Documents[1]->SaveAs("Useless test.doc");

//закрываем word
$word->Quit();

//высвобождаем ресурсы объекта
$word = null;
?>