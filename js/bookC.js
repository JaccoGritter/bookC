$(document).ready(function(){

    $("#loginButton").click(function(){
        let naam = $("#naam").val().trim();
        let wachtwoord = $("#wachtwoord").val().trim();
        let msg = "";

        if( naam != "" && wachtwoord != "" ){
            $.post('checkUser.php', {naam:naam, wachtwoord:wachtwoord},
                function(response){
                    response = (JSON.parse(response));
                    if(response.loginok == true){
                        window.location = "main.php";
                    }else{
                        msg = "Ongeldige gebruikersnaam of wachtwoord!";
                    }
                    $("#message").html(msg);
                });
        } else {
            msg = "Vul een gebruikersnaam en wachtwoord in!";
            $("#message").html(msg);
        }
        
    });


    $("#addBookButton").click(function(){
        let titel = $("#titel").val().trim();
        let auteur = $("#auteur").val().trim();
        let taal = $("#taal").val();
        let paginas = $("#paginas").val();
        let opmerkingen = $("#opmerkingen").val().trim();

        if( titel != "" && auteur != "" ){
            $.post('storeBook.php', {titel:titel, auteur:auteur, taal:taal, paginas:paginas, opmerkingen:opmerkingen},
                function(response){
                    let msg = response + " is toegevoegd.";
                    //response = (JSON.parse(response));
                    //console.log("Naam: "+ response + " is toegevoegd");
                    // if(response.loginok == true){
                    //     window.location = "main.php";
                    // }else{
                    //     msg = "Ongeldige gebruikersnaam of wachtwoord!";
                    // }
                    $("#message").html(msg);
                });
        }
    });


});