<?php
$dbServerName = "127.0.0.1";
$dbUserName = "root";
$dbPassword="";
$dbName="b-tech";
$connect = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
mysqli_select_db($connect,$dbName);
