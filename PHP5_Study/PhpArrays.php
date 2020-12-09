<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 배열</title>
</head>
<body>
    <?php
        $babe = array(32, 24);
        $babe[] = 70;
        print ('bust : ' . $babe[0]."<br>");
        print ('hips : ' . $babe[1]."<br>");
        print ('add : ' . $babe[2]);  
        echo "<hr>";      
    ?>
    <?php
        $babe = array(
            'bust' => 32, // 키값 지정
            'waist' => 24,
            'hips' => 32
        );
        print("bust : ".$babe['bust']."<br>");
        print("waist : ".$babe['waist']."<br>");
        print("hips : ".$babe['hips']."<br>");
        
        // 이중 배열
        $babe['modeling'] = array('fashion', 'lingerie', 'swimwear');
        print('modeling : '.$babe['modeling'][0]);
        echo "<hr>";
    ?>
    <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        foreach($age as $x => $x_value) {
            echo "Key = ".$x.",Value=".$x_value;
            echo "<br>";
        }
        echo "<hr>";
    ?>
    <?php
        // 이중 배열 연습 (1)
        $cars = array (
            array("Volvo",2,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
        );
        
        echo $cars[0][0]."In stock : ".$cars[0][1],"sold : ".$cars[0][2]."<br>";
        echo $cars[1][0]."In stock : ".$cars[1][1],"sold : ".$cars[1][2]."<br>";
        echo $cars[2][0]."In stock : ".$cars[2][1],"sold : ".$cars[2][2]."<br>";
        
        echo "<hr>";
    ?>
    <?php
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
        );
        for($row = 0; $row < 4; $row++) {
            echo "<p><b>Row number $row</b></p>";
            echo "<ul>";

            for($col = 0; $col < 3; $col++) {
                echo "<li>".$cars[$row][$col]."</li>";
            }
            echo "</ul>";
        }
    ?>
    <!-- 배열 정렬 -->
    <?php
        // sort() : 배열을 순서대로 정렬 (알파벳, 숫자 등)
        $cars = array("Volvo", "BMW","Toyota");
        sort($cars);

        $clength = count($cars); // $cars가 가진 배열 길이를 반환
        for($x = 0; $x < $clength; $x++) {
            echo $cars[$x]."<br>";
        }
        // rsort() : 배열을 역순으로 정렬
        // asort() : value 값을 순서대로 정렬
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        asort($age);

        foreach($age as $x => $x_value) {
            echo "Key=".$x.", Value=".$x_value;
        }
        // ksort() : key 값을 순서대로 정렬
        // arsort() : value 값을 역순으로 정렬
        // krsort() : key 값을 역순으로 정렬
    ?>
</body>
</html>