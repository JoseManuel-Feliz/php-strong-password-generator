<?php
//SESSION START
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP CSS STYLESHEET -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main class="container py-5">
        <div class="row py-5">
            <div class="col">
                <h2 class="display-2 text-center fw-bold">
                    La password è:
                </h2>
                <p class="fs-1 text-center fw-semibold">
                    <?= //PRINT GENERATED PASSWORD
                    $_SESSION['password']
                    ?></p>
            </div>
    </main>
    </div>
</body>

</html>