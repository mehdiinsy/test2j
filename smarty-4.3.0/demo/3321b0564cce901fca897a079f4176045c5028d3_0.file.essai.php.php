<?php
/* Smarty version 4.3.0, created on 2023-06-20 14:47:13
  from 'C:\wamp64\www\php-works\test2j\essai.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6491bbf15e2728_43682564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3321b0564cce901fca897a079f4176045c5028d3' => 
    array (
      0 => 'C:\\wamp64\\www\\php-works\\test2j\\essai.php',
      1 => 1687271541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6491bbf15e2728_43682564 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head> 
<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title> 
 
<style> 
table.billets{ 
    font-size: 12px; 
    }
    table.billets td{ 
        padding-bottom: 7px; 
        } 
        .entete{ 
    font-size: 14px; font-weight: bold; 
    } 
    </style> 
     
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
