<?php
include('conn.php');

//creating a table in the database
$query1= "create table if not exists portfolioForm (id int primary key not null auto_increment,
Name varchar(225) not null,
email varchar(225) not null,
subject varchar(225) not null,
message varchar(225) not null,
date datetime) ";

mysqli_query($conn, "$query1") or die ("could not create portfolioForm" .mysqli_error($conn));

if($query1){echo"Table successfully created";
}
?>