<?php

    class RepeatCounter
    {
        function wordCount($word, $string)
        {
            $count = 0;
            $string_arr = explode(" ", $string);
            foreach ($string_arr as $item) {
                if ($word == $item) {
                    $count++;
                }
            }
            return $count;
        }
    }
?>
