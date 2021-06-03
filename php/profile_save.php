<?php
session_start();

if (isset($_POST["btn_submit"])) {
    include_once 'db_connect.php';
    $db_table = 'users';

    $email = $_SESSION['email'];
    $name = $_POST['name'];
    $nickname = $_POST['nickname'];
    $path = '../images/users/';

    if (isset($_FILES['profile_avatar_photo'])) {
        $file_name = $_FILES['profile_avatar_photo']['name'];
        move_uploaded_file($_FILES['profile_avatar_photo']['tmp_name'], $path . $_FILES['profile_avatar_photo']['name']);
        $data = array('name' => $name, 'nickname' => $nickname, 'avatar' => $file_name);
        $query = $db->prepare("UPDATE $db_table SET `name`=:name, nickname=:nickname, avatar=:avatar WHERE email='".$email."'");
        $query->execute($data);
    } else {
        $data = array('name' => $name, 'nickname' => $nickname);
        $query = $db->prepare("UPDATE $db_table SET `name`=:name, nickname=:nickname WHERE email='".$email."'");
        $query->execute($data);
    }

    $_SESSION["success_messages"] = "<p class='success_messages'>Профиль сохранен</p>";
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".$address_site."/profile.php");
} else {
    exit('Выйди и зайди нормально');
}
