<?php include_once "db.php";
$table = $_POST['table'];
$DB = ${ucfirst($table)};
unset($_POST['table']);
foreach ($_POST['id'] as $key => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $DB->del($id);
    } else {
        $row = $DB->find($id);
        if (isset($row['text'])) {
            $row['text'] = $_POST['text'][$key];
        }
        switch ($table) {
            case 'title':
                $row['sh']=(isset($_POST['sh'])&&$_POST['sh']==$id)?1:0;
                break;
            case 'admin':
                $row['acc']=$_POST['acc'][$key];
                $row['pw']=$_POST['pw'][$key];
                break;
            default:
                $row['sh']=(isset($_POST['sh'])&&in_array($id,$_POST['sh']))?1:0;
            break;
        }
        $DB->save($row);
    }
}
to("../back.php?do=$table");
