<?php

    class RepeatCounter
    {
        // function countRepeats($word_input, $sentence_input)
        // {
        //     $count = 0;
        //     $sentence_arr = explode(" ", $sentence_input);
        //     foreach ($sentence_arr as $item) {
        //         if ($word_input == $item) {
        //             $count++;
        //         }
        //     }
        //     return $count;
        // }

        function countRepeats($word_input, $sentence_input)
        {
            $stripped_sentence = "";
            $count = 0;
            for ($i = 0; $i < strlen($sentence_input); $i++) {
                if (ctype_alpha($sentence_input[$i]) || (ctype_space($sentence_input[$i]))) {
                    $stripped_sentence = $stripped_sentence . $sentence_input[$i];
                }
            }
            $sentence_arr = explode(" ", $stripped_sentence);
            foreach ($sentence_arr as $item) {
                if ($word_input == $item) {
                    $count++;
                }
            }
            return $count;
        }
    }
?>
