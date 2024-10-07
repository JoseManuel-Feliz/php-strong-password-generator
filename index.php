<?php

$password_length = isset($_POST['pass_length']) && !empty($_POST['pass_length']) ?$_POST['pass_length']:null;

//var_dump (strlen($chars));
function strong_passGenerator($password) {
    $strong_pass='';
    $chars=[
    $numers_chars = 0123456789; 
    $specials_chars ="?=?%&!\/.£$%//()?@òèù][)(<>/*-+:;"
    $lower_case_Chars = "abcdefghijklmnñopqrstuvwxyz";
    $upper_case_Chars = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    ];
    $random_num = random_int($password,50);
    for($i=0;$i<$password;$i++){
        $strong_pass .=$chars[$random_num+$i];
        !str_contains($chars, $strong_pass) ? $strong_pass .=$chars[$random_num%$i*$random_num]: '';
    };
    return [$random_num,$strong_pass];
};

var_dump(strong_passGenerator($password_length))

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

        <p><?= strong_passGenerator($password_length)?></p>

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