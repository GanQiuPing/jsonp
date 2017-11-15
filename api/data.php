<?php
/**
 * Created by PhpStorm.
 * User: HUCC
 * Date: 2017/11/8
 * Time: 20:14
 */
header("content-type:text/html;charset=utf-8");

$arr = array(
    "name"=>"zs",
    "age"=>18
);

$method = $_GET['callback'];

$result = json_encode($arr);
echo "$method($result)";
