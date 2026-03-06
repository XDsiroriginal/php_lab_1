<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        padding: 100px;
        font-size: 20px;
    }

</style>

<?php
    $_int = 5;
    $_float = 5.5;
    $_string = "hello ttit";
    $_bool = true;
    $_null = null;

    $_numberString = "123";

    echo gettype($_int) . ": " . $_int . "<br>" . gettype($_float) . ": " . $_float . "<br>" . gettype($_string) . ": " . $_string . "<br>" . gettype($_bool) . ": " . $_bool . "<br>" . gettype($_null) . ": " . $_null;
    echo "<br><br> неявное преобразование: " . $_numberString + $_int;
    echo "<br> явное преобразование: " . (int)$_float;
    echo "<br><br> Проверка, существует ли переменная: " . (isset($_noIsSet) ? 'есть' : 'нету');
    $_noIsSet = 'isSet';
    echo "<br> emty(): " . (empty($_noIsSet) ? 'нету' : $_noIsSet);
    unset($_noIsSet);
    echo "<br> unset(): " . (empty($_noIsSet) ? 'нету' : $_noIsSet);

