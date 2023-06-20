<?php
/* Smarty version 4.3.0, created on 2023-06-20 14:32:04
  from 'C:\wamp64\www\php-works\test2j\essai.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6491b86479fb72_76402382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f37359c8323c8ca2e7752ab41f70c7aeafc61b9e' => 
    array (
      0 => 'C:\\wamp64\\www\\php-works\\test2j\\essai.tpl',
      1 => 1687271512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6491b86479fb72_76402382 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head> 
<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title> 

    </head> 
    <body> 
    <a href="smarty.php">Mon blog</a> 
    <?php echo '<script'; ?>
>
    function affiche_form_comment(){  
    o = document.getElementById("form_comment");   
    if(o){ 
        o.style.display = ""; 
    }   
    o = document.getElementById("lien_comment");   
    if(o){ 
        o.style.display = "none";
    } 
} 
    <?php echo '</script'; ?>
>
    </body>
    </html><?php }
}
