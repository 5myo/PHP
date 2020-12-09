<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 입출력과 폼</title>
</head>
<body>
    <?php
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
    }

    function test_input($data) {
    $data = trim($data); // 문자열 의 맨 앞과, 맨 뒤 의 여백 제거 함수
    $data = stripslashes($data); // 백 슬래시 제거 함수
    // HTML의 코드로 인식될 수 있는 문자열의 일부내용을
    // 특수문자(HTML entities)형태로 변환하여
    // 출력해주는 역활을 하는 함수
    $data = htmlspecialchars($data); 
    return $data;
    }
    ?>

    <h2>PHP Form태그 연습</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    이름: <input type="text" name="name">
    <br><br>
    E-mail: <input type="text" name="email">
    <br><br>
    블로그: <input type="text" name="website">
    <br><br>
    인사말: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    성별:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br><br>
    <input type="submit" name="submit" value="등록">  
    </form>

    <?php
    echo "<h2>가입 정보 확인</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>

</body>
</html>