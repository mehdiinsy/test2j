<?php
function retourCNX(){
    try{
    $bdd = new PDO('mysql:host=localhost;
    port=3306;
    dbname=blog;charset=utf8','root','');
    echo "Connexion réussie";
    }catch(Exception $e){
        die($e->getMessage());
    }
    return $bdd;
}
?>