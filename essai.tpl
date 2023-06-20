<html>
<head> 
<title>{$titre}</title> 
{literal} 
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
    {/literal} 
    </head> 
    <body> 
    <a href="smarty.php">Mon blog</a> 
    <script>
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
    </script>
    </body>
    </html>