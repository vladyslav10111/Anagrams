<?php
namespace App;

class TextReverser {
    public function reverseText($text) {
        $array_of_input_symbols = str_split($text);
        $array_without_special_chars = [];
        $special_chars_positions = [];

        foreach ($array_of_input_symbols as $index => $symbol) {
            if (preg_match('/[^a-zA-Z]/', $symbol)) {
                $special_chars_positions[$index] = $symbol;
            } else {
                $array_without_special_chars[] = $symbol;
            }
        }

        $reverse_array_with_symbols = array_reverse($array_without_special_chars);

        foreach ($special_chars_positions as $index => $symbol) {
            array_splice($reverse_array_with_symbols, $index, 0, $symbol);
        }

        return implode($reverse_array_with_symbols);
    }
}