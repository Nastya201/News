<?php
require("auth.php");
require("header.php");
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
        $res = $link->query("select id, name, summary, article, picture_name, n_date from post order by n_date desc");

            while ($news = $res->fetch()) { ?>
                <div class="col-md-4">
                    <div style="white-space:pre-wrap"><h3><?php echo $news['name']; ?></h3></div>
                    <img class="featurette-image img-responsive center-block"
                         src="Images\<?php echo $news['picture_name']; ?>"
                         alt="Generic placeholder image" width=200px height=200px align="left">
                    <br clear="all"><br>

                    <p><?php echo $news['summary']; ?></p>

                    <p><a class="btn btn-default" href="news.php?id=<?php echo $news['id'] ?>" role="button">Read
                            it &raquo;</a></p>
                </div>
            <?php
            }
        ?>
    </div>
</div>