<?php

$xml = file_get_contents('php://input');
$dom = new DOMDocument();
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml);
$file = fopen("C:\wamp64\www\Web\L9\lab9.xml", "r+");
fwrite($file, $dom->saveXML());
fclose($file);

?>