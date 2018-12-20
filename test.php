<?php
ini_set("display_errors","On");
error_reporting(E_ALL);

#require "vendor/autoload.php";
require "src/func/func.php";

use Jingwu\Func as F;

//$data = [
//    ["id" => 1, "email" => "ldq@qq.com",  "name"  => "tester",   "title" => "title"   ],
//    ["id" => 2, "email" => "ldq2@qq.com", "name"  => "zhongguo", "title" => "title222"],
//];
//var_dump(F\arrColumns($data, 'email'));
//var_dump(F\arrColumns($data, 'email', 'name'));
//var_dump(F\arrColumns($data, ['email', 'title']));
//var_dump(F\arrColumns($data, ['email', 'title'], 'name'));
//var_dump(F\arrColumns($data, ['email', 'title', 'code']));

$data = ["id" => 2, "email" => "ldq2@qq.com", "name"  => "zhongguo", "title" => "title222"];
var_dump(F\arrKeysPart($data, ['id', 'email']));

