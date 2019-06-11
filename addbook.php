<?php
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
    <script src="js/bookC.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <title>BookC toevoegen</title>

</head>

<body>
    
    <div style="height: 100vh; background-color: var(--my-bg-color); color: var(--my-color)" class= "d-flex align-content-center px-2">
        <div class="container border border-light rounded my-auto p-2">
        <div class="text-center"><img src="pics/bookclogo.png"></div><br>
            <form>
            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" class="form-control" id="titel">
            </div>
            <div class="form-group">
                <label for="auteur">Auteur</label>
                <input type="text" class="form-control" id="auteur">
            </div>
            <div class="form-group">
                <label for="taal">Taal</label>
                <select class="form-control" id="taal">
                    <option value="nl">Nederlands</option>
                    <option value="en">Engels</option>
                    <option value="fr">Frans</option>
                    <option value="du">Duits</option>
                </select>
            </div>
            <div class="form-group">
                <label for="paginas">Aantal pagina's</label>
                <input type="number" class="form-control" id="paginas">
            </div>
            <div class="opmerkingen">
                <label for="opmerkingen">Opmerkingen</label>
                <textarea class="form-control" id="opmerkingen"></textarea>
            </div>
            <br/>
            <button type="button" class="btn myButton" id="addBookButton" data-toggle="modal" data-target="#succes">Voeg toe</button>
            <button type="button" class="btn myButton"><a href="main.php">Home</a></button>
            </form>
        </div>
    </div>

        <!-- The Modal -->
    <div class="modal fade" id="succes">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Succes</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <div id="message"></div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn myButton" data-dismiss="modal">Sluit</button>
        </div>

        </div>
    </div>
</div>

</body>
</html>