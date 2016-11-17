<?php
require_once(__DIR__ . '/cdatabase.php');
require_once(__DIR__ . '/cnews.php');

$news = new CNews();
$queryNewsDelete= $news->newsDelete();