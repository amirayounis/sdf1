<?php
// Arrays------------------------
// $colors=["blue" ,"green","yellow","black"];
// $info= ["name"=>"ahmed","email"=>"a@gmail.com","age"=>25,
// "hoppies"=>["pcgame","reading"]];

// foreach($info as $key=>$item){
//     if(is_array($item)){
//         echo "$key:";
//     foreach($item as $hoppy){
//         echo "$hoppy ,";
//     }
//     }else{
//         echo "$key : $item";
//     }
//    echo "<br>";
// }
// // /////////////////////////////
// $user=[];
// // unset($info);
// is_array($info["hoppies"]);
// echo isset($info);
// echo !empty($user);
// ///////////////////////
// // print_r(range(0,100));
// // //////keys
// print_r(array_keys($info));
// $values=array_values($info);
// for($i=0 ;$i<count($values);$i++){
//     $item=$values[$i];
//     if(is_array($item)){
//         echo "$key:";
//     foreach($item as $hoppy){
//         echo "$hoppy ,";
//     }
//     }else{
//         echo "$key : $item";
//     }
// }
// print_r(array_flip($info));
// ////////////////////////////////////
$name="mohamed";
$age=33;
$email="m@gmail.com";
$is_member=true;
$user=compact("name","age","email","is_member");
print_r($user);
// sort
  sort($user);
  echo "<br>";
  print_r($user);
  $user=compact("name","age","email","is_member");
  asort($user);
  echo "<br>";
  print_r($user);
  $user=compact("name","age","email","is_member");
  krsort($user);
  echo "<br>";
  print_r($user);
  $user=compact("name","age","email","is_member");
  $reversed=array_reverse($user);
  echo "<br>";
  print_r($reversed);
// //////////////////

echo "<br>",join("*",$user);
echo "<br>",implode(" ",$user);
// ///////////////////////////////////////
// echo "<br> array",["0"=>1,"1"=>2,"2"=>3]===
// ["1"=>2,"2"=>3,"0"=>1];
// ---------strings-------------
$arr="wellcome in iti";
// $arr=explode("e",$arr);
// print_r($arr);
///////////////////////////
echo "<br>",trim($arr);
//////////////////////
echo    strcmp("amira","amira");
echo substr("amira",3);
echo strstr("amira","m");
echo md5("aaaaaaaaaaaaa");
// ///////////////////////////////////
echo preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/","a@gmail.com");
echo filter_var("mcom",FILTER_VALIDATE_EMAIL);














