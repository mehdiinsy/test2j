<?php
/* Smarty version 4.3.0, created on 2023-06-21 13:23:03
  from 'C:\wamp64\www\php-works\test2j\liste_billets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6492f9b75b9686_09862915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '387b7693886cd2a27d39ef82444df66f43387737' => 
    array (
      0 => 'C:\\wamp64\\www\\php-works\\test2j\\liste_billets.tpl',
      1 => 1687353776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6492f9b75b9686_09862915 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head> 
<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title> 

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
</html><?php }
}
