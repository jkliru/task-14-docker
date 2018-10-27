<?php

require 'vendor/autoload.php';
$braces = $_GET['string'] ?? '';

try {
    $checkBraces = new \jkliru\CheckBraces();

    if ($checkBraces->isCorrectString($braces)) {
        echo 'В строке ' . $braces . ' скобки корректны';
    }
    else {
        echo 'В строке ' . $braces . ' скобки некорректны';
    }
}
catch (\Exception $e) {
    echo 'В строке ' . $braces . ' содержатся некорректные символы';
}
