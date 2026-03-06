<?php
    const fileName = __FILE__;
    const lineNumber = __LINE__;
    const phpVersion = PHP_VERSION;
    define("osVersion", php_uname());
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Информация о скрипте</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            padding: 100px;
        }

    </style>

</head>
<body>
<p>Текущая дата и время - '<?php echo date('d.m.Y H:i:s') ?>' </p>
<p>Имя текущего файла - '<?php echo fileName ?>'</p>
<p>номер текущей строки - '<?php echo lineNumber ?>' </p>
<p>Версия PHP - '<?php echo phpVersion ?>'</p>
<p>операционная система - '<?php echo osVersion ?>'</p>
</body>
</html>