<?php

var_dump("1");

$html = file_get_contents('http://www.ktr.mlit.go.jp/tonedamu/teikyo/realtime/live/fujiwara.html');
var_dump("2");

$dom = new DOMDocument();

var_dump("3");


@$dom->loadHTML($html);

var_dump("4");


$xml = simplexml_import_dom($dom);//解析したXML文字列をオブジェクトに変換します。
