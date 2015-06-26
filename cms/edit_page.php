<?php
    require_once "header.php";
    require_once "mysql_config.php";

    if (isset($_GET['id']))
        $id = $_GET['id'];
    else $id = $_POST['id'];

    if(isset($_POST['id'])) {

        $query = "update post set name='".$_POST['name']."', summary ='".$_POST['summary']."', article ='".$_POST['article']."' where id = ".$id;
        $link->query($query);

    echo "<div id=\"main\">
            <div class=\"full_w\">
              <div class=\"n_ok\"><p>Данные успешно обновлены!<strong> :)</strong></p></div>
            </div>
          </div>";
    }

    else {

        $res = $link->query("select * from post where id =" . $id);

        $cdate = date("Y-m-d");

        while ($row = $res->fetch()) {
            ?>
            <div id="main">
                <div class="full_w">
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" name="edit_form">

                        <input type="hidden" name="id" value= <?php echo $row['id'] ?>>

                        <div class="element">
                            <label for="name">
                                "Название статьи"
                            </label>
                            <textarea name="name" class="textarea" placeholder="Название"
                                      rows="2"><?php echo $row['name'] ?></textarea><br><br>
                            <label>
                                "Коротко"
                            </label>
                            <textarea name="summary" class="textarea" placeholder="Коротко"
                                      rows="4"><?php echo $row['summary'] ?></textarea><br><br>
                            <label>
                                "Текст новости"
                            </label>
                            <textarea id="tiny1" name="article" class="textarea" placeholder="Текст новости"
                                      rows="30"><?php echo $row['article'] ?></textarea><br><br><br>

                            <button type="submit" class="add" name="submit_edit">Save page</button>

                        </div>

                    </form>
                </div>
            </div>

        <?php
        }
    }
    //mysql_close();