<?php
//引入文件
require ("phpqrcode.php");
//定义纠错级别
$errorLevel = "L";
//定义生成图片宽度和高度;默认为3
$size = "4";
//定义生成内容
$content="我是刘芬，来自湖南";
//调用QRcode类的静态方法png生成二维码图片
QRcode::png($content, false, $errorLevel, $size);
?>
