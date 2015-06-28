<?php
    require_once "header.php";
    require_once "mysql_config.php";
    require_once("../classes/post.php");

    $post = new post($link);

    if(isset($_POST['name'])) {

        $post->addArticle();
        $post->uploadImage();

       ?> <div id="main">
          <div class="full_w">
          <div class="n_ok"><p>Данные успешно сохранены! :)</p></div>
          </div></div>
       <?php


    }

    else { ?>

<div id="main">
    <div class="full_w">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" name="edit_form" enctype="multipart/form-data">

            <div class="element">
                <label for="name">
                    "Название статьи"
                </label>
                <textarea name="name" class="textarea" placeholder="Название" rows="2"></textarea><br><br>
                <label>
                    "Коротко"
                </label>
                <textarea name="summary" class="textarea" placeholder="Коротко" rows="4"></textarea><br><br>
                <label>
                    "Текст новости"
                </label>
                <textarea id="tiny1" name="article" class="textarea" placeholder="Текст новости" rows="30"></textarea><br><br><br>

                <button type="submit" class="add" name="submit_edit">Save page</button>
                Image: <input name="userfile" type="file" />
            </div>
        </form>
    </div>
</div>

<?php
    }