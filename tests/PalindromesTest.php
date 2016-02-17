<?php

    require_once "src/Palindromes.php";

    class PalindromesTest extends PHPUnit_Framework_TestCase
    {

        function test_makeTitleCase_oneWord()
        {

            //Arrange
            $test_Palindromes = new Palindromes;
            $input = "beowulf";

            //Act: runs the actual method that we are testing.
            $result = $test_Palindromes->compareWord($input);

            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals("fluwoeb", $result);
        }  
    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
