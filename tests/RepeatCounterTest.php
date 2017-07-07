<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testRepeatCounterOneLetterVsOneLetter()
        {
            // Arrange
            $test_repeatCounter = new RepeatCounter;
            $word = "a";
            $string = "a";

            // Act
            $result = $test_repeatCounter->wordCount($word, $string);

            // Assert
            $this->assertEquals(1, $result);
        }

        function testRepeatCounterMultiLetterVsMultiLetter()
        {
            // Arrange
            $test_repeatCounter = new RepeatCounter;
            $word = "the";
            $string = "the";

            // Act
            $result = $test_repeatCounter->wordCount($word, $string);

            // Assert
            $this->assertEquals(1, $result);
        }
    }
?>
