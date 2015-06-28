<?php
    require  "header.php";
    require_once "mysql_config.php";
    require_once("../classes/post.php");

    $post = new Post($link);
?>

    <div id = "main">
        <div class="full_w">
                <div class="h_title">Manage pages - table</div>
                <h3>Список новостей</h3>
                <div class="entry">
                            <div class="sep"></div>
                </div>
            <table>
                <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col" style="width: 140px;">Название</th>
                <th scope="col">Кратко</th>
                <th scope="col" style="width: 70px;">Дата</th>
                <th scope="col" style="width: 90px;">Имя картинки</th>
                <th scope="col" style="width: 43px;">Modify</th>
                </tr>
                </thead>
                <tbody>

                <?php

                $allNews = $post->getAllList();

                foreach($allNews as $news) {
                        echo "<tr>
                                <td class=\"align-center\">".$news['id']."</td>
                                <td>".$news['name']."</td>
                                <td>".$news['summary']."</td>
                                <td>".$news['n_date']."</td>
                                <td>".$news['picture_name']."</td>
                                <td>
                                    <a href = \"edit_page.php?id=".$news['id']."\" class=\"table-icon edit\" title=\"Edit\"></a>
                                    <a href = \"delete.php?id=".$news['id']."\" class=\"table-icon delete\" title=\"Delete\"></a>
                                </td>
                              </tr>";
                    }
                ?>

                </tbody>
                </table>
            </table>
        </div>
    </div>