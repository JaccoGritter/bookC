<?php
require "bookClass.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- My own CSS -->
    <link rel="stylesheet" href="css/bookC.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <title>BookC</title>

</head>
<body>
    <div style="height: 100vh; background-color: var(--my-bg-color); color: var(--my-color)" class= "d-flex align-content-center px-2">
        <div class="container border border-light rounded my-auto">

            <h5 class="text-right"><small>Gebruiker:&nbsp;<?php echo $_SESSION["naam"]; ?></small></h5>
            <h2 class="text-center"><img src="pics/bookclogo.png"></h2><br>
            <?php
                echo '<ul class="list-unstyled text-center">';
                $books = $_SESSION['books'];
               //var_dump($books);
                for ($i = 0; $i < count($books); $i++) {
                    echo "<li>" .$books[$i]->titel . " - " . $books[$i]->auteur . "</li>";
                }
                echo "</ul>";
                
            ?>
            <h5 class="text-center"><a href="main.php">home</a></h5>
        </div>
    </div>

</body>
</html>