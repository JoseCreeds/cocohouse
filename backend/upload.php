<?php

if (isset($_POST['submit'])) {
    $targetDir = "../assets/uploads/"; // The folder where the images will be stored.
    $targetFile = $targetDir . basename($_FILES["images"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the image file is an actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["images"]["tmp_name"]);
        if ($check !== false) {
           // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "<script> alert('Le fichier que vous essayer de télécharger n'est pas une image. Veuillez sélectionner une image!')
                window.location.href ='../adminDashbord.php'
                </script>";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "<script> alert('Désolé, une image du même non existe déjà dans la catégorie sélectionneé!')
        window.location.href ='../adminDashbord.php'
        </script>"; 
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["images"]["size"] > 500000) {
        echo"<script> alert('Désolé, le fichier est trop large!')
        window.location.href ='../adminDashbord.php'
        </script>"; 
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo"<script> alert('Désolé, seuls les fichiers JPG, JPEG, PNG et GIF sont acceptés!')
        window.location.href ='../adminDashbord.php'
        </script>";  
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo"<script>
        window.location.href ='../adminDashbord.php'
        </script>"; 
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["images"]["tmp_name"], $targetFile)) {
            //echo "The file " . basename($_FILES["images"]["name"]) . " has been uploaded.";
        } else {
            echo"<script> alert('Une erreur est survenu lors du téléchagement du fichier.')
            window.location.href ='../adminDashbord.php'
            </script>";  
        }
    }
}
?>