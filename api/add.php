<?php
include_once "db.php";
$table = $_POST['table'];
$DB = ${ucfirst($table)};
unset($_POST['table']);
if (isset($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
}
if (isset($_POST['pw2'])) {
    unset($_POST['pw2']);
}
if ($table!='admin') {
    $_POST['sh']=($table=='title')?0:1;
}
$DB->save($_POST);
to("../back.php?do=$table");