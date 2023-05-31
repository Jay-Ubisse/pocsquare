<?php
require "../../config/connect.php";

$id = $_POST['id'];
$table = $_POST['table'];

try {

    $dbcon->beginTransaction();

    $sql = "DELETE FROM $database_name.$table WHERE id = ?";
    $stmt= $dbcon->prepare($sql);
    $stmt->execute([$id]);

    $dbcon->commit();

    echo true;

} catch (PDOException $ex) {
    //Something went wrong rollback!
    $dbcon->rollBack();
    $ex->getMessage();

    echo false;

} 

?>