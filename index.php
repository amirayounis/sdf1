<?php
// print
// echo "hi","<br>";
// print("hi");
// // print html tags
// echo "<h1> amira </h1>";
// // vars
// $x="amira";
// $X="ahmed";
// $str="<h1>$x</h1>";
// $str1='<h1>'.$x.'</h1>';
// echo $str1;
// // /////////array//////////////////
// // idexed array
// $arr=[1,"amira",true];
// $arr=array(1,"amira",true);
// //echo $arr;
// print_r($arr);
// //assosiative array
// $arr1=["id"=>1,"name"=>"amira",25,"gender"=>"female","blue"];
// print_r($arr1);
// for($i=0;$i<count($arr1);$i++){
// echo "<br>",$arr1[$i];
// }
/////////////////////////
// foreach($arr1 as $i=>$item){
//     echo "<br>$i : $item";
// }
// $users=[
//     ["first"=>"amira","last"=>"younis","email"=>"am@gmail.com"],
//     ["first"=>"amira","last"=>"younis","email"=>"am@gmail.com"],
//     ["first"=>"amira","last"=>"younis","email"=>"am@gmail.com"]
// ];
// // /////////////////////////
// $value="15";
// var_dump((int)$value);
// var_dump($value);
// settype($value,"int");
// var_dump($value);
// echo gettype($value)."<br>";
// //var_dump(gettype($value));
// ////////////
// define("pi",3.14);
// $area=pi*5**2;
// echo $area;
// ////////////////////
// echo "<br>".__DIR__;
// echo "<br>".__FILE__;
// echo "<br>".__LINE__;

// for($i=0;$i<=10;$i++){
//     echo "<br>".$i;
//     if($i==5){
//         exit;
//     }
// }

// echo "<br>",15<=>20;
// echo "<br>",20<=>15;
// echo "<br>",20=="20";
// ////////////scop////////////////
// global
$num=5;
inc();
inc();
inc();
inc();
// echo "<br>",$begin;
function inc(){
    // local
   static $begin=5;
    global $num;
    // for($i=$num;$i<=20;$i=$i+$step){
    //     echo "<br>",$i;
    // }
    echo "<br>",++$begin;
}
// /////////////////////////
$num=5;
change();
echo $num;
function change(){
   global  $num;
   $num=10;   
}
////////////////////////////
$a=5;
$b=&$a;
// $b=$a;
$b=20;
echo $a;
///////////////////////////////////////












































?>

