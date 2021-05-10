<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_base = "knaaru";
$db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$address_site = "http://knaaru/";