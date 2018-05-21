 <?php 
 $requette= mysqli_query($c,'SELECT * FROM rubriques order by ordre asc');
 $menu="";
 while(($rubriques=mysqli_fetch_assoc($requette))!==null){
	 $menu.='<li><a href="articles.php?rubriques='.$rubriques['id'].'">'.$rubriques['nom'].'</a></li>';
	 
 }
 ?>
 <nav> 
			     <ul> 
				        <li><a href="articles.php">ACCUEIL</a></li>
	                    <?php echo ($menu); ?>
				 </ul>
			</nav>