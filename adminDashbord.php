<?php
session_start();

    if(isset($_SESSION['connected']) === null){
        header('Location : connexion.php');
        exit();
    }
    if(isset($_SESSION['connected']) && $_SESSION['connected']===false){
        header('Location : connexion.php');
        exit();
    }

    require'backend/router.php';

    // Obtenez l'URL cachée depuis la requête (par exemple, $_GET['url'])
    $url_cache = 'cocohouse/realisation';

    // Obtenir le chemin réel associé à l'URL cachée
    $chemin_reel = route($url_cache);
?>  

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="webthemez">
        <title>Natural Fashion and Beauty HTML Website Template</title>
        <!-- Mobile Specific Metas
    ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="style1.css">
        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="css/font-awesome.min.css"> 
        <link rel="stylesheet" href="css/animate.css">  
        <link href="css/magnific-popup.css" rel="stylesheet"> 
        <link rel="stylesheet" href="css/style.css"> 
        <link href="css/gallery-1.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    
    </head>

   <body data-spy="scroll" data-target=".main-nav">
	    <!-- section menu start -->
	    <!-- section menu start -->

        <section class="section-menu">
            <div class="navbar navbar-default main-nav" role="navigation" >
                <div class="container" >
                    <div class="navbar-header">
                        <button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    

                        <a href="index.php" class="navbar-brand">Coco House</a>
                    </div>  <!-- navbar-header end -->
                    <!-- main nav  -->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-0" role="navigation">
                        <ul class="nav navbar-nav navbar-right">
<!--                             <li ><a href="index.php" style="margin-bottom: 10px; font-size:1.2em">Accueil </a></li>
                            <li class="collapse navbar-collapse navigation" style="display: none;"><a href="#section-overview">Services </a></li> 
                            <li ><a href="apropos.php" style="margin-bottom: 10px; font-size:1.2em">A propos </a></li> 
                            <li class="collapse navbar-collapse navigation" style="display: none;"><a href="#gallery-1">Galerie</a></li> -->
                            <li><a href="adminDashbord.php?url=cocohouse/realisation => cocohouse/realize.php..." style="margin-bottom: 10px; font-size:1.2em">Gérer réalisations</a></li>
                            <!-- <li style="float: right;"><a href="connexion.php">Singup</a></li> -->
                            <li><a href="./backend/logout.php" style="margin-bottom: 10px; font-size:1.2em">Déconnexion</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </div>
        </section>
            <!-- section menu end -->

            <!-- section menu end -->

		 
        <div class="contain">

            <form action="backend/addRealisation.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend style="text-align: center;" ><h4 style="font-size:1.2em;">Ajouter une réalisation à la galerie</h4></legend>

                    <label for="categorie">Catégorie</label>

                    <?php 
                        require'backend/connectDB.php';

                    ?>
                    <select name="idCat" id="idCat">
                        <?php 


                            $query ="SELECT * FROM categorie /* WHERE idCat in (SELECT idCat FROM categorie) */" ;
                            $statement=$dbConn->prepare($query);
                            $statement->execute();

                            $results = $statement->fetchAll(PDO::PARAM_STR);

                            foreach($results as $result){  
                        
                            echo'<option value="' . $result['idCat'] .'"  >' . $result['nomCat'] . '</option> ';

                            };
                        ?>
                        
                    </select>
                    <div>
                    <label for="Description" style="margin-top:30px;">Description</label>
                    <input type="text" name="description" id="description">
                    </div>
                    <div>
                    <label for="image">Image</label>
                    <input type="file" name="images" id="images" required>
                    <!-- <input type="submit" value="Upload Image" name="submit"> -->
                    </div>

                    <input type="submit"  name="submit" value="Poster">

                </fieldset>
            </form>
        </div>

        <!-- ------------------------------------Tableau--------------------------------------- -->


        <div class="table-container ">
            <h2 class="text-center" style="font-weight: bold; opacity:1; margin:10px auto; min-width:200px; ">Galerie</h2>
            <div class="table-responsive mx-auto" style="margin-bottom:0 auto 100px auto;">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="text-align:left;">Image</th>
                            <th style="text-align:center;">Nom</th>
                            <th style="text-align:center;">Description</th>
                            <th style="text-align:center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $showPost = "SELECT idService, nomCat, images, description FROM service, categorie WHERE service.idCat=categorie.idCat ORDER BY idService";
                        $statement = $dbConn->prepare($showPost);
                        $statement->execute();

                        $galeries = $statement->fetchAll(PDO::FETCH_ASSOC);

                        foreach($galeries as $galerie){ ?>
                        <tr>
                            <td><img src="assets/uploads/<?= $galerie['images'] ?>" style="height:40px; width:40px; " alt="Image 1"></td>
                            <td style="text-align:center;"><?= $galerie['nomCat'] ?></td>
                            <td style="white-space:nowrap; overflow:hidden; text-overflow:ellipsis; max-width:10px; text-align:center;"><?= $galerie['description'] ?></td>
                            <td style="text-align:center;"><button class="btn btn-sm btn-danger" onclick="supprimerLigne(this, <?= $galerie['idService'] ?>)">Supprimer</button></td>
                        </tr>

                        <?php } ?>
                        

                    </tbody>
                </table>
            </div>
        </div>


            <!-- -------------------------------------Tableau--------------------------------------- -->
            
        <!-- section footer start -->
        <?php require'footer.php'; ?>

        <!-- section footer end -->



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- initialize jQuery Library -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <!-- Bootstrap jQuery -->
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.fancybox-media.js"></script> 
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>

        <!-- Wow Animation -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <!-- singlepagenav -->
        <script src="js/jquery.singlePageNav.js"></script>
        <!-- Eeasing -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <!-- Sticky Menu -->
        <script src="js/jquery.sticky.js"></script>
        <script src="contact/jqBootstrapValidation.js"></script>
        <script src="contact/contact_me.js"></script>
        <script type="text/javascript" src="js/custom.js"></script> 
        <script>
            $(".main-nav").sticky();
        </script>

        <script> 
            new WOW().init();

        </script>

        <script>
            function supprimerLigne(button, id) {
                var row = button.parentNode.parentNode;
                row.parentNode.removeChild(row);

                // Appel à PHP pour supprimer de la base de données
                $.ajax({
                    type: 'POST',
                    url: 'backend/deleteRealisation.php',  // Changez le chemin vers votre fichier PHP
                    data: { idService: id },  // Envoyez l'ID à PHP
                    success: function(response) {
                        console.log(response);  // Vous pouvez afficher la réponse ou effectuer d'autres actions ici
                    }
                });
            }
        </script>
    </body>
</html>