<?php
/* Smarty version 4.3.0, created on 2023-06-21 10:23:43
  from 'C:\wamp64\www\php-works\test2j\essai.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6492cfafbbf096_70789414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b94cc1aaed1f90019779ac4fbee60d833d360bde' => 
    array (
      0 => 'C:\\wamp64\\www\\php-works\\test2j\\essai.tpl',
      1 => 1687343008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6492cfafbbf096_70789414 (Smarty_Internal_Template $_smarty_tpl) {
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

        
        <form action="smarty.php">
        
        <input type="text" id="comment-field" name="comment-field">
        <button type="submit" onclick="addComment()">envoyer</button><br>
        <a href="smarty.php">Mon blog</a> <br><br><br>
</form>

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

function addComment(){
    var comm = document.getElementById("comment-field").value;
    var newComm = document.createElement("div");
    newComm.className = "comment";
    newComm.innerHTML = comment;
    var commList = document.getElementById("comment-list");
    commList.appendChild(newComm);
    document.getElementById("comment-field").value = "";
}
    <?php echo '</script'; ?>
>
    </body>
    </html><?php }
}
