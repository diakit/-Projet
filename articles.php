<?php
include("fonctions.php");
 $c=initialiser_bd();
 $html=''; 
 if (isset($_GET['rubriques'])){
	 $where=' WHERE id_rubrique='.(int)$_GET['rubriques'];
 }else {
	 $where='';
 }
 $requette= mysqli_query($c,'SELECT * FROM articles'.$where.' order by date desc');
while(($articles=mysqli_fetch_assoc($requette))!==null){
		$html .= '<article>'.
			     '<h2>' . $articles['titre'] . '</h2>' .
					'<p>'.formater_date($articles['date']).'</p>' .
					'<img src="images/'.$articles['image'].'" alt="">' .
					'<p>'.$articles['accroche'].'</p>' .
					'<a href="detail.php?numero='. $articles['id'] . '">Lire la suite</a>'.
				'</article>';
				
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
	<body>
	
	     <div id="conteneur">
		    <div id="bandeau"></div>
			
			<h1>BIENVENUE SUR MON BLOG</h1>
			<?php include("nav.php")?>

			<div id="innerContent">
				<section>
					<?php echo($html); ?>
				</section>
				
				
				<aside class="slider_1">
					<div class="pub"></div>
					<div class="pub"></div>
					<div class="pub"></div>
				</aside>
			</div>
			
			<footer>
				<div class="pub"></div>
			</footer>	
		 
		 
		 </div>
	</body>
</html>