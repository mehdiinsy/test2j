
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
$smarty->setTemplateDir('smarty-4.3.0/demo');
$smarty->setCompileDir('smarty-4.3.0/demo');
$smarty->setCacheDir('smarty-4.3.0/demo');

$smarty->assign('billets', $billets);

$smarty->display('liste_billets.tpl');
$titre = '';
$contenu = '';
if(isset($_POST['titre']) && isset($_POST['contenu'])){
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
}
$smarty->assign('titre', $titre);

$requete = "INSERT INTO billets_blog(titre,contenu,date_billet)
VALUES('$titre', '$contenu', NOW())";
$resultat = $mysqli->query($requete);

$smarty->display('essai.tpl');


?>