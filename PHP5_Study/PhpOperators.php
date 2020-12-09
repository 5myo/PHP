<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 연산자 공부</title>
</head>
<body>
    <!-- 산술 연산자 -->
    <?php
        $x = 20;
        $y = 3;

        echo $x % $y; // 2
        echo $x ** $y; // 8000
    ?> 
    <!-- 대입 연산자 -->
    <?php
        $x1 = 10;
        $x2 = 5;
        $x3 = 7;
        $y1 = 4;
        $y2 =8;
        $y3 = 3;
        $x1 = $y1;
        $x2 += $y2;
        $x3 -= $y3; // x3 - y3 

        echo $x1."\n"; // 4
        echo $x2."\n"; // 13
        echo $x3; // 4
    ?>
</body>
</html>