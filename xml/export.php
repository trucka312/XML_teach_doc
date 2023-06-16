<?php 
$xml = new DOMDocument("1.0","UTF-8");
$xml->load("nhanvien.xml");
$root = $xml->documentElement;
$xml_string = file_get_contents("nhanvien.xml");
$xml = simplexml_load_string($xml_string);
$json = json_encode($xml,JSON_UNESCAPED_UNICODE);
echo $json;
header("location:nhanvien.json");
?>