<?php
//Q1. 次の配列の最後に "斎藤" を追加し，出力して下さい。
 $names =["田中", "佐藤", "佐々木","高橋"]; 
 array_push($names, "斎藤"); 
 print_r($names);

 //Q2. 次の二つの配列を合体させた新しい配列 $array を作成し，出力して下さい
 $array1=["dog","cat","fish"];
 $array2=["bird","bat","tiger"];

 $array = array_merge($array1,$array2);
 print_r($array);

 //Q3. 次の配列の中に 3 がいくつあるかを出力するコードを書き，出力して下さい。
 $numbers = [1, 5, 8, 10, 2, 3, 2, 3, 1, 4, 5, 9];
$count = 0;
 foreach($numbers as $number){
     if($number == 3){
         $count++;
     }
 }
 echo "３の個数は、".$count."個です。\n";

//Q4. 次の配列から null の要素を削除し，出力して下さい。（新しい配列を作成せずに実現して下さい）
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];
$sports = array_filter($sports);
print_r($sports);

//Q5. 配列が空であれば true，1つ以上の要素があれば false を出力するコードを書いて下さい。
$array1 =[];
if(empty($array1)){
    echo "ture"."\n";
}

$array2 = [1, 5, 8, 10];
if(empty($array)){
}else{
    echo "false"."\n";
}

//Q6. 次の配列から，期待された結果の配列 $numbers2 を作成し，出力して下さい。
$numbers1 = [1, 2, 3, 4, 5];
$numbers2 = array_map(function($value){ return $value * 10; }, $numbers1);
print_r($numbers2);

//Q7. 次の配列の要素を 文字列 から 数字 に変換し，出力して下さい。（新しい配列を作成せずに実現して下さい）
$array = ["1", "2", "3", "4", "5"];
$array = array_map('intval',$array);
print_r($array);

//Q8. 期待する出力結果になるようにコードを書き加えて下さい。
$programming_languages = ["php", "ruby", "python", "javascript"];
$programming_languages = array_map('ucfirst', $programming_languages);
$upper_case_programming_languages = array_map('strtoupper', $programming_languages);
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

//Q9. 次の配列を用いて，期待通りの出力結果になるようにコードを書いて下さい。
$names = ["田中", "佐藤", "佐々木", "高橋"];
$names2 = [];
foreach($names as $key => $name2){
    $number = ++$key;
    $name2 = "会員No.".$number." ".$name2;
    array_push($names2,$name2);
}
print_r($names2);

//Q10. 次の配列の各要素について， うに という文字列が含まれていれば「好物です」と表示し，そうでなければ「まぁまぁ好きです」と出力するコードを書いて下さい。
$foods = ["いか", "たこ", "うに", "しゃけ", "うにぎり", "うに軍艦", "うに丼", "高級なうに"];
foreach($foods as $food){
    if(preg_match("/うに/",$food)){
        print("好物です"."\n");
    }else{
        print("まぁまぁ好きです"."\n");
    }
}

?>
