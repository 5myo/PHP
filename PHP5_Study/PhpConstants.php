<!--
상수 
: 변하지 않는 수
: 달러를 사용하지 않는다
: 전역 변수
:  define(name, value, case-insensitive)
: name -> 상수의 이름
: value -> 상수에 저장될 내용
: case-insensitive -> 대소무자 구분 여부(기본은 false)
-->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 상수 공부</title>
</head>
<body>
    <?php
        // 상수 GREETING 선언 및 값 할당
        // 대소문자 구분 한다
        // define("GREETING", "Welcome to W3Schools.com");
        // echo GREETING; 

        // 대소문자 구분 안함
        define("GREETING", "Welcome to W3Schools.com", true);
        define("test", "상수 테스트", true);
        echo greeting; 
        echo TEST;
        echo "<br>";
        function myTest() {
            echo GREETING;
        }
        myTest();
    ?>
</body>
</html>