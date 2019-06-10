$(document).ready(function(){
    $("#loginButton").click(function(){
        let naam = $("#naam").val().trim();
        let wachtwoord = $("#wachtwoord").val().trim();

        if( naam != "" && wachtwoord != "" ){
            $.post('checkUser.php', {naam:naam, wachtwoord:wachtwoord},
                function(response){
                    let msg = "";
                    response = (JSON.parse(response));
                    console.log("Naam: "+ response.naam);
                    if(response.loginok == true){
                        window.location = "main.php";
                    }else{
                        msg = "Ongeldige gebruikersnaam of wachtwoord!";
                    }
                    $("#message").html(msg);
                });
        }
    });
});