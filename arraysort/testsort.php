<?php
require "bubblesort.php";

$sort  = new \Liufen\Sort();
$array = array(5, 11, 6, 4, 4564, 10, 45, 412);
var_dump($sort->quickSort($array)); //调用快速排序方法

/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/5
 * Time: 11:13
 */
