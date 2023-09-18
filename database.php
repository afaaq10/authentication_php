<?php

$server="localhost";
$user="root";
$password="";
$name="mydatabase";

try {
  $conn= mysqli_connect($server,$user,$password,$name);
  if($conn){
    echo "Connection established";
  }
} catch (mysqli_sql_exception) {
    echo "Couldn't connect!";
}
