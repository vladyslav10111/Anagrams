<?php
require '../../vendor/autoload.php';

use App\TextReverser;

function getInput($console_message) {
    echo $console_message;
    return trim(fgets(STDIN));
}

$entered_text = getInput("Введіть будь-який текст: ");
$reverser = new TextReverser();
$result_string = $reverser->reverseText($entered_text);
echo $result_string;