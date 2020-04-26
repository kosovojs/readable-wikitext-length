<?php
require_once __DIR__ . '/parser.php';

$parser = new Parser;

$thetext = $parser->getLengthForArticle('lv','Makšķernieku karte');
echo $thetext;