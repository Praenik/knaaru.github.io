<?php
session_start();
require_once("db_connect.php");
$_SESSION["error_messages"] = '';
$_SESSION["success_messages"] = '';

if (isset($_POST["reg_btn"]) && !empty($_POST["reg_btn"])) {

    // --- Введен ли E-mail ---
        if (isset($_POST["email"])) {
            $email = trim($_POST["email"]);
            if (!empty($email)) {
                $email = htmlspecialchars($email, ENT_QUOTES);
                $reg_email = "/.+@.+\..+/i";
                if (!preg_match($reg_email, $email)) {
                    $_SESSION["error_messages"] .= "<p class='message_error' >Вы ввели неправельный email</p>";
                    header("HTTP/1.1 301 Moved Permanently");
                    header("Location: ".$address_site."/reg.php");
                    exit();
                }
                // --- Есть ли пользователь с таким E-mail ---
                $result_query = $db->query("SELECT `email` FROM `users` WHERE `email`='".$email."'");
                if ($result_query->rowCount() == 1) {
                    if (($row = $result_query->fetch(PDO::FETCH_ASSOC)) != false) {
                        $_SESSION["error_messages"] .= "<p class='message_error' >Пользователь с таким почтовым адресом уже зарегистрирован</p>";
                        header("HTTP/1.1 301 Moved Permanently");
                        header("Location: ".$address_site."/reg.php");
                    } else {
                        $_SESSION["error_messages"] .= "<p class='message_error' >Ошибка в запросе к БД</p>";
                        header("HTTP/1.1 301 Moved Permanently");
                        header("Location: ".$address_site."/reg.php");
                    }
                    $result_query = null;
                    exit();
                }
                $result_query = null;
            } else {
                $_SESSION["error_messages"] .= "<p class='message_error'>Укажите Ваш email</p>";
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: ".$address_site."/reg.php");
                exit();
            }
        } else {
            $_SESSION["error_messages"] .= "<p class='message_error'>Отсутствует поле для ввода Email</p>";
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/reg.php");
            exit();
        }

        // --- Введен ли пароль ---
        if (isset($_POST["password"])) {
            $password = trim($_POST["password"]);
            if (!empty($password)) {
                $password = htmlspecialchars($password, ENT_QUOTES);
                $password = md5($password."knaaru");
            } else {
                $_SESSION["error_messages"] .= "<p class='message_error'>Укажите Ваш пароль</p>";
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: ".$address_site."/reg.php");
                exit();
            }
        } else {
            $_SESSION["error_messages"] .= "<p class='message_error'>Отсутствует поле для ввода пароля</p>";
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/reg.php");
            exit();
        }

        // --- Введен ли повторный пароль ---
        if (isset($_POST["password2"])) {
            $password2 = trim($_POST["password2"]);
            if (!empty($password2)) {
                $password2 = htmlspecialchars($password2, ENT_QUOTES);
                $password2 = md5($password2."knaaru");
                if ($password != $password2) {
                    $_SESSION['error_messages'] .= '<div class="message_error">Введенные пароли не совпадают</div>';
                    header("HTTP/1.1 301 Moved Permanently");
                    header("Location: " . $address_site . "/reg.php");
                    exit();
                }
            } else {
                $_SESSION["error_messages"] .= "<div class='message_error'>Укажите Ваш пароль</div>";
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: " . $address_site . "/reg.php");
                exit();
            }
        } else {
            $_SESSION["error_messages"] .= "<div class='message_error'>Отсутствует поле для ввода пароля</div>";
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: " . $address_site . "/reg.php");
            exit();
        }

        // --- Регистрация ---
        $result_query_insert = $db->query("INSERT INTO `users` (email, password) VALUES ('".$email."', '".$password."')");
        if(!$result_query_insert){
            $_SESSION["error_messages"] .= "<p class='message_error' >Ошибка запроса на добавления пользователя в БД</p>";
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/reg.php");
            exit();
        } else {
            $_SESSION["success_messages"] = "<p class='success_message'>Регистрация прошла успешно! <br />Теперь Вы можете авторизоваться используя Ваш логин и пароль.</p>";
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/auth.php");
        }
        $result_query_insert = null;
        $db = null;
} else {
    exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=".$address_site."> главную страницу </a>.</p>");
}






