<?php

$password_length = isset($_POST['pass_length']) && !empty($_POST['pass_length']) ? $_POST['pass_length'] : null;

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

        <h1>password lenght: <?= $password_length ?> </h1>

        <p>
            Youy password is: <br>
            <?= strong_passGenerator($password_length) ?>
        </p>

        <form action="index.php" method="post">
            <label for="pass-lenght"></label>
            <input type="number" id="pass-length" name="pass_length" min="7" max="100" value="8">
            <div>
                <button type="submit">send</button>
                <button type="reset">reset</button>
            </div>

        </form>
    </main>

</body>

</html>