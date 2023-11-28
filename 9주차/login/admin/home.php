<?php 
include('../functions.php');

// admin 세션 ( admin으로 로그인한 상태 )가 아니면
// 로그인부터 하라는 메세지 생성 후 login.php로 이동
if (!isAdmin()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: ../login.php');
}

// 로그아웃 버튼을 눌렀을 때 로그아웃 후 login.php로 이동
if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <style>
        .header {
                background: #003366;
        }
        button[name=register_btn] {
                background: #003366;
        }
        </style>
</head>
<body>
        <div class="header">
                <h2>Admin - Home Page</h2>
        </div>
        <div class="content">
                <!-- index.php와 같이 최초 한 번 로그인 성공 메세지 출력 -->
                <?php if (isset($_SESSION['success'])) : ?>
                        <div class="error success" >
                                <h3>
                                        <?php 
                                                echo $_SESSION['success']; 
                                                unset($_SESSION['success']);
                                        ?>
                                </h3>
                        </div>
                <?php endif ?>

                <!-- index.php와 같이 로그인 정보 출력 -->
                <div class="profile_info">
                        <img src="../images/admin_profile.png"  >

                        <div>
                                <?php  if (isset($_SESSION['user'])) : ?>
                                        <strong><?php echo $_SESSION['user']['username']; ?></strong>

                                        <small>
                                                <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
                                                <br>
                                                <a href="home.php?logout='1'" style="color: red;">logout</a>
                                                
                                                <!-- 유저를 생성하는 링크 -->
                                                &nbsp; <a href="create_user.php"> + add user</a>
                                        </small>

                                <?php endif ?>
                        </div>
                </div>
        </div>
</body>
</html>