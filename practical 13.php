<?php

    $string_with_whitespace = "This is a string with whitespace.";

    $string_without_whitespace = str_replace(' ', '', $string_with_whitespace);

    echo "Original string: " . $string_with_whitespace . "<br>";
    echo "String without whitespace: " . $string_without_whitespace;
?>

