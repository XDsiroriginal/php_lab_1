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
    const SITE_NAME = '';

    echo 'SITE_NAME: ' . SITE_NAME;
    //echo '<br> site_name: ' .  site_name;
    echo '<br><br> каталог: ' . __DIR__;
    echo '<br> линия: ' . __LINE__;
    echo '<br><br> определена ли константа VERSION: ' . (defined('VERSIONS') ? 'да' : 'нет');
