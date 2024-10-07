<?php

$password_length = isset($_POST['pass_length']) && !empty($_POST['pass_length']) ?$_POST['pass_length']:null;

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

        <h1>password lenght: <?= $password_length?> </h1>

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