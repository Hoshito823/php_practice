<?php
$result = 0;
function double ($arg) {
    return $result = $arg * 2;
};

echo double(10);
echo "\n";

//課題2
$result2 = 0;
function sum ($a,$b){
    return $result2 = $a + $b;
}
echo sum(4,6);
echo "\n";

//課題3
$array = [1,3,5,7,9];
function multiplied_array ($arr) {
    $result3 = 1;
    foreach($arr as $number){
        $result3 = $result3 * $number;
    }
    return $result3;
}
echo multiplied_array($array);
echo "\n";

//課題4
$exapmle_array = [1,4,65,8,6,9,43,85,43,5];
 function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($a >= $max_number){
            $max_number = $a;
        }
    }
    return $max_number;
 }
 echo max_array($exapmle_array);
 echo "\n";
 
 //課題5
 //5-1.htmlタグを取り除く関数
 $html_str = "<h1>「ブログタイトル」</h1>" . "<p>はらほろひれはれ</p>";
 echo strip_tags($html_str) . "\n";
 
 //5-2.配列の最後に要素を追加する関数
 $array_ap = [];
 array_push($array_ap,"apple","lemon","peach");
 print_r($array_ap);
 
 //5-3.配列の結合
 $array1 = ["apple",1,"green","Color" => "Yellow"];
 $array2 = [
     "Color" => red,
     "Animal" => dog,
     3,
     87
     ];
 $merge_result = array_merge($array1,$array2);
 print_r($merge_result);
 
 //5-4,5.タイムスタンプを返す、日付変換
 date_default_timezone_set('Asia/Tokyo');
 print date("Y/m/d G:i:s") ."\n";
 echo date('Y/m/d',time()) . "\n";
 echo date('Y/m/d',mktime(0,0,0,8,23,1995)) . "\n";
 
 
