<?php
  $host='localhost';
  $user='root';
  $password='';
  $db='amplitudocms';
  $connection=mysqli_connect($host, $user, $password, $db);
  if(!$connection){
    die("Nije ostvarena konekcija!").mysqli_error($connection);
  }
?>