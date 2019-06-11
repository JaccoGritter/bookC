<?php
session_start();
require "bookClass.php";

// SESSION VARIABLES:
// "bookfile" - filename where to store books 
// "books" - array with books for this user
// "naam" - username
// "userid" - userID

$response = (object)[];    // instantiate empty object

$response->naam = "";
$response->loginok = false;
$response->userid = "";

function initializeBooksFile($user) {
    $_SESSION["bookfile"] = "data\books".$user.".json";                 // filename to store books in.
    $_SESSION["books"] = array();
    if (file_exists ($_SESSION["bookfile"])){                           // if books file exists
        $books = file_get_contents($_SESSION["bookfile"]);              // read books to session variable
        $_SESSION["books"] = json_decode($books);
    } 
}

if (file_exists ( 'data\users.json' )) {
        $users = file_get_contents('data\users.json');
        $users = json_decode($users);

    $naam = trim($_POST["naam"]);
    $wachtwoord = trim($_POST["wachtwoord"]);

    foreach($users as $userid) {
        if ($userid->naam == $naam && $userid->wachtwoord == $wachtwoord) {
            $response->naam = $_SESSION["naam"]= $naam;                 // Store name and userid
            $response->userid = $_SESSION["userid"] = $userid;          //  in SESSION variables
            $response->loginok = true;
            initializeBooksFile($userid->id);
        } 
    }

}

echo json_encode($response);