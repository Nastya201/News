<?php

class post
{
    const TABLE_NAME = 'post';
    private $link;
    private $id;
    private $name;
    private $summary;
    private $article;
    private $date;
    private $image;
    private $view;
    private $lastList = array();
    private $allList = array();
    private $uploaddir = '..\Images/';

    public function __construct($link, $id = null, $name = '', $summary = '', $article = '', $date = null, $image = '', $view = '')
    {
        $this->link = $link;
        $this->id = $id;
        $this->name = $name;
        $this->summary = $summary;
        $this->article = $article;
        $this->date = $date;
        $this->image = $image;
        $this->view = $view;
    }

    public function getById()
    {
        $sql = "select * from " . self::TABLE_NAME . " where id = " . htmlspecialchars($_GET["id"]);

        $news = $this->link->query($sql)->fetch();

        $this->id = $news['id'];
        $this->name = $news['name'];
        $this->summary = $news['summary'];
        $this->article = $news['article'];
        $this->date = $news['n_date'];
        $this->image = $news['picture_name'];
        $this->view = $news['view'];

        return $this;
    }

    public function getLastList()
    {
        return $this->lastList();
    }

    private function lastList($numRows = 3)
    {

        $sql = "select * from " . self::TABLE_NAME . " where id != " . htmlspecialchars($_GET["id"]) . " order by id desc LIMIT " . $numRows;
        $lastNews = $this->link->query($sql);

        while ($row = $lastNews->fetch()) {
            $this->lastList[] = $row;
        }

        return $this->lastList;
    }

    public function getAllList()
    {
        return $this->allList();
    }

    private function allList ()
    {

        $sql = "select * from " . self::TABLE_NAME . " order by id desc";
        $lastNews = $this->link->query($sql);

        while ($row = $lastNews->fetch()) {
            $this->allList[] = $row;
        }

        return $this->allList;
    }

    public  function updateArticle () {

        if (isset($_GET['id']))
            $id = $_GET['id'];
        else $id = $_POST['id'];

        $sql_2 = "update " . self::TABLE_NAME . " set name='".$_POST['name']."', summary ='".$_POST['summary']."', article ='".$_POST['article']."' where id = ".$id;

        $this->link->query($sql_2)->fetch();
    }

    public function updateView()
    {
        $sql_1 = "update " . self::TABLE_NAME . " set view = view+1 where id = " . htmlspecialchars($_GET["id"]);
        $this->link->query($sql_1)->fetch();
    }

    public  function deleteArticle ($id) {
        $sql = "delete from post where id = ".$id;
        $this->link->query($sql);
    }

    public function addArticle() {
        $query = "INSERT INTO post (name, summary, article, n_date, picture_name)
				 values ('" . $_POST[name] . "','" . $_POST[summary] . "','" . $_POST[article] . "','" . date("Y-m-d") . "','" . $_FILES['userfile']['name'] . "')";
        $this->link->query($query);
    }

    public  function  uploadImage() {

        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $this->uploaddir .
            $_FILES['userfile']['name'])) {
            print "File is valid, and was successfully uploaded.";
        } else {
            print "There some errors!";
        }
        echo $_FILES['userfile']['name'];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function getArticle()
    {
        return $this->article;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getView()
    {
        return $this->view;
    }

    public function getImageName()
    {
        return $this->image;
    }

}

