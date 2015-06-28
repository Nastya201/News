<?php
    require_once "header.php";
    require_once "mysql_config.php";
    require_once("../classes/post.php");

    $post = new post($link);
    $post->deleteArticle($_GET['id']);

?>


<div id="main">
    <div class="full_w">
        <div class="n_error"><p>Страница удалена!</p></div>
    </div>
</div>