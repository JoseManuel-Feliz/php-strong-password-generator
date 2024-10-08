<?php
require_once __DIR__ . "/partials/vars.php";
require_once __DIR__ . "/partials/functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>

<body>

    <main>

        <h1>Strong Password Generator</h1>

        <h3>Genera una password sicura</h3>

        <div>
            <p>
                <?= $validation_message ?>
            </p>
        </div>
        <div>

            <form action="index.php" method="post">
                <label for="pass-lenght">Lunghezza della password</label>
                <input type="number" id="pass-length" name="pass_length" min="8" max="50" value="8">
                <div>
                    <button type="submit">send</button>
                    <button type="reset">reset</button>
                </div>

            </form>
        </div>
    </main>

</body>

</html>