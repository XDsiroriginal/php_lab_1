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
    $_intArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    echo 'чётные элементы массива: ';
    for($_i = 0; $_i < count($_intArr); $_i+= 2) {
        echo $_intArr[$_i] . " ";
    }

    $_students = [
            'firstStudent' => [
                    'name' => 'Иван',
                    'age' => 18,
                    'grade' => 3.4,
            ],
            'secondStudent' => [
                    'name' => 'Петр',
                    'age' => 19,
                    'grade' => 5.0,
            ],
            'theirdStudent' => [
                    'name' => 'Алексей',
                    'age' => 20,
                    'grade' => 4.3,
            ],
    ];

    echo '<br><br> имена студентов, у которых оценка выше 4.0: ';

    foreach($_students as $_student) {
        if ($_student['grade'] > 4.0) {
            echo $_student['name'] . ", ";
        }
    }

    $_students['forthStudent'] = [
                    'name' => 'Анна',
                    'age' => 18,
                    'grade' => 3.1,
    ];

    $_ivanAge = function($_students) {
        foreach($_students as $_student) {
            if ($_student['name'] === 'Иван') {
                return $_student['age'];
            }
            return 'null';
        }
    };

    echo '<br><br> возраст Ивана: ' . $_ivanAge($_students);

    function deleteOutsideStudent(&$_students)
    {
        $_minGrade = 999;
        $_outsideKey = null;

        foreach($_students as $_key => $_student) {
            if ($_student['grade'] < $_minGrade) {
                $_minGrade = $_student['grade'];
                $_outsideKey = $_key;
            }
        }

        unset($_students[$_outsideKey]);
    }

    deleteOutsideStudent($_students);

    echo '<br><br>';
    foreach($_students as $_student) {
        echo $_student['name'];
        echo '<ul>';
        echo '<li>' . $_student['age'] . '</li>';
        echo '<li>' . $_student['grade'] . '</li>';
        echo '</ul>';
        echo '<br>';
    }