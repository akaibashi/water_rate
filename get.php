<?php
$html = file_get_contents('http://www.ktr.mlit.go.jp/tonedamu/teikyo/realtime/live/fujiwara.html');

$dom = new DOMDocument();

@$dom->loadHTML($html);


$xml = simplexml_import_dom($dom);//解析したXML文字列をオブジェクトに変換します。



$root       = $xml->getElementsByTagName("table")->item(0);

var_dump($root);