<!--
$GLOBALS
$_SERVER : 현재 서버 정보를 알려줌
$_REQUEST : PHP form 에서 전송한 데이터를 수집할 때 사용
$_POST : 웹에서 from을 통해 보낸 정보를 수집하는데  사용
$_GET : url을 통해서 정보를 주고 받는다.
$_FILES
$_ENV
$_COOKIE
$_SESSION
-->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>수퍼 전역 변수</title>
</head>
<body>
    <!-- $GLOBALS 예제 -->
    <?php
        $x = 75;
        $y = 25;

        function addition() {
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        addition();
        echo $x; // 100
        echo "<hr>";
    ?>
    <!-- $_SERVER 예제 -->
    <?php
        echo $_SERVER['PHP_SELF']; // 현재 실행하고 있는 파일
        echo "<br>";
        echo $_SERVER['SERVER_NAME']; // 호스트 이름
        echo "<br>";
        echo $_SERVER['HTTP_HOST']; // 현재 요청에 대한 호스트 헤더
        echo "<br>";
        echo $_SERVER['HTTP_REFERER']; // 현재 페이지 URL
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT']; // 접속한 브라우저 정보
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME']; // 현재 실행중인 스크립트의 절대 주소
        echo "<hr>";
    ?>
    <!-- $_REQUEST 예제 -->    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>

    <?php
    $name = $_REQUEST['fname'];
    echo $name;
    ?>

    <!-- $_POST 예제 -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>

    <?php
    $name = $_POST['fname'];
    echo $name;
    ?>

    <!-- $_GET 예제 -->
    <?php
        // echo $_GET['x'].$_GET['y']; // http://localhost/PHPinVisualStudioCode/PhpSuperglobals.php?x=hello&y=world
    ?>
</body>
</html>