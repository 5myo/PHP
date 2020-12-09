<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 입출력과 폼 에러처리</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>  
    <?php
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) { // 이름이 빈 값일 경우 에러처리
                $nameErr = "이름을 입력해 주세요";
            } else {
                $name = test_input($_POST["name"]);
            }
            if (empty($_POST["email"])) { // 이메일이 빈 값일 경우 에러처리
                $emailErr = "이메일을 입력해 주세요";
            } else {
                $email = test_input($_POST["email"]);
            }   
            if (empty($_POST["website"])) {
                $website = "";
            } else {
                $website = test_input($_POST["website"]);
            }
            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }
            if (empty($_POST["gender"])) { // 라디오 버튼 미선택 시 에러처리
                $genderErr = "성별을 확인해 주세요";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h2>PHP Form태그 연습</h2>
    <p><span class="error">* 필수기입란</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    이름 : <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>

    E-mail : <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>

    블로그 : <input type="text" name="website">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>

    인사말 : <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>

    성별:
    <input type="radio" name="gender" value="남성">남성
    <input type="radio" name="gender" value="여성">여성
    <input type="radio" name="gender" value="비공개">비공개
    <span class="error">* <?php echo $genderErr;?></span>
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