<?php
namespace Jingwu\Func;


//var_dump(splitInt(',', '1,2,3'   ));
//var_dump(splitInt(',', '1,'      ));
//var_dump(splitInt(',', ''        ));
//var_dump(splitInt(',', '1, 2,,, '));
function splitInt($pattern, $raw) {
    $data = [];
    $raw = trim($raw);
    if(!$raw) return $data;
    $rows = explode($pattern, $raw);
    foreach($rows as &$row) {
        $row = trim($row);
        if($row != "") $data[] = intval(trim($row));
    }
    return $data;
}


//var_dump(splitInt(',', '1,2,3'   ));
//var_dump(splitInt(',', '1,'      ));
//var_dump(splitInt(',', ''        ));
//var_dump(splitInt(',', '1, 2,,, '));
function splitStr($pattern, $raw) {
    $data = [];
    $raw = trim($raw);
    if(!$raw) return $data;
    $rows = explode($pattern, $raw);
    foreach($rows as &$row) {
        $row = trim($row);
        if($row != "") $data[] = trim($row);
    }
    return $data;
}

//$data = [
//    ["id" => 1, "email" => "ldq@qq.com",  "name"  => "tester",   "title" => "title"   ],
//    ["id" => 2, "email" => "ldq2@qq.com", "name"  => "zhongguo", "title" => "title222"],
//];
//var_dump(arrColumns($data, 'email'));
//var_dump(arrColumns($data, 'email', 'name'));
//var_dump(arrColumns($data, ['email', 'title']));
//var_dump(arrColumns($data, ['email', 'title'], 'name'));
function arrColumns($raw = [], $fields = '', $indexKey = '') {
    if(!is_array($raw)) return false;
    if(is_string($fields)) return $indexKey ? array_column($raw, $fields, $indexKey) : array_column($raw, $fields);
    $data = [];
    foreach($raw as $key => $row) {
        $index = $indexKey ? $row[$indexKey] : $key;
        $data[$index] = [];
        foreach($fields as $field) {
            $data[$index][$field] = isset($row[$field]) ? $row[$field] : null;
        }
    }
    return $data;
}

//$data = ["id" => 2, "email" => "ldq2@qq.com", "name"  => "zhongguo", "title" => "title222"];
//var_dump(arrKeysPart($data, ['id', 'email']));
function arrKeysPart(&$data, $fields) {
    $result = [];
    foreach($fields as $field) {
        if($data[$field]) $result[$field] = $data[$field];
    }
    return $result;
}

