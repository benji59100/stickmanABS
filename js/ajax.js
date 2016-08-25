$(document).ready(function() {
    // Lorsque je soumets le formulaire
    $('#form-inscription').on('submit', function(e) {
        e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire
 
        var $this = $(this); // L'objet jQuery du formulaire
 
        // Je récupère les valeurs
        var username = $('#username').val();
        var password = $('#password').val();
        var pseudo = $('#pseudo').val();
        var mail = $('#email').val();
 
        // Je vérifie une première fois pour ne pas lancer la requête HTTP
        // si je sais que mon PHP renverra une erreur
        if(username === '' || password === '' || pseudo === '' || mail === '') {
            $("#error-message").css('display','none');
            $("#success-message").css('display','none');
            $("#warning-message").css('display','block');
        } else {
            // Envoi de la requête HTTP en mode asynchrone
            $.ajax({
                url: $this.attr('action'), // Le nom du fichier indiqué dans le formulaire
                type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)
                data: $this.serialize(),// Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
                dataType:'json', //JSON
                success: function(html) { // Je récupère la réponse du fichier PHP
                    if(html.reponse == "echec")
                    {
                        console.log('echec');   
                        $("#success-message").css('display','none');
                        $("#warning-message").css('display','none');
                        $("#error-message").css('display','block');
                        
                    }
                    else
                    {   
                        $("#error-message").css('display','none');
                        $("#warning-message").css('display','none');
                        $("#success-message").css('display','block');

                    }
                }
            });
        }
    });

    $('#form-connexion').on('submit', function(e) {
        e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire
 
        var $this = $(this); // L'objet jQuery du formulaire
 
        // Je récupère les valeurs
        var username = $('#login').val();
        var password = $('#pwd').val();
        // Je vérifie une première fois pour ne pas lancer la requête HTTP
        // si je sais que mon PHP renverra une erreur
        if(username === '' || password === '') {
            $("#error-message2").css('display','none');
            $("#warning-message2").css('display','block');
        } else {
            // Envoi de la requête HTTP en mode asynchrone
            $.ajax({
                url: $this.attr('action'), // Le nom du fichier indiqué dans le formulaire
                type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)
                data: $this.serialize(),
                dataType:'json', // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
                success: function(html) { // Je récupère la réponse du fichier PHP
                    console.log('test');
                    if(html.reponse == "echec")
                    {
                        console.log('echec');
                        $("#warning-message2").css('display','none');
                        $("#error-message2").css('display','block');
                    }
                    else
                    {   
                        document.location.href="http://localhost/stickmanABS/template/connected-index.php";
                    }
                         // J'affiche cette réponse
                }
            });
        }
    });
});