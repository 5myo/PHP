<!--
local : 지역 변수
global : 전역 변수
static : 고정 변수

변수 선언은 달러($)로 시작한다.
변수는 대소문자를 구분합니다.
할당은 오른쪽에서 왼쪽으로 진행된다.
-->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 변수 공부</title>
</head>
<body>
    <?php
        // $ : php 변수 설정
        // php는 문자열, 정수, 실수 타입 지정을 안해줘도 됨    
        $txt = "Mint";
        $x = 5;
        $y = 10.5;

        echo $txt;
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y;
        echo "<br>";
        // . 을 이용하여 문자와 변수를 같이 출력할 수 있다.
        echo "I Love". $txt."!";
        echo "<hr>";
    ?>
    <?php
        $x = 5;
        $y = 10;

        function myTest() {
            global $x, $y;
            $y = $x + $y;
        }
        myTest();
        echo $y; // 15
    ?>
    <?php
    echo "<hr>";
        $x = 5;
        $y = 10;

        function myTest2() {
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        myTest2();
        echo $y; // 15
    ?>
    <?php
    echo "<hr>";
        function myTest3() {
            static $x = 0; // 고정 함수, 값 유지
            echo $x;
            $x++;
        }
        myTest3(); // 0
        myTest3(); // 1
        myTest3(); // 2
    ?>
</body>
</html>