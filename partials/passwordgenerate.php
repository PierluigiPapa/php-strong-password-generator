<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP STRONG-PASSWORD-GENERATOR</title>

    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-primary">
    <div class="container">
        <div class="row border border-1 my-4">
            <h1 class="text-center text-light my-4">PASSWORD GENERATA</h1>
            
            <h3 class="text-center text-light fw-bold my-4">La tua password è :</h3>

            <span class="text-center text-light fs-5 d-block mx-auto my-4"><?php echo $_SESSION['finalpassword']; ?></span>

        </div>
    </div>
    


<!-- LINK JAVASCRIPT - BOOTSTRAP  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>