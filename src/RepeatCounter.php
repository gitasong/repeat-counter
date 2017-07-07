<?php

    class RepeatCounter
    {
        function wordCount($word, $string)
        {
            $count = 0;
            if (strpbrk($string, $word)) {
                $count++;
            }
            return $count;
        }
    }
?>
