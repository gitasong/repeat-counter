<?php

    class RepeatCounter
    {
        function countRepeats($word_input, $sentence_input)
        {
            $count = 0;
            $sentence_arr = explode(" ", $sentence_input);
            foreach ($sentence_arr as $item) {
                if ($word_input == $item) {
                    $count++;
                }
            }
            return $count;
        }
    }
?>
