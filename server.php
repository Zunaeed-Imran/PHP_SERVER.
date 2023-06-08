<?php
// $server = SGB thst contain header paths and script location
// the entries in this array are created by the web server
// show nearly everything you need to know about the current web page env.

foreach($_SERVER as $key => $valu){
  echo "{$key} = {$value} </br>"; 
}


?>