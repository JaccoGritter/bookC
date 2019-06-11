<?php

require "bookClass.php";    //  load class before session_start to prevent PHP_Incomplete_Class_Name error
session_start();


$book = new Book($_POST["titel"], $_POST["auteur"], $_POST["taal"], $_POST["paginas"], $_POST["opmerkingen"]);

array_push($_SESSION["books"], $book);

$userid = $_SESSION['userid'];
$bookfile = $_SESSION['bookfile'];
$books = $_SESSION['books'];

$myfile = fopen($bookfile, "w") or die("Kan de file niet openen!");
fwrite($myfile, json_encode($books));
fclose($myfile);

echo $book->titel;