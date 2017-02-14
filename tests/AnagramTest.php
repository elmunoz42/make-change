<?php
    require_once __DIR__."/../src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_AnagramTest()
        {
            //Arrange
            $test_AnagramTest = new Anagram;
            $input = "z";
            $second_input = "z";

            //Act
            $result = $test_AnagramTest->checkWord($input, $second_input);

            //Assert
            $this->assertEquals("z", $result);
        }
        function test_AnagramTest_fail()
        {
            //Arrange
            $test_AnagramTest = new Anagram;
            $input = "z";
            $second_input = "a";

            //Act
            $result = $test_AnagramTest->checkWord($input, $second_input);

            //Assert
            $this->assertEquals("no match", $result);
        }
        function test_AnagramTest_cat()
        {
            //Arrange
            $test_AnagramTest = new Anagram;
            $input = "cat";
            $second_input = "act";

            //Act
            $result = $test_AnagramTest->checkWord($input, $second_input);

            //Assert
            $this->assertEquals("act", $result);
        }
        function test_AnagramTest_at()
        {
            //Arrange
            $test_AnagramTest = new Anagram;
            $input = "cat";
            $second_input = "at";

            //Act
            $result = $test_AnagramTest->checkWord($input, $second_input);

            //Assert
            $this->assertEquals("at", $result);
        }

    }
 ?>
