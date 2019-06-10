<?php

$response = (object)[];    // instantiate empty object

$naam = trim($_POST["naam"]);
$wachtwoord = trim($_POST["wachtwoord"]);

if ($naam != "" && $wachtwoord != ""){

    if ($naam == "lotte" && $wachtwoord == "bookc") {
        $response->naam = $naam;
        $response->loginok = true;
    } else {
        $response->naam = $naam;
        $response->loginok = false;
    }

}

echo json_encode($response);