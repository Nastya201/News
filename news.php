<?php
require_once("auth.php");
require("header.php");
require_once("classes/post.php");

$post = new Post($link);

$post->updateView();
$post->getById();

?>

<br xmlns="http://www.w3.org/1999/html"><br><br><br>
<div class="container">
    <div class="blog-header">

        <h2><?php echo $post->getName() ?></h2>

        <p style="font-size: 14px"><?php echo $post->getDate() ?></p>
        <br>
        <img src="Images/<?php echo $post->getImageName() ?>" align="top" width=66% height=66%>
    </div>
    <br><br><br>

    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <p align="justify"><?php echo $post->getArticle() ?></p>
            </div>
        </div>
    </div>
    <br>

    <p style="color: firebrick;">Number of views <span class="badge"><?php echo $post->getView() ?></span></p><br><br>
    <h4> Latest news: </h4><br>

    <div class="row">
        <div class="col-sm-8 blog-main">

            <?php
            $lastNews = $post->getLastList();

            foreach ($lastNews as $value)
             {
                ?>
                <a href="news.php?id=<?php echo $value['id'] ?>">
                    <div class="col-sm-4"><img src="Images/<?php echo $value['picture_name'] ?>" align="top" width=100%
                                               height=100%>

                        <p><strong><?php echo $value['name'] ?></strong></p>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>
<br><br>