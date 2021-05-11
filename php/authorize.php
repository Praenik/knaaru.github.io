<?php
session_start();
require_once("db_connect.php");
$_SESSION["error_messages"] = '';
$_SESSION["success_messages"] = '';

if(isset($_POST["reg_btn"]) && !empty($_POST["reg_btn"])){

    // --- Ввели ли E-mail ---
    $email = trim($_POST["email"]);
    if (isset($_POST["email"])) {
        if (!empty($email)) {
            $email = htmlspecialchars($email, ENT_QUOTES);
            $reg_email = "/.+@.+\..+/i";
            if (!preg_match($reg_email, $email)) {
                $_SESSION["error_messages"] .= "<p class='message_error'>Вы ввели неправильный email</p>";
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: ".$address_site."/auth.php");
                exit();
            }
        } else {
            $_SESSION["error_messages"] .= "<p class='message_error'>Поле для ввода почтового адреса(email) не должна быть пустой.</p>";
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/auth.php");
            exit();
        }
    } else {
        $_SESSION["error_messages"] .= "<p class='message_error'>Отсутствует поле для ввода Email</p>";
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$address_site."/auth.php");
        exit();
    }

    // --- Ввели ли пароль ---
    if (isset($_POST["password"])) {
        $password = trim($_POST["password"]);
        if (!empty($password)) {
            $password = htmlspecialchars($password, ENT_QUOTES);
            $password = md5($password."knaaru");
        } else {
            $_SESSION["error_messages"] .= "<p class='message_error'>Укажите Ваш пароль</p>";
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/auth.php");
            exit();
        }
    } else {
        $_SESSION["error_messages"] .= "<p class='message_error' >Отсутствует поле для ввода пароля</p>";
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$address_site."/auth.php");
        exit();
    }

    // --- Ищем пользователя ---
    $result_query_select = $db->query("SELECT * FROM `users` WHERE `email` = '".$email."' AND `password` = '".$password."'");
    if (!$result_query_select) {
        $_SESSION["error_messages"] .= "<p class='message_error'>Ошибка запроса на выборке пользователя из БД</p>";
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$address_site."/auth.php");
        exit();
    } else {
        if ($result_query_select->rowCount() == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $user = $result_query_select->fetch(PDO::FETCH_ASSOC);
            $_SESSION['role'] = $user['role'];
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/index.php");
        } else {
            $_SESSION["error_messages"] .= "<p class='message_error'>Неправильный логин и/или пароль</p>";
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/auth.php");
            exit();
        }
    }
} else {
    exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=".$address_site."> главную страницу </a>.</p>");
}

