<?php

function generateRandomString($length = 10) {
    $characters = '4CD8TUP5QRS9VAB7EFGHM0NO1WXYZ2IJ6KL';
    $randomString = substr(str_shuffle($characters), 0, $length);
    return $randomString;
}
