<?php
    class Palindromes
    {
        private $input;

        function compareWord($input)
        {
            $input = strtolower($input);  // make lowercase
            $letter_array = str_split($input); // makes letter array
            $palindrome = array();  // array
            foreach ($letter_array as $letter) {
                array_push($palindrome, array_pop($letter_array));
            }

            $palindrome = implode($palindrome); // string

            if ($palindrome == $input) {
                return true;
            } else {
                return false;
            }

        }

    }
?>
