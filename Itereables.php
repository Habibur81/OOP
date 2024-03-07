<?php
    function myFunction($arr)
    {
        foreach($arr as $key => $value)
        {
            echo "Key is ". $key ." Number is ".$value. "<br>";
        }
    }

    $arr = [1,2,3];

    myFunction($arr);