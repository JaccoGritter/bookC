<?php
session_start();

// titel:titel, auteur:auteur, taal:taal, paginas:paginas, opmerkingen:opmerkingen
$titel = $_POST["titel"];
$auteur = $_POST["auteur"];
$taal = $_POST["taal"];
$paginas = $_POST["paginas"];
$opmerkingen = $_POST["opmerkingen"];
// dd();

$book = $titel . "\n" . $auteur . "\n" . $taal . "\n" . $paginas . "\n" . $opmerkingen . "\n" . "e*n*d\n";

$userid = $_SESSION['userid'];
$bookfile = "data\books".$userid->id.".txt";

//if (!file_exists ($bookfile)) 

$myfile = fopen($bookfile, "a") or die("Unable to open file!");
fwrite($myfile, $book);
fclose($myfile);

echo $titel;