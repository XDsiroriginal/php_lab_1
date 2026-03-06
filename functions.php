<?php
    function calculateSum(...$_int)
    {
        $_sum = 0;

        for ($i = 0; $i < count($_int); $i++)
        {
            $_sum += $_int[$i];
        }

        return $_sum;
    }

    function average($arr)
    {
        if (empty($arr)) {
            return 0;
        }
        else {
            return calculateSum(...$arr) / count($arr);
        }
    }

    function changeValue(&$var)
    {
        $var += 10;
        echo $var;
        return $var;

    }

    function getInfo($name, $age = '') {
        echo "Имя: $name , Возраст: $age";
    }