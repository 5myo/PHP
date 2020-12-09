<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>반복문과 제어구조</title>
</head>
<body>
    <?php
       // while문
       $x = 1;
       while($x <= 5) {
           echo "The while문 number is: $x <br>";
           $x++;
       } 
       echo "<hr>";
       // do while문
       do { // do부분에 있는 코드는 무조건 실행
           echo "The do while문 number is : $x <br>";
           $x++;
       } while($x <= 5);
       echo "<hr>";
    ?>
    <?php
        // for문
        for($x = 0; $x <= 10; $x++) {
            echo "The for문 number is : $x <br>";
        }  
        echo "<hr>";
        // foreach문
        $colors = array("red", "blue", "green");
        foreach($colors as $value) { // 할당된 값만큼 출력
            echo "$value <br>";
        }
    ?>
</body>
</html>