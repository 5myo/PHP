<?php
    echo "<h2>가입 정보 확인</h2>";
    $name = $_POST['name'];
    echo "환영합니다 ".$name."님!";
    $email = $_POST['email'];
    echo "<br>";
    echo $name."님의 이메일은 ".$email."입니다.";
    echo "<br>";
    $website = $_POST['website'];
    echo $name."님의 블로그 주소는 ".$website."입니다.";
    echo "<br><br>";
    $comment = $_POST['comment'];
    echo "(인사말)<br>";
    echo $comment;
    echo "<br><br>";
    $gender = $_POST['gender'];
    echo $name."님의 성별은 ".$gender."입니다.";
?>