<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>else if문 테스트</title>
</head>
<body>
    <?php
        $favcolor = "green";
        if($favcolor === "green") {
            echo "제가\n좋아하는\n컬러는\n".$favcolor."입니다";
        } else if($favcolor === "red") {
            echo "제가\n좋아하는\n컬러는\n".$favcolor."입니다.";
        } else {
            echo "제가\n좋아하는\n컬러는\n빨간색도\n초록색도\n아닙니다.";
        }
    ?>
</body>
</html>