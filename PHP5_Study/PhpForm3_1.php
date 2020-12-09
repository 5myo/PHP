<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 입출력과 폼 에러처리2</title>
    <style>
        .error {color: #FF0000;}
</style>
</head>
<body>  
    <?php
        $nameErr = $emailErr = $genderErr = $websiteErr = ""; // 초기화
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") { // form이 POST 방식일 경우
            if (empty($_POST["name"])) { // 이름을 입력하지 않았을 경우 에러 처리
                $nameErr = "이름을 입력해 주세요.";
            } else {
                $name = test_input($_POST["name"]); 
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) { // 입력한 값이 문자인지 확인
                    $nameErr = "이름을 확인해 주세요.";
                }
            }
            
            if (empty($_POST["email"])) { // 이메일을 입력하지 않았을 경우 에러 처리
                $emailErr = "이메일을 입력해 주세요.";
            } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // 입력한 값이 이메일 형태인지 확인
                    $emailErr = "이메일을 확인해 주세요.";
                }
            }
                
            if (empty($_POST["website"])) {
                $website = "";
            } else {
                $website = test_input($_POST["website"]);
                // 제대로 된 URL 형태인지 확인
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                    $websiteErr = "URL 주소를 확인해 주세요.";
                }
            }

            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }

            if (empty($_POST["gender"])) { // 라디오 버튼 미선택 시 에러 처리
                $genderErr = "성별을 확인해 주세요.";
            } else {
                $gender = test_input($_POST["gender"]);
            }
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
    <p><span class="error">* 필수기입란</span></p>
    <form method="post" action="PhpForm3_2.php">  
        이름 : <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail : <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        블로그 : <input type="text" name="website" value="<?php echo $website;?>">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        인사말 : <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <br><br>
        성별 :
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="남자">남자
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="여자">여자
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="비공개">비공개  
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="등록">  
    </form>

</body>
</html>