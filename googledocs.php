<?php
//example...
$doc = '/worddoc.docx';

//get google viewer url...
echo 'http://docs.google.com/viewer?url='.urlencode($doc);

//or get html of doc...
#echo file_get_contents('http://webcache.googleusercontent.com/search?q=cache:tpOT17RuGWAJ:'.urlencode($doc);
?>