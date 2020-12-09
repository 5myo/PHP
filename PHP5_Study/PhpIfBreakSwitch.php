<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if문, switch문 연습</title>
</head>
<body>
    <!-- if문 -->
    <?php
        $x = 20;
        $y = 10;
        if($x > $y) {
            echo $x."은".$y."보다\n크다";
        }else {
            echo $y."은".$x."보다\n크다";
        }
        echo "<br>";

        $t = date("H"); // 시간 함수
        if($t < "10") {
            echo "Have a good morning!";
        } else if($t < "20") {
            echo "Have a good day!";
        } else {
            echo "Hava a good night!";
        }
    ?>
    <!-- switch문 -->
    <?php
    $x = 10;
    switch($x) {
        case 10:
            echo "10입니다";
        break;
        case 20:
            echo "20입니다";
        break;
        default:
            echo "그 밖의 숫자입니다";
    }
    ?>
</body>
</html>