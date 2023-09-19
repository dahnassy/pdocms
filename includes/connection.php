<?php

   try{
   $pdo=new PDO('mysql:host=localhost;dbname=pdocms', 'root', '');

}catch(PDOException $e){
	exit('Error could not connect');
}




?>
