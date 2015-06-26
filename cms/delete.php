<?php
    require_once "header.php";
    require_once "mysql_config.php";

    $query = "delete from post where id = ".$_GET['id'];

    $link->query($query);

?>


<div id="main">
    <div class="full_w">
        <div class="n_error"><p>Страница удалена!</p></div>
    </div>
</div>