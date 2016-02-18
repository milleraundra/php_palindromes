<?php
    class Palindromes
    {
        private $input;


    // SAVE, getAll(), deleteAll()
        function compareWord($input)
        {
            $letter_array = str_split($input); // makes letter array
            $palindrome = array();
            foreach ($letter_array as $letter) {
                array_push($palindrome, array_pop($letter_array));
            }

            $palindrome = implode($palindrome);

            if ($palindrome == $input) {
                return true;
            } else {
                return false;
            }

        }

    }
?>
