<?php
$mysqli = new mysqli("localhost","root","","library");

if ($mysqli -> connect_errno) {
  echo "Error on page";
  exit();
} 
?>