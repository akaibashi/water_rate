<?php

// phpQueryの読み込み
require_once("phpQuery-onefile.php");
// HTMLの取得
$doc = phpQuery::newDocumentFile("http://www.tam-tam.co.jp/tipsnote/");
 
foreach ($doc[".l-main"]->find(".entry-box") as $entry){
  //更新日
  $date = pq($entry)->find('time')->attr('datetime');
  //タイトル
  $h1 = pq($entry)->find('h1')->text();
  //配列に格納
  $jsonData[] = ['title' => $h1, 'date' => $date];
}
 
//json を出力
header(" Content-Type:application/json; charset=utf-8");
echo json_encode($jsonData, JSON_UNESCAPED_UNICODE);