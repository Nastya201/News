<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />

    <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="../tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea#tiny1",
            theme: "modern"
        });
    </script>

</head>
<body>

<div class="wrap">
    <div id="header">
        <div id="top">
            <div class="left">
                <p>Welcome, <strong><?=$_POST['login']?></strong> [ <a href="">logout</a> ]</p>
            </div>

        </div>

        <div id="nav">
            <ul>
                <li class="upp"><a href="../index.php">Main page</a>
                </li>

            </ul>
        </div>
    </div>

    <div id="content">
        <div id="sidebar">
            <div class="box">
                <div class="h_title">&#8250; Main control</div>
                <ul id="home">
                    <li class="b1"><a class="icon view_page" href="index.php">All news</a></li>
                    <li class="b1"><a class="icon add_page" href="add.php">Add new page</a></li>
                </ul>
            </div>
        </div>


</body>
</html>