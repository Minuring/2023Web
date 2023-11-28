<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
        <title>Registration system PHP and MySQL</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div class="header">
                <h2>Login</h2>
        </div>
        <form method="post" action="login.php">
                <!-- functions.php의 display_error()함수 실행 -->
                <?php echo display_error(); ?>

                <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username" >
                </div>
                <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password">
                </div>
                <div class="input-group">
                        <!-- $_POST['login_btn'] 키가 생김. (값은 할당X. 존재여부:존재) -->
                        <button type="submit" class="btn" name="login_btn">Login</button>
                </div>
                <p>
                        Not yet a member? <a href="register.php">Sign up</a>
                </p>
        </form>
</body>
</html>