<?php
$html = file_get_contents('http://www.ktr.mlit.go.jp/tonedamu/teikyo/realtime/live/fujiwara.html');

$dom = new DOMDocument();

@$dom->loadHTML($html);

$xpath = new DOMXPath($dom);
// title
//$title = $xpath->query('//head/title[1]')->item(0)->nodeValue;
//echo $title . "\n";


$trs = $xpath->query('//body//tr');
foreach($trs as $tr){
var_dump($trest);
}


//$xml = simplexml_import_dom($dom);//解析したXML文字列をオブジェクトに変換します。


/*
$root       = $xml->getElementsByTagName("table")->item(0);

var_dump($root);
*/
