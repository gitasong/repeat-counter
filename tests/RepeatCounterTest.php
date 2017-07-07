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

        function testRepeatCounterSingleLetterVsMultiWord()
        {
            // Arrange
            $test_repeatCounter = new RepeatCounter;
            $word = "a";
            $string = "polly want a cracker";

            // Act
            $result = $test_repeatCounter->wordCount($word, $string);

            // Assert
            $this->assertEquals(1, $result);
        }

        function testRepeatCounterSingleLetterVsMultiWordMultOccurrences()
        {
            // Arrange
            $test_repeatCounter = new RepeatCounter;
            $word = "I";
            $string = "I want what I want";

            // Act
            $result = $test_repeatCounter->wordCount($word, $string);

            // Assert
            $this->assertEquals(2, $result);
        }

        function testRepeatCounterMultiLetterVsMultiWord()
        {
            // Arrange
            $test_repeatCounter = new RepeatCounter;
            $word = "crow";
            $string = "the crow flies at dawn";

            // Act
            $result = $test_repeatCounter->wordCount($word, $string);

            // Assert
            $this->assertEquals(1, $result);
        }

        function testRepeatCounterMultiLetterVsMultiWordMultiOccurrences()
        {
            // Arrange
            $test_repeatCounter = new RepeatCounter;
            $word = "sea";
            $string = "she sells sea shells by the sea shore";

            // Act
            $result = $test_repeatCounter->wordCount($word, $string);

            // Assert
            $this->assertEquals(2, $result);
        }

        function testRepeatCounterMultiLetterVsMultiWordWFakeout()
        {
            // Arrange
            $test_repeatCounter = new RepeatCounter;
            $word = "con";
            $string = "the con consistently conned his marks, but he couldn't con himself";

            // Act
            $result = $test_repeatCounter->wordCount($word, $string);

            // Assert
            $this->assertEquals(2, $result);
        }
    }
?>
