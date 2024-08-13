<?php 
$xml = new DOMDocument();
$xml->load("note.xml");

print $xml->saveXML();
?>