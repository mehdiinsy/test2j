<?php
require_once('config_blog.php');
$bdd = retourcnx();


$bdd->exec("CREATE TABLE IF NOT EXISTS billets_blog(
ID INT NOT NULL AUTO_INCREMENT , 
titre VARCHAR (120) NOT NULL , 
contenu TEXT NOT NULL ,
annonce TINYTEXT NOT NULL , 
date_billet DATETIME NOT NULL , 
categorie VARCHAR( 12 ) NOT NULL , 
PRIMARY KEY ( ID ) 
)");

$bdd->exec("CREATE TABLE IF NOT EXISTS commentaires_blog(
ID_comment INT AUTO_INCREMENT , 
nom VARCHAR( 50 ) NOT NULL , 
comment TEXT NOT NULL , 
date_comment timestamp, 
ID INT NOT NULL , 
PRIMARY KEY ( ID_comment ) 
)");


// if($_REQUEST["submit"]){   
//     $contenu = mysql_escape_string(strip_tags($_REQUEST["contenu"], "<a><i><b><img>"));   
//     $annonce = substr(strip_tags($contenu), 0, 80);   
//     $titre = mysql_escape_string(strip_tags($_REQUEST["titre"]));   
//     $categorie = mysql_escape_string(strip_tags($_REQUEST["categorie"]));   
//     $q = "INSERT INTO billets_blog(titre, contenu, categorie, annonce, date_billet)        
//     VALUES("$titre", "$contenu", "$categorie", "$annonce", now())";   
//     mysql_query($q, $connexion) or die(mysql_error());   
//     $id = mysql_insert_id($connexion);   
    
//     header("Location: affiche_blog.php?ID=$id");
// }
// else{   
//     $smarty->assign("titre", "Blog : poster un billet");   
//     $smarty->display("editer_blog.tpl"); 
// } 

















?>