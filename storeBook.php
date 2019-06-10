<?php
session_start();

// titel:titel, auteur:auteur, taal:taal, paginas:paginas, opmerkingen:opmerkingen
$titel = $_POST["titel"];
$auteur = $_POST["auteur"];
$taal = $_POST["taal"];
$paginas = $_POST["paginas"];
$opmerkingen = $_POST["opmerkingen"];
// dd();

echo $titel;