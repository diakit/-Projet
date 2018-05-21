<?php 
	include("fonctions.php");
	$c=initialiser_bd();
	$articles = (int)$_GET['numero'];
	
	// Lecture de l'article
	$requette= mysqli_query($c,'SELECT * FROM `articles` WHERE `id` = ' . $articles);
	$data=mysqli_fetch_assoc($requette);
	
	// Lecture des images pour le diaporama
	$requette= mysqli_query($c,'SELECT * FROM `images` WHERE `id_article` = ' . $articles);
	$diaporama="";
	while(($images=mysqli_fetch_assoc($requette))!==null){
	$diaporama.=	'<img src="images/'.$images['images'].'" title="'.$images['legende'].'" alt="SPORT">';
	}
?>


<!DOCTYPE html> 
<html lang="fr">
    <head>
		 <meta charset="utf-8">
        <title>SPORT</title>
        <meta name="viewport" content="width=device-width,  initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
	<body id="detail">
	     <div id="contenus">
		  <div id="bandeau"></div>
		  <h1>BIENVENUE SUR MON BLOG</h1>
			<?php include("nav.php")?>
			<article>
				<h2><?php echo($data['titre']); ?></h2>
				<p><?php echo(formater_date($data['date']));?></p>
				<img src="images/<?php echo($data['image']); ?>" alt="">
				<p><?php echo($data['texte']);?> </p>
				<aside id="diaporama">
				    <?php echo($diaporama); ?>
				   
				</aside>
			</article>
				 
			<aside class="slider_1">
				<div class="pub"></div>
				<div class="pub"></div>
				<div class="pub"></div>
			</aside>
			
			
			<footer>
			<div class="bg"></div>
			</footer>
		 </div>
	</body>