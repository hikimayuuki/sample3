<?php
function double($number) {
    return $number * 2;
}
echo double(5);



function sumab($a,$b){
    return $a + $b;
}
echo sumab(2,5);




$array = array(1,3,5,7,9);
asort($array);
print_r($array);






$arr=array(12,3,6,2);
function max_array($arr){
    $result=[0];
    foreach($arr as $a){
        if($result < $a){
            $result=$a;
        }
    }

return $result;
}
echo max_array($arr);



$strip_tags = "<h1>取り除く</h1>";
echo strip_tags($strip_tags);


$fruits = ["apple","orange"];
array_push($fruits,"banana","greap");
print_r($fruits);


$team1 = ["person1","person2"];
$team3 = ["person3","person4"];
$team2 = ["person5","person6"];
$team4 = ["person7","person10"];
$team_merge = array_merge($team1,$team3,$team2,$team4);
print_r($team_merge);


echo "現在のタイムスタンプ　" .time();


$mktime = mktime(23, 0, 0, 1, 8, 2019);
echo "今日の23時のタイムスタンプ　" .$mktime;


$timestamp = time();
echo date("Y/m/d" ,$timestamp);


?>