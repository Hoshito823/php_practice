<?php
//課題1
$a = 3;
$b = 7;
echo $a + $b."\n";

//課題2
$array_month = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
echo $array_month[7]."\n";

//課題3
$hello = "Hello, ";
$name = "Nakamura Hoshito";
$world = "'s world!";
echo $hello.$name.$world."\n";

//課題4
$tech_boost = "tech";
echo $tech_boost." boost"."\n";

/*課題5（バグあり)
・""　無し
・変数名数字始まり
・
*/

//課題5　（バグ無し）
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018['December']."\n";




