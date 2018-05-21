<?php
function initialiser_bd(){
	if($_SERVER['HTTP_HOST']=='localhost'){
   	 $c= mysqli_connect('localhost','root','','blog');
	}else {
		//pour passer en ligne mettre les informations('localhost','root')
	}
	 mysqli_set_charset($c,'utf8');
	 return $c;	 
}
function formater_date($date){
  $stamp= strtotime($date);
 return date("d/m/y à H:i",$stamp);
}
?>