<?php 

    require'backend/router.php';

    // Obtenez l'URL cachée depuis la requête (par exemple, $_GET['url'])
    $url_cache = 'cocohouse/apropos';

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

<section id="section-profile" class="section-padding">
		<div class="profile-bg visible-md visible-lg"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-12 pull-right">
					<div class="profile-desc wow fadeInRight">
<br/>
              <p>
              <h4 class="section-title uppercase">À Propos de COCO HOUSE</h2><br/>

              Bienvenue chez COCO HOUSE, votre oasis de beauté et de détente. En tant qu'entreprise privée dédiée à votre bien-être, nous sommes fiers de vous offrir une gamme complète de services de beauté et de soins pour vous aider à vous sentir revitalisé(e) et confiant(e).
              </p>
 <br/>
              <p class="text-grey animated bounceInUp" style="opacity: 10;">
              <h4 class="section-title uppercase">Notre Histoire</h2><br/>

              COCO HOUSE a été fondée avec une vision claire : créer un espace où le luxe, le professionnalisme et la détente se rencontrent. Depuis nos débuts, nous nous engageons à offrir des services de qualité exceptionnelle qui rehaussent votre beauté naturelle.
              </p>
<br/>
              <p class="text-grey animated bounceInUp" style="opacity: 1;">
              <h4 class="section-title uppercase">Nos Services</h4><br/>

              Nous proposons une variété de services pour répondre à tous vos besoins de beauté et de bien-être. De la pédicure à la manucure en passant par l'onglerie, le maquillage, la coiffure et les tresses, nos experts qualifiés sont là pour vous chouchouter de la tête aux pieds.<br/><br/>

              <h4 class="section-title uppercase">Notre Engagement envers l'Excellence</h4><br/>

              Chez COCO HOUSE, notre priorité est de vous offrir une expérience inégalée. Nous utilisons uniquement des produits de haute qualité et des techniques de pointe pour garantir des résultats exceptionnels et durables. Chaque service est réalisé avec une attention méticuleuse aux détails et un souci constant de votre satisfaction.<br/><br/>

              <h4 class="section-title uppercase">L'Expérience COCO HOUSE</h4><br/>

              En franchissant les portes de COCO HOUSE, vous entrerez dans un havre de tranquillité et de beauté. Notre espace élégant et apaisant a été conçu pour vous offrir une expérience relaxante, loin du tumulte de la vie quotidienne. Notre équipe attentionnée est dévouée à vous offrir un moment d'évasion et de régénération.<br/><br/>

              <h4 class="section-title uppercase">Nous Contacter</h4><br/>

              Nous serions ravis de vous accueillir chez COCO HOUSE et de vous aider à découvrir les merveilleux soins que nous proposons. Pour en savoir plus sur nos services ou pour prendre rendez-vous, n'hésitez pas à nous contacter. Notre équipe est là pour répondre à toutes vos questions et vous guider vers une expérience de beauté exceptionnelle.<br/>

              
            </p>
					  
					</div>
					
					
				</div>
			</div> <!-- row end -->
		</div><!-- container end -->
	</section>
	<!-- section profile end -->

    
	<!-- section contact start -->
	<?php require'contact.php'; ?>

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