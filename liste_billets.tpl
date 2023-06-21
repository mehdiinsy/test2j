<html>
<head> 
<title>{$titre}</title> 
{literal}
<style>
h1 { 
    font-family: sans-serif; font-size: 20px; 
    } 
table.champs_saisie { 
    font-family: sans-serif; font-size: 12px; 
    }
table.champs_saisie td { 
    vertical-align: top; 
    } 
    </style> 
    {/literal} 
    </head>
    <body>
    <div class="container">
    <div class="row">
    <div class="col-4"></div>
    <div class="col-8">

    <h1>Nouveau billet</h1> </br>
<form method="post" action="smarty.php">
<table class="champs_saisie">
<tr> <td>Titre :</td>
<td><input name="titre" type="text" for="titre"></td> </tr>
<tr> <td>Contenu :</td> 
<td><textarea name="contenu" rows="15" cols="40">
</textarea>
</td> </tr>
<tr> <td>Catégorie :</td>
<td><input name="categorie" type="text" /> </tr>
<tr> <td />
<td><input name="submit" type="submit" value="Poster" />
</td> </tr> 
</table>
</form>
</div>
</div>
</div>
</body>
</html>