<?php
$password_length = isset($_POST['pass_length']) && !empty($_POST['pass_length']) ? $_POST['pass_length'] : null;

$validation_message = '';
$max_length = 50;
$min_length = 8;

$password_length < $min_length ? $validation_message = 'La password deve avere una lunghezza minima di ' . $min_length . ' caratteri' : '';
$password_length > $min_length ? $validation_message = 'La password deve avere una lunghezza maxima di ' . $max_length . ' caratteri' : '';
