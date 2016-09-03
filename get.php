<?php

//require
require_once('phpQuery-onefile.php');

var_dump("aaa");

// 藤沢ダム
//ページ取得
$html = file_get_contents('http://www.ktr.mlit.go.jp/tonedamu/teikyo/realtime/live/fujiwara.html');


var_dump("aa2");

//DOM取得
$doc = phpQuery::newDocument($html);

var_dump("aa3");


//要素取得
echo $doc["title"]->text();


var_dump("aa4");
