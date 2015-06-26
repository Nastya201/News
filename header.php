<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="Images/irfanview.ico">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <title>
        News
    </title>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Main Page</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                <?php if (!isset($_SESSION['login'])) { ?>
                <form class="navbar-form navbar-right" method="post" action="index.php">
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-control" style="height:27px" name="login">
                        <input type="password" placeholder="Password" class="form-control" style="height:27px"
                               name="password">
                    </div>
                    <button type="submit" class="btn btn-warning">Sign in</button>
<!--                    <button type="submit" class="btn btn-info" name="reg">Registration</button>  -->
                </form>

                <?php } else { ?>
                <p class="navbar-text navbar-right"><a href="index.php?logout=1" class="navbar-link"
                                                       style="color: rgb(194,56,60)">logout</a>
                </p>
                <p class="navbar-text navbar-right" style="color: rgb(74,138,178)">Signed in as
                    <a href="#" class="navbar-link"
                       style="color: rgb(74,138,178);"><strong><?php echo $_SESSION['login'] ?></strong></a></p>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>

</body>
</html>