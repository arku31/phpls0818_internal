<?php
$file = file_get_contents(__DIR__ . '/example.xml');

$xml = new SimpleXMLElement($file);
print ($xml->to->attributes()->data->__toString()).PHP_EOL;
print ($xml->to->__toString()).PHP_EOL;
print ($xml->from->__toString()).PHP_EOL;
die();
