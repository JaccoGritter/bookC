<?php
session_start();
require "bookClass.php";

$book = new Book($_POST["titel"], $_POST["auteur"], $_POST["taal"], $_POST["paginas"], $_POST["opmerkingen"]);

$userid = $_SESSION['userid'];
$bookfile = "data\books".$userid->id.".json";

$myfile = fopen($bookfile, "a") or die("Kan de file niet openen!");
fwrite($myfile, json_encode($book));
fclose($myfile);

echo $book->get_titel();