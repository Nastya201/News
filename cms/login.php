<?php

    if (!isset($_POST['doGo'])) { ?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
    <div id="content">
        <div id="main">
        <div class="full_w">
            <form role="form" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
                <label for="login">Username:</label>
                <input id="login" name="login" class="text">
                <label for="pass">Password:</label>
                <input id="pass" name="password" type="password" class="text">
                <div class="sep"></div>
                <button type="submit" class="ok" name="doGo">Login</button>
            </form>
        </div>
</body>

    <?php
    }
    else {
        if ($_POST['login']=="creator" && $_POST['password']=="12345")
            header('Location: index.php', true);
        else {echo "Access denied!";}
    }