<?php

//require
require_once('phpQuery-onefile.php');

var_dump("aaa");

// 藤沢ダム
//ページ取得
$html = file_get_contents('http://www.ktr.mlit.go.jp/tonedamu/teikyo/realtime/live/fujiwara.html');
//DOM取得
$doc = phpQuery::newDocument($html);

//要素取得
echo $doc["title"]->text();