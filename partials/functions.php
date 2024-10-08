<?php

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
