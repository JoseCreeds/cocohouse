<?php 

    require'backend/router.php';

    // Obtenez l'URL cachée depuis la requête (par exemple, $_GET['url'])
    $url_cache = 'cocohouse/index';

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
	<style>
		body{
			overflow-x: hidden;
		}
	</style>
  </head>
   <body data-spy="scroll" data-target=".main-nav">


	<!-- section menu start -->
	<?php require'header.php'; ?>

	<!-- section menu end -->


 <section id="section-overview" class="section-padding">
 	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="heading-title">Welcome</h2>
				</div>
				<div class="col-md-8 col-sm-8 wow fadeInLeft">
					<div class="skill-desc">
						<p>Bienvenue chez COCO HOUSE, votre destination de beauté ultime pour une expérience de soin personnalisée et luxueuse. 
						<br>
						<br>
						Nous proposons une variété de services pour répondre à tous vos besoins de beauté et de bien-être.
						 
					</div>
				</div>

				<div class="col-md-4 col-sm-4 wow fadeInRight" >
		                <img src="images/accroche.jpg" alt=""/>
				</div>
			</div> 
<br/><br/>		

			<div class="row"> 
			<div class="col-md-12">
					<h2 class="heading-title">Nos Services</h2>
				</div>
						<div class="service-wrapper">
							<div class="service-inner wow fadeInRight" data-wow-delay=".2s">
								<i class="fa fa-user"></i>
								<div class="service-box">
									<h3>Pédicure</h3>
									<p>La pédicure est un soin délicat des pieds qui combine nettoyage, exfoliation et soin des ongles. Elle apaise, adoucit et embellit la peau tout en procurant une sensation de bien-être relaxante.</p>
								</div>
							</div> <!-- service -inner  -->
							<div class="service-inner wow fadeInRight" data-wow-delay=".5s">
								<i class="fa fa-heart"></i>
								<div class="service-box">
									<h3>Manucure</h3>
									<p>La manucure, soin complet des mains, inclut coupe, limage, cuticules et vernis. Pour des mains élégantes et soignées, ajoutant une touche subtile d'élégance à votre style.</p>
								</div>
							</div>  <!-- service -inner  -->
							<div class="service-inner wow fadeInRight" data-wow-delay=".8s">
								<i class="fa fa-tint"></i>
								<div class="service-box">
									<h3>Onglerie</h3>
									<p>L'onglerie vous offre une palette de créativité pour des ongles éclatants. Exprimez-vous à travers des motifs uniques, ajoutant une touche de style à chaque geste.</p>
								</div>
							</div> <!-- service -inner  -->
							<div class="service-inner wow fadeInRight" data-wow-delay="1.1s">
								<i class="fa fa-street-view"></i>
								<div class="service-box">
									<h3>Makeup</h3>
									<p>Découvrez nos talents en maquillage pour une transformation éblouissante. Des looks naturels aux créations audacieuses, laissez-nous sublimer votre beauté avec notre art du maquillage.</p>
								</div>
							</div>  <!-- service -inner  -->
								<div class="service-inner wow fadeInRight" data-wow-delay="1.4s">
								<i class="fa fa-shield"></i>
								<div class="service-box">
									<h3>Coiffure & tresse</h3>
									<p> De la coiffure audacieuse à l'art des tresses, nous vous créons des styles qui reflètent votre personnalité et mettent en valeur votre beauté naturelle.</p>
								</div>
							</div> <!-- service -inner  -->
							
						</div>
					</div><!-- row end -->
		</div>
	</section>
	<!-- section overview end -->

	<!-- section profile start  A propos-->

	<!-- section profile end -->


		 		  <!-- Start Gallery 1-2 -->
    <section id="gallery-1" class="content-block section-wrapper gallery-1 section-padding">
    	 	<div class="container">

			<div style="margin-top:-180px">
	            <ul class="filter"><h4 style="font-size:2em;">
	                <li class="active"><a href="#" data-filter="*"></a></li>
	                <li><a href="#" data-filter=".artwork" style="font-size:20px;">Nos Réalisations</a></li>
	                <li><a href="#" data-filter=".creative"></a></li></h4>
<!-- 	                <li><a href="#" data-filter=".nature">Onglerie</a></li>
	                <li><a href="#" data-filter=".outside">Makeup</a></li>
	                <li><a href="#" data-filter=".photography">Coiffure et Tresse</a></li> -->
	            </ul>
			</div>
            <!-- /.gallery-filter -->
        <div class="row">

            <?php require'backend/connectDB.php'; 
                $services = "SELECT images, nomCat, description FROM service, categorie WHERE service.idCat=categorie.idCat ORDER BY RAND()";
                $statement = $dbConn->prepare($services);
                $statement->execute();

                $galerie = $statement->fetchAll(PDO::FETCH_ASSOC);
                $galerieChunks = array_chunk($galerie, 3);

                foreach($galerieChunks as $galerie){ 
                echo'<div class="row">';
                foreach($galerie as $post){ ?>

                    <div id="#">
                        <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                            <div class="gallery-item">
                                <div class="gallery-thumb">
                                    <img src="assets/uploads/<?= $post['images'] ?>" class="img-responsive" alt="1st gallery Thumb" style="height:200px; width:100%; ">
                                    <div class="image-overlay"></div>
                                    <a href="assets/uploads/<?= $post['images'] ?>" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="gallery-details">
                                    <div>
                                        <h5><?= $post['nomCat'] ?></h5>
                                    </div>
                                    <div>
                                        <p><?= $post['description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php }
            echo'</div>';
            }?>

        </div>
            
 
        <!-- /.container -->
		</div>
    </section>
    <!--// End Gallery 1-2 -->  
	 
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