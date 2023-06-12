<?php
// include_once("index.php");
require_once("index.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello from apache</h1>
    <table class="table" border="1px solid black">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($users as $item){
    echo "<tr>
      <th scope='row'>1</th>
      <td>$item[first]</td>
      <td>$item[last]</td>
      <td>$item[email]</td>
    </tr>";}
    ?>
  </tbody>
</table>
</body>
</html>