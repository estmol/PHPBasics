<?php
//Q1:php　配列　要素を追加
 $names =["田中", "佐藤", "佐々木","高橋"]; 
 array_push($names, "斎藤"); 
 print_r($names);

 //Q2:php　配列　要素を追加
 $array1=["dog","cat","fish"];
 $array2=["bird","bat","tiger"];

 $array = array_merge($array1,$array2);
 print_r($array);

 //Q3:foreach 配列 重複
 $numbers = [1, 5, 8, 10, 2, 3, 2, 3, 1, 4, 5, 9];
$count = 0;
 foreach($numbers as $number){
     if($number == 3){
         $count++;
     }
 }
 echo "３の個数は、".$count."個です。\n";

//Q4:配列　特定　重複　削除」
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];
$sports = array_filter($sports);
print_r($sports);
?>