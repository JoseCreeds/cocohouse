<?php
session_start();

if(isset($_POST['idService'])){
    $idService = $_POST['idService'];

    require'connectDB.php';
    $delete = "DELETE FROM service WHERE idService = :idService ";
    $statement = $dbConn->prepare($delete);
    $statement->bindValue(":idService", $idService, PDO::PARAM_STR);
    $statement->execute();

    echo"reussi";
}
?>