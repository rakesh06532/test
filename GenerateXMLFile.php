<?php 

$xml = new DOMDocument("1.0", "ISO-8859-15");

// Create the root element
$root = $xml->createElement("root");
$xml->appendChild($root);

// Create a child element
$child = $xml->createElement("child", "This is a child element.");
$root->appendChild($child);

// Save the XML document as a string
$xmlString = $xml->saveXML();
echo $xmlString;

// Save the XML document to a file
$xml->save("example.xml");
?>