<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server</title>
</head>
<body>
  <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    username:<br>
    <input type="text" name="username">
    <input type="submit">
  </form>
</body>
</html>


<?php
  // foreach($_SERVER as $key => $value){
  //   echo "{$key} = {$value} </br>";
  // }
?>