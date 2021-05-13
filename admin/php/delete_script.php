<?php
session_start();

$id = $_GET['id'];
$db_table = 'news';
include_once '../../php/db_connect.php';

$query = $db->query("DELETE FROM $db_table WHERE id=$id");

$_SESSION["success_messages"] = "<p class='success_messages'>Новость удалена</p>";
header("HTTP/1.1 301 Moved Permanently");
header("Location: ".$address_site."/admin/news.php");