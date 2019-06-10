<?php
session_start();

$response = (object)[];    // instantiate empty object

$response->naam = "";
$response->loginok = false;
$response->userid = "";

if (file_exists ( 'data\users.json' )) {
        $users = file_get_contents('data\users.json');
        $users = json_decode($users);

    $naam = trim($_POST["naam"]);
    $wachtwoord = trim($_POST["wachtwoord"]);
    // $founduserid = "";

    foreach($users as $userid) {
        if ($userid->naam == $naam && $userid->wachtwoord == $wachtwoord) {
            $response->naam = $_SESSION["naam"]= $naam;
            $response->userid = $_SESSION["userid"] = $userid;
            $response->loginok = true;
            // $founduserid = $userid;
        } 
    }

}

echo json_encode($response);