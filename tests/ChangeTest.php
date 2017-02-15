<?php
    require_once __DIR__."/../src/Change.php";

    class ChangeTest extends PHPUnit_Framework_TestCase
    {
        function test_ChangeTest()
        {
            //Arrange
            $test_ChangeTest = new Change;
            $input = 9.99;

            //Act
            $result = $test_ChangeTest->makeChange($input);

            //Assert
            $this->assertEquals([1,1,1,1,1], $result);
        }

    }
 ?>
