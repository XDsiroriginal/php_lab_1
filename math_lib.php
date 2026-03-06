<?php
    function square($x)
    {
        return $x * $x;
    }

    function cube($x)
    {
        return $x * $x * $x;
    }

    function isEven($x)
    {
        if ($x % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }
