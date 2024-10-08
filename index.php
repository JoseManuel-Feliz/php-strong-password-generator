<?php
//IMPORT VARS AND FUNCTIONS FILE
require_once __DIR__ . "/partials/vars.php";
require_once __DIR__ . "/partials/functions.php";

//SESSION START
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- DOCUMENT TITLE -->
    <title>php-strong-password-generator</title>
    <!-- BOOTSTRAP CSS STYLESHEET -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <main class="container py-5">

        <div class="row row-cols-1 justify-content-center align-center">

            <div class="col text-center mt-4">
                <!-- TITLE -->
                <h1 class="display-2 fw-bold">Strong Password Generator</h1>
                <!-- SUBTITLE -->
                <h3 class="display-4 fw-semibold">Genera una password sicura</h3>
            </div>

            <div class=" col bg-light-blue py-4 rounded mt-3">
                <!-- VALIDATION  PASSWORD MESSAGE -->
                <p class="text-danger m-0 fw-semibold fs-5">
                    <?= $validation_message ?>
                </p>
            </div>

            <div class="col bg-light my-4 rounded">
                <!-- FORM FOR GENERATE A PASSWORD -->
                <form action="password.php" method="post" class="form-height d-flex flex-column py-2 px-3">

                    <div class="input-group my-4 d-flex justify-content-between align-items-center ">
                        <!-- INPUT TO GET THE PASSWORD LENGTH  -->
                        <span class="text-dark fs-4">Lunghezza della password:</span>
                        <input class="form-control rounded" type="number" id="pass-length" name="pass_length" min="8"
                            max="50" value="8">
                    </div>

                    <!-- BTN GROUP -->
                    <div class="d-flex align-items-end flex-grow-1 mb-4">
                        <button class="btn btn-primary me-3" type="submit">send</button>
                        <button class="btn btn-secondary" type="reset">reset</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>

</html>