<?php 
        include('functions.php');
        // http://~~/login 으로 들어오면 가장 먼저
        // 아래 조건문 검사. (로그인 되어있는지)
        if (!isLoggedIn()) {

        // 'msg'라는 이름의 세션에 메세지 할당해서 저장
            $_SESSION['msg'] = "You must log in first";

            /* header()함수 : HTTP 프로토콜의 "헤더"에 텍스트를 출력하는 함수
            서버에서 이 index.php를 보낼 때 헤더에 페이지의 정보를 담아 보내고,
            이후에 (실제 표시되는) body를 붙여서 보낸다.

            브라우저에서 http://~~/login 에 접속하면 이 index.php가 전송되고
            이 때 header()함수에서 location을 지정하면 body가 출력되기 전
            헤더에서 location의 주소로 Redirect(페이지 이동)를 수행한다.
            
            그렇기 때문에 login.php로 이동하게된다. */
            header('location: login.php');

            /*
            다르게 말하면 로그인이 돼어있을 때만 여기(이 주석과 아래 html)에 도달한다.
            */
    }
?>
<!DOCTYPE html>
<html>
<head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div class="header">
                <h2>Home Page</h2>
        </div>
        <div class="content">
                <!-- if 'success'라는 이름의 세션이 존재하는지.
                        즉 로그인 성공을 해놓은 상태인지 검사하는조건문 -->
                <?php if (isset($_SESSION['success'])) : ?>
                        <!-- 세션의 'success'가 존재하지 않으면 여기 도달하지 못함 -->
                        <div class="error success" >
                                <h3>
                                        <?php 
                                                /* <!-- "You are now Logged in" 메세지를 출력하고
                                                바로 unset()함수 : 변수를 제거하기때문에
                                                세션의 'success'가 존재하는 최초 1회만 실행된다.
                                                
                                                이제부터 로그인 되었다는 걸 표시하기 위함 */
                                                echo $_SESSION['success']; 
                                                unset($_SESSION['success']);
                                        ?>
                                </h3>
                        </div>
                <?php endif ?>

                <div class="profile_info">
                        <img src="images/user_profile.png"  >

                        <div>
                                <!-- 세션의 'user' 가 존재하면 이 주석이 속한 div태그에 아래 내용(로그인 정보) echo(출력) -->
                                <?php  if (isset($_SESSION['user'])) : ?>
                                        <!-- 유저네임 출력 -->
                                        <strong><?php echo $_SESSION['user']['username']; ?></strong>

                                        <small>
                                                <!-- ucfirst(문자열) : 맨 첫 글자가 알파벳일 경우 대문자로 치환
                                                유저타입 ( User/ Admin ) 출력 -->
                                                <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
                                                <br>
                                                <!-- 로그아웃 링크. "?" 뒤의 문자열 "AAA=BBB&CCC=DDD&,,,,"은 쿼리 스트링으로,
                                                Key=Value&Key=Value&,,, 의 형태로 [GET]방식으로 요청이 전달된다.
                                                GET으로 전송받으면 $_GET 슈퍼글로벌 배열에 저장된다.

                                                $_GET['logout'] = 1 << (이렇게)
                                                따라서 functions.php에 이를 처리하는 if문이 있고,
                                                그 블럭에 로그아웃을 처리하는 로직이 있다.
                                                
                                                링크이므로 클릭하면 index.php를 다시 요청하게됨
                                                -> functions.php가 include되면서 logout검사 if문 실행 ->참 -> 로그아웃 
                                                -->
                                                <a href="index.php?logout='1'" style="color: red;">logout</a>
                                        </small>

                                <?php endif ?>
                        </div>
                </div>
        </div>
</body>
</html>