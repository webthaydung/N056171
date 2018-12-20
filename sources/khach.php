<?php
$server_username = "root";
$server_password = "";
$server_host = "localhost:88";
$database = 'de_mo_btl';
 
$conn = de_mo_btl($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
de_mo_btl($conn,"SET NAMES 'UTF8'");