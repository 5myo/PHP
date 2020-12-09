<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 데이터 타입</title>
</head>
<body>
    <!-- PHP Integer(정수형) -->
    <?php
        $x = 5985;
        var_dump($x); // int(5985)
        echo "<br>";
    ?>
    <!-- PHP Float(실수형) -->
    <?php
        $x = 10.365;
        var_dump($x);
        echo "<br>";
    ?>
    <!-- PHP Array(배열형) -->
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        var_dump($cars);
        echo $cars[0];
        echo $cars[1];
        echo $cars[2];
    ?>
    <!-- PHP Object -->
    <?php
        class Car {
            function Car() {
                $this -> model = "VW";
            }
        }
        // create an object
        $herbie = new Car();

        // show object properties
        echo $herbie -> model;
    ?>
    <!-- PHP null -->
    <?php
        $x = "Hello world";
        $x = null;
        var_dump($x);
    ?>
    <!-- PHP String -->
    <?php
        // 문자의 길이를 알려주는 함수
        echo strlen ("Hello world"); // 11
        // 단어의 개수를 알려주는 함수
        echo str_word_count("Hello world"); // 2
        // 문자를 뒤집어서 출력
        echo strrev("Hello world"); // dlrow olleH
        // 문자의 위치를 알고 싶을 때(0부터 시작)
        echo strpos("Hello world", "world"); // 6
        // 들어가는 문자를 바꾸고 싶을 때 사용
        echo str_replace("world", "Dolly", "Hello world"); // Hello Dolly
    ?>
</body>
</html>