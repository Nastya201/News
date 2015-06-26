<?php
require("auth.php");
require("header.php");
require_once("classes/post.php");

$post = new Post($link);
?>

<div class="jumbotron">
    <div class="container">
        <h3>Latest News</h3>
        <img src="http://img.go2load.com/fun/01/FunnyLogotypes_191108/FunnyLogotypes_Go2LoadCOM_pic001.jpg" width=100px height=100px>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php
        $allNews = $post->getAllList();

        foreach($allNews as $value) { ?>
                <div class="col-md-4">
                    <div style="white-space:pre-wrap"><h3><?php echo $value['name']; ?></h3></div>
                    <img class="featurette-image img-responsive center-block"
                         src="Images\<?php echo $value['picture_name']; ?>"
                         alt="Generic placeholder image" width=200px height=200px align="left">
                    <br clear="all"><br>

                    <p><?php echo $value['summary']; ?></p>

                    <p><a class="btn btn-default" href="news.php?id=<?php echo $value['id'] ?>" role="button">Read
                            it &raquo;</a></p>
                </div>
            <?php
            }
        ?>
    </div>
</div>