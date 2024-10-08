<?php

$password_length = isset($_POST['pass_length']) && !empty($_POST['pass_length']) ? $_POST['pass_length'] : null;

$validation_message = '';
$max_length = 50;
$min_length = 8;

$password_length < $min_length ? $validation_message = 'La password deve avere una lunghezza minima di ' . $min_length . ' caratteri' : '';
$password_length > $min_length ? $validation_message = 'La password deve avere una lunghezza maxima di ' . $max_length . ' caratteri' : '';
function strong_passGenerator($length)
{
    $chars = '?=?%&!\/.£$%//()?@òèù][)(<>/*-+:;0123456789abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ';
    $strong_pass = array();
    $chars_length = strlen($chars) - 1;
    for ($i = 0; $i < $length; $i++) {
        $j = rand(0, $chars_length);
        $strong_pass[] = $chars[$j];
    }
    return implode($strong_pass);
}


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