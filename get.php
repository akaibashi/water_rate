<?php
$html = file_get_contents('http://www.ktr.mlit.go.jp/tonedamu/teikyo/realtime/live/fujiwara.html');

$dom = new DOMDocument();

@$dom->loadHTML($html);

$xpath = new DOMXPath($dom);
// title
//$title = $xpath->query('//head/title[1]')->item(0)->nodeValue;
$title = $xpath->query('//body/table/tr[1]/tbody/tr[0]/td/table/tbody/tr[3]')->item(0)->nodeValue;
echo $title . "\n";


//$xml = simplexml_import_dom($dom);//解析したXML文字列をオブジェクトに変換します。


/*
$root       = $xml->getElementsByTagName("table")->item(0);

var_dump($root);
*/
