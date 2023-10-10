<?php
session_start();

$email="contact@cocohouse.com";
$password="admin"; 

/* $email= $_POST['email'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$titre=$_POST['titre'];
$adresse=$_POST['adresse'];
$tel=$_POST['tel'];
$social=$_POST['social'];
$passwords=$_POST['passwords']; */

$error = false;
$results = '';

require'connectDB.php';
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
$_SESSION['hashedPassword']=$hashedPassword;

function insertData($dbConn, $email, $hashedPassword){

    try{
        $sql = "INSERT INTO admin(email, password) VALUES (:email, :hashedPassword)";
        $stmt=$dbConn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':hashedPassword', $hashedPassword);

        $stmt->execute();
        echo "Données insérées avec succès.";  
    }catch (PDOException $e){
        echo "Erreur lors de l'insertion des données.";
        $e->getMessage();
    }

}


insertData($dbConn, $email, $hashedPassword);


/* function checkDataEmpty($dbConn, $email, $nom, $prenom, $titre, $adresse, $tel, $social, $hashedPassword){

    
    if(empty($email) || empty($nom) || empty($prenom) || empty($titre) || empty($adresse) || empty($tel) || empty($social) || empty($hashedPassword)){
        $error = true;
        echo "Aucun champs vide";
    }else{
        $error = false;
        
        //Exemple d'utilisation
       

        if($dbConn !==null){

            insertData($dbConn, $email, $nom, $prenom, $titre, $adresse, $tel, $social, $hashedPassword);
        }
    } 

}

function inscriptionvalide($dbConn, $email,  $nom, $prenom, $titre, $adresse, $tel, $social, $hashedPassword){
   try {
    $query = "SELECT email FROM user WHERE email = :email";
    $statement = $dbConn->prepare($query);
    $statement->bindValue(':email', $email, PDO::PARAM_STR);
    $statement->execute();
    
    // Fetch the results
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    if(sizeof($results)!==0){
       echo "User already registred!";
    }else{
        checkDataEmpty($dbConn, $email, $nom, $prenom, $titre, $adresse, $tel, $social, $hashedPassword);
    }
    
   
} catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}
}

inscriptionvalide($dbConn, $email,  $nom, $prenom, $titre, $adresse, $tel, $social, $hashedPassword); */


?>