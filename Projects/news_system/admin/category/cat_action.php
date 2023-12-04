<?php include "../db_connect.php" ?>
<?php
if (isset($_POST['cat_add'])) {
    $name = $_POST['cat_name'];

    $qry = "INSERT into category VALUES('','" . $name . "')";
    $con->query($qry);
    header('Location: index.php');
}



if (isset($_POST['cat_edit'])) {

    $cat_name = $_POST['cat_name'];
    $cat_id = $_POST['cat_id'];
    $qry = "update category set name='" . $cat_name . "' where id='" . $cat_id . "'";
    $con->query($qry);
    header('Location: index.php');
}


if (isset($_POST['cat_delete'])) {

    $id = $_POST['cat_id'];
    $qry = "delete from category where id='" . $id . "'";
    $con->query($qry);
    header('Location: index.php');
}

?>
<?php include "../db_close.php" ?>