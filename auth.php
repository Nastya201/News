<?php
session_start();
require_once("cms/mysql_config.php");

if (isset($_GET['logout'])) {
    unset($_SESSION['login']);
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF'], true);
    exit;
}

if (isset($_POST['login'])) {

    $query = "select * from users where login='" . $_POST['login'] . "'";  // and password='".$_POST['password']."'";
    $res = $link->query($query);

    if ($row = $res->fetch()) {
        if ($row['login'] == "creator" && password_verify($_POST['password'], $row['password']))//$row['password'] == "12345")
            header('Location: cms/index.php', true);
        elseif (password_verify($_POST['password'], $row['password'])) {
            $_SESSION['login'] = $row['login'];
        }
        // else ...
    }
}