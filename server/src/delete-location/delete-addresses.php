<?php
require "../../config/connect.php";

$id = $_POST['id'];
$table = $_POST['table'];

try {

    $dbcon->beginTransaction();

    $sql = "DELETE FROM $database_name.$table WHERE entity_id = ?";
    $stmt= $dbcon->prepare($sql);
    $stmt->execute([$id]);

    $sql = "DELETE FROM $database_name.administrative_entities WHERE entity_id = ?";
    $stmt= $dbcon->prepare($sql);
    $stmt->execute([$id]);

    $sql = "DELETE FROM $database_name.complementary_entities WHERE entity_id = ?";
    $stmt= $dbcon->prepare($sql);
    $stmt->execute([$id]);

    $sql = "DELETE FROM $database_name.espacial_entities WHERE entity_id = ?";
    $stmt= $dbcon->prepare($sql);
    $stmt->execute([$id]);

    $sql = "DELETE FROM $database_name.heritage_entities WHERE entity_id = ?";
    $stmt= $dbcon->prepare($sql);
    $stmt->execute([$id]);

    $sql = "DELETE FROM $database_name.postal_entities WHERE entity_id = ?";
    $stmt= $dbcon->prepare($sql);
    $stmt->execute([$id]);

    $sql = "DELETE FROM $database_name.registration_info WHERE entity_id = ?";
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