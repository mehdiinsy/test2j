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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="bootstrap.css">
    </head> 
    <body> 

        <form action="smarty.php">
        
        <input type="text" id="comment-field" name="comment-field">
        <button type="submit" onclick="addComment()">envoyer</button><br>
        <a href="smarty.php">Mon blog</a> <br><br><br>
</form>
   
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

function addComment(){
    var comm = document.getElementById("comment-field").value;
    var newComm = document.createElement("div");
    newComm.className = "comment";
    newComm.innerHTML = comment;
    var commList = document.getElementById("comment-list");
    commList.appendChild(newComm);
    document.getElementById("comment-field").value = "";
}
    </script>
</body>
    </html>