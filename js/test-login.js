var postAnnonce = document.getElementById("post annonce");
        var signOut = document.getElementById("sign out");
        if(signOut==null){
            postAnnonce.href='Login_v4/login.php';
        }
        else {
            nom =  getQueryVariable("nom");
            prenom = getQueryVariable("prenom");
            postAnnonce.href='new-post.php?nom='+nom+'&prenom='+prenom;
        }

        function getQueryVariable(variable)
        {
         var query = window.location.search.substring(1);
         var vars = query.split("&");
         for (var i=0;i<vars.length;i++) {
             var pair = vars[i].split("=");
             if(pair[0] == variable){return pair[1];}
         }
         return(false);
        }