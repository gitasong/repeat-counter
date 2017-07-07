<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testRepeatCounterOneLetterVsOneLetter()
        {
            // Arrange
            $test_repeatCounter = new RepeatCounter;
            $word_input = "a";
            $sentence_input = "a";

            // Act
            $result = $test_repeatCounter->wordCount($word_input, $sentence_input);

            // Assert
            $this->assertEquals(1, $result);
        }

        function testRepeatCounterMultiLetterVsMultiLetter()
        {
            // Arrange
            $test_repeatCounter = new RepeatCounter;
            $word_input = "the";
            $sentence_input = "the";

            // Act
            $result = $test_repeatCounter->wordCount($word_input, $sentence_input);

            // Assert
            $this->assertEquals(1, $result);
        }

        function testRepeatCounterSingleLetterVsMultiWord()
        {
            // Arrange
            $test_repeatCounter = new RepeatCounter;
            $word_input = "a";
            $sentence_input = "polly want a cracker";

            // Act
            $result = $test_repeatCounter->wordCount($word_input, $sentence_input);

            // Assert
            $this->assertEquals(1, $result);
        }

        function testRepeatCounterSingleLetterVsMultiWordMultOccurrences()
        {
            // Arrange
            $test_repeatCounter = new RepeatCounter;
            $word_input = "I";
            $sentence_input = "I want what I want";

            // Act
            $result = $test_repeatCounter->wordCount($word_input, $sentence_input);

            // Assert
            $this->assertEquals(2, $result);
        }

        function testRepeatCounterMultiLetterVsMultiWord()
        {
            // Arrange
            $test_repeatCounter = new RepeatCounter;
            $word_input = "crow";
            $sentence_input = "the crow flies at dawn";

            // Act
            $result = $test_repeatCounter->wordCount($word_input, $sentence_input);

            // Assert
            $this->assertEquals(1, $result);
        }

        function testRepeatCounterMultiLetterVsMultiWordMultiOccurrences()
        {
            // Arrange
            $test_repeatCounter = new RepeatCounter;
            $word_input = "sea";
            $sentence_input = "she sells sea shells by the sea shore";

            // Act
            $result = $test_repeatCounter->wordCount($word_input, $sentence_input);

            // Assert
            $this->assertEquals(2, $result);
        }

        function testRepeatCounterMultiLetterVsMultiWordWFakeout()
        {
            // Arrange
            $test_repeatCounter = new RepeatCounter;
            $word_input = "con";
            $sentence_input = "the con consistently conned his marks, but he couldn't con himself";

            // Act
            $result = $test_repeatCounter->wordCount($word_input, $sentence_input);

            // Assert
            $this->assertEquals(2, $result);
        }
    }
?>
