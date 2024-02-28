<?php

require __DIR__ .'/partials/functions.php'

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - STRONG PASSWORD GENERATOR</title>

    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-primary">

<div class="container">
    <h1 class="text-center fs-1 my-3 text-light">GENERA UNA PASSWORD</h1>

    <div class="row border border-light">
        <!-- // SECTION FORM //-->
        <form action="index.php" method="get">
            <div class="col-6 mx-auto">
                <label for="lenght" class="form-label text-light fw-bold fs-3 my-3 py-3">Caratteri per generare la password</label>
                <input type="number" class="form-control" id="lenght" name="length" required min="4" max="24" placeholder="Inserisci un numero da 4 a 24">
            </div>

            <h3 class="text-light fw-bold fs-3 my-3 py-3 text-center">Seleziona tra queste opzioni:</h3>

            <div class="col-6 d-flex justify-content-between mx-auto my-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="letters" id="defaultFlexControl">
                    <label class="form-check-label" for="defaultFlexControl"> Solo lettere </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="numbers" id="flexCheckVerified">
                    <label class="form-check-label" for="defaultFlexControl"> Solo numeri </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="specials" id="flexCheckVerified">
                    <label class="form-check-label" for="defaultFlexControl"> Solo caratteri speciali </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="norepeat" id="flexCheckVerified">
                    <label class="form-check-label" for="defaultFlexControl"> Non ripetere i caratteri </label>
                </div>
            </div>
            <div class="text-center py-3">
                <button class="btn btn-light rounded-5">
                    GENERA PASSWORD
                </button>
            </div>
        </form>
        <!--// SECTION FORM // -->
    </div>
    <div class="text-center my-5">
        
        <?php
            if(isset($_GET['length']) && $_GET['length'] >= 4 && $_GET['length'] <= 24 ) {
                header('Location: ./partials/passwordGenerate.php'); 
            }

        ?>
    </div>
</div>
    

<!-- LINK JAVASCRIPT - BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>