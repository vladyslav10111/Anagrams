<?php
namespace App;

//A class for creating anagrams

class TextReverser {
    public function reverseText($entered_text) {
        $array_with_words = explode(' ', $entered_text);
        $array_with_words_count = count($array_with_words);

        for ($i = 0; $i < $array_with_words_count; $i++) {
            $array_with_words[$i] = str_split($array_with_words[$i]);
        }

        foreach ($array_with_words as &$subArray) {
            $letters = [];
            foreach ($subArray as $index => $char) {
                if (ctype_alpha($char)) {
                    $letters[] = $char;
                }
            }

            $reversedLetters = array_reverse($letters);
            $letterIndex = 0;

            foreach ($subArray as $index => $char) {
                if (ctype_alpha($char)) {
                    $subArray[$index] = $reversedLetters[$letterIndex];
                    $letterIndex++;
                }
            }
        }

            for ($i = 0; $i < $array_with_words_count; $i++) {
                $array_with_words[$i] = implode($array_with_words[$i]);
            }

            return implode(' ' ,$array_with_words);

        }
}