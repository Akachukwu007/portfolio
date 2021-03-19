<?php
//create connection
$conn= mysqli_connect('localhost', 'root', '');

//create database
$_create= mysqli_query($conn, 'create database if not exists myPorfolio') 
or die('could not create webproject' .mysqli_error($conn));
if($_create) {echo 'Database created successfully';}
?>