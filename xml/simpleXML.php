<?php
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Khanh</to>
<from>khanh</from>
<heading>Tieu de</heading>
<body>Day la noi dung</body>
</note>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);

echo "<br>";

//XML read from file
$xml=simplexml_load_file("note.xml") or die("Error: Cannot create object");
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body . "<br>";
?>