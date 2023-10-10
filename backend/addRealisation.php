<?php

$idCat = $_POST['idCat'];
$description = $_POST['description'];
$image = $_FILES['images']['name'];


require'connectDB.php';

    function addRealisation($dbConn, $idCat, $description, $image){

        

        try {

            
            if(!empty($idCat) && !empty($description) && isset($image)){

                $query ="SELECT images FROM service WHERE images=:images AND idCat=:idCat";
                $statement= $dbConn->prepare($query);
                $statement->bindValue(":idCat", $idCat, PDO::PARAM_STR);
                $statement->bindValue(":images", $image);
                $statement->execute();
        
                $alreadyposted = $statement->fetchAll(PDO::PARAM_STR);
        
                if (sizeof($alreadyposted)!==0) {
                    echo"Une photo du même nom existe déjà dans la galerie !";
                } else {
                    if($dbConn!==null){
                        $sql ="INSERT INTO service(idCat, description, images) VALUES (:idCat, :description, :images)";
                        $stmt= $dbConn->prepare($sql);
                        $stmt->bindParam(":idCat", $idCat);
                        $stmt->bindParam(":description", $description);
                        $stmt->bindParam(":images", $image);
        
                        $stmt->execute();
                       /*  header('Location : ../adminDashbord.php'); */
                        echo"<script>
                                alert('vous avez ajouté une nouvelle réalisation')
                                window.location.href='../adminDashbord.php'
                            </script>";
                        
                    }
                }

            }else{
                echo"<script>
                window.location.href ='../adminDashbord.php'
                </script>";
            }
            
        } catch (PDOException $e) {
            echo"Insertion failed" .$e->getMessage();
            
        }
    }

    require_once 'upload.php';
    

    addRealisation($dbConn, $idCat, $description, $image);

?>