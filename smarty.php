
<?php
// Note : Smarty a un 'S' majuscule
require_once('smarty-4.3.0/libs/Smarty.class.php');
$mysqli = new mysqli('localhost', 'root', '', 'blog');

// require_once('config_blog.php');
// $bdd = retourCNX();
$resultat = $mysqli->query('SELECT* FROM billets_blog ORDER BY ID DESC');

$billets = array();

while($ligne = $resultat->fetch_assoc()){
    $billets[]=$ligne;
}

$smarty = new Smarty();
$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->setCacheDir('./cache');

$smarty->assign('billets', $billets);

$smarty->display('liste_billets.tpl');
$titre = '';
$contenu = '';
if(isset($_POST['titre']) && isset($_POST['contenu'])){
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
}
$smarty->assign('titre', $titre);

if(!empty($_POST['titre'])&& !empty($_POST['contenu'])){
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];

$requete = "INSERT INTO billets_blog(titre,contenu,date_billet)
VALUES('$titre', '$contenu', NOW())";
$resultat = $mysqli->query($requete);
}
else{
    echo "Remplissez tout les champs";
}
echo "<h2>Résumé des derniers billets entrés :</h2>" . "<br>";

$sql = "SELECT titre,contenu,date_billet FROM billets_blog";
$result = mysqli_query($mysqli,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<hr>" . "titre : " . $row["titre"]. "<br>" . "contenu : " . $row["contenu"] . "<br>" . "date : " .$row["date_billet"] . "<br>";
        $smarty->display('essai.tpl') . "<br><br><br>";
    }
}
    else{
        echo "0 resultats";
    }

// header('location : essai.php');


?>