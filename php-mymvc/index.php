<?php


$c_str=$_GET['c'];
$c_name=$c_str.'Controller';
$c_path='controller/'.$c_name.'.php';

$method=$_GET['a'];

$param = $_GET['p'];

require($c_path);
$controller=new $c_name;
// $controller->$method();
$controller->$method($param);
?>

