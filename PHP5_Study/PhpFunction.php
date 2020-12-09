<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 함수</title>
</head>
<body>
    <?php
        function familyname1($fname) { // 매개변수 선언
            echo "$fname Refsnes.<br>";
        }    
        familyname1("Jani");
        familyname1("Hege");
        familyname1("Stale");
    ?>
    <?php
        function familyName2($fname, $year) {
            echo "$fname Refsnes. Born is $year <br>";
        }
        familyName2("Hege", "1975");
    ?>
    <?php
        function setHeight($minheight = 50) {
            echo "The height is :  $minheight <br>";
        }

        setHeight(); // 50
        setHeight(350); // 350
        setHeight(135); // 135
    ?>
    <?php
        function sum($x, $y) {
            $z = $x + $y;
            return $z;
        }
        echo "5 + 10 =" . sum(5, 10) . "<br>";
        echo "<hr>";
    ?>
    <?php
        function number($x) {
            for($x = 0; $x < 11; $x++) {
                echo $x;
            }
        }
        for($x = 0; $x < 5; $x++) {
            number(0); echo "<br>";
        }
    ?>

</body>
</html>