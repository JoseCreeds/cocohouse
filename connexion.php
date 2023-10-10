<?php 

    require'backend/router.php';

    // Obtenez l'URL cachée depuis la requête (par exemple, $_GET['url'])
    $url_cache = 'cocohouse/login';

    // Obtenir le chemin réel associé à l'URL cachée
    $chemin_reel = route($url_cache);

    // Inclure le fichier réel correspondant
    /* include($chemin_reel); */
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
	<?php require'header.php'; ?>

	<!-- section menu end -->


<!-- section profile start -->
      <div class="container-login" >
    <form action="backend/connexion.php" method="post" class="connexion">
        <fieldset>
            <h1>Connexion</h1>

            <label for="email">Nom d'utilisateur</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>

            <p>Avez-vous déjà un compte?   <a href="connexion.php" style="color:#c80a48">Créer un compte</a></p>

            <input type="submit" value="Se connecter">
        </fieldset>
    </form>
      </div>

    


<!-- section contact end -->

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
</body>
</html>