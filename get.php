<?php

//require
require_once('phpQuery-onefile.php');

//ページ取得
$html = file_get_contents('./test.html');

//DOM取得
$doc = phpQuery::newDocument($html);

//要素取得
echo $doc["title"]->text();