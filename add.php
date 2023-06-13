<?php

// 1-get the data from user ///
echo "data submitted";
// /////get method////////
print_r($_GET);
echo "<br>";
// ///////post method////////
print_r($_POST);
echo "<br>";
////////////get or post/////////
print_r($_REQUEST);
//files/////////////
echo "<br>";
print_r($_FILES);
//2-valiadation 

// picture.jpg
$error="";
if(!empty($_POST)){
    if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    $error="invalid email";
    }
    if(strlen($_POST["pass"])<8){
        $error .="invalid password";
    }
    if(empty($_FILES["pic"])){
        $error .="please upload file";
    }
    // file extension
    else if (strtolower(pathinfo($_FILES["pic"]["name"],PATHINFO_EXTENSION))!= ("avif"||"jpg"||"png"||"jpeg")){
        $error .="invalid";
    }
}
if(empty($error)){
    // store
    // file upload
    $file_name= md5($_FILES["pic"]["name"].microtime());
    $file_name .=".". pathinfo($_FILES["pic"]["name"],PATHINFO_EXTENSION);
  echo  move_uploaded_file($_FILES["pic"]["tmp_name"],"storage/".$file_name);

}else{
    echo $error;
}
// $img="dfdjuyguh___niuhk.ojij-profile.jpg";
// // $img =explode(".",$img);
// // echo end($img);
// echo pathinfo($img,PATHINFO_EXTENSION);



// 3- store in database  / file

