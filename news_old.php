<?php
require_once("auth.php");
require("header.php");

/*$res = mysql_query("select * from image where id = " . htmlspecialchars($_GET["id"]));
if (!$res) die ("Select Error");
$news = mysql_fetch_array($res);
mysql_query("update image set view = view+1 where id = ".$_GET["id"]);
*/

$sql = "select * from image where id = " . htmlspecialchars($_GET["id"]);
$sql_2 = "update image set view = view+1 where id = ".$_GET["id"];
$exec = $link->query($sql_2);
$news = $link->query($sql)->fetch();

?>

<br xmlns="http://www.w3.org/1999/html"><br><br><br>
<div class="container">
    <div class="blog-header">

        <h2><?php echo $news['name'] ?></h2>

        <p style="font-size: 14px"><?php echo $news['n_date'] ?></p>
        <br>
        <img src="Images/<?php echo $news['picture_name'] ?>" align="top" width=66% height=66%>
    </div>
    <br><br><br>

    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <p align="justify"><?php echo $news['description'] ?></p>
            </div>
        </div>
    </div>
    <br>

    <p style="color: firebrick;">Number of views <span class="badge"><?php echo $news['view'] ?></span></p><br><br>
    <h4> Latest news: </h4><br>

    <div class="row">
        <div class="col-sm-8 blog-main">

            <?php
            $sql_count = "select picture_name, name, id from image where id != " . $news['id'] . " order by id desc LIMIT 3";
            $stmt = $link->query($sql_count);

            while ($last_n = $stmt->fetch()) {
                ?>
                <a href="news.php?id=<?php echo $last_n['id'] ?>">
                    <div class="col-sm-4"><img src="Images/<?php echo $last_n['picture_name'] ?>" align="top" width=100%
                                               height=100%>

                        <p><strong><?php echo $last_n['name'] ?></strong></p>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>
<br><br>