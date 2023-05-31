<?php
require "../config/connect.php";
session_start();

$id = $_POST['id'];

try {

    $dbcon->beginTransaction();

    $updateQuery = "UPDATE $database_name.users SET status = 'inactive' WHERE id = ?";
    $stmt= $dbcon->prepare($updateQuery);
    $stmt->execute([$id]);

    $dbcon->commit();

    echo "desactivado com sucesso";
} catch (PDOException $ex) {
    //Something went wrong rollback!
    $dbcon->rollBack();
    //echo $ex->getMessage();

    echo "Ocorreu um erro.";

} 

?>