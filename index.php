<?php
include 'function.php';
$authors = ['John', 'jane', 'jack', 'harry', 'luke'];

$FormatString = implode(' , ', $authors);

if (count($authors) >= 2) {
    $FormatString = str_lreplace(',', ' and ', $FormatString);
}

echo $FormatString;
