<?php
session_start();

$email= $_POST['email'];
$password = $_POST['password'];

$error = false;

require'connectDB.php';

function connectNow($dbConn, $email, $password){
    if(!isset($_POST['submit'])){
        if(empty($email) || empty($password)){
            
            echo 'Veuillez renseigner toutes les données
            <h2><a href="../connexion.php">Retour</a> </h2>' ;
        }else{
                
            try{   
                if($dbConn !== null){
                    $query = "SELECT email, password FROM admin WHERE email = :email";
                    $statement = $dbConn->prepare($query);
                    $statement->bindValue(':email', $email, PDO::PARAM_STR);
                    $statement->execute();
            
                    //Fetch the result
                    $result = $statement->fetch(PDO::FETCH_ASSOC);
            
                    /*foreach($result as $takeEmail){
                        $_SESSION['email'] = $takeEmail['email'];
                        
                    } */
            
                    if($result){
            
                        if (password_verify($password, $result['password'])) {
                            $_SESSION['email']=$result['email'];
                            $_SESSION['connected']=true;
                            /* echo'Connected !'; */
                            header('Location: ../adminDashbord.php');
                        } else {
                            $_SESSION['connected']=false;
            
                            echo 'Nom d\'utilisateur ou mot de passe incorrect
                            <h2><a href="../connexion.php">Retour</a> </h2>' ;
                        }
                    
                    }else{
                        $_SESSION['connected']=false;
            
                        echo "Email ou mot de passe incorrect";
                    }
                }
            }catch (PDOException $e) {
                echo "Query failed: " . $e->getMessage();
            }
        }
    }
       
            
}

connectNow($dbConn, $email, $password);


/* $email="new@gmail.com";
$passwords="admin";  */



?>