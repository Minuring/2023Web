<?php
/*
세션 : 웹 사이트의 여러 페이지에 걸쳐 사용되는 사용자 정보를 저장하는 방법 
(사용자가 브라우저를 닫아 서버와의 연결을 끝내는 시점까지)
서버측에 세션의 값만 저장, 키값만 클라이언트에 남겨둠
이때 $_SESSION 슈퍼글로벌 배열에 세션들이 K,V 형태로 저장됨

PHP 기본 제공함수
새로운 세션을 시작하거나 (웹 서버에 의해 무작위로 세션 아이디 생성, 클라이언트측에 키로 저장)
기존의 세션을 다시 시작 (세션 아이디가 존재하면) */
session_start();

// mysql DB에 연결하는 함수
// mysqli_connect(아이피,아이디,비밀번호,DB명,포트)
$db = mysqli_connect('localhost', 'root', '', 'multi_login');

// 아이디, 이메일, 에러 변수 선언
$username = "";
$email    = "";
$errors   = array(); 

// register.php에서 Register버튼을 누르면 $_POST['register_btn']이 존재하게됨
// 회원가입 form의 action속성이 register.php이므로 register.php를 다시 로드하면서
// functions.php가 include되고, 이 때 아래 조건문에 도달하여 실행하게됨
if (isset($_POST['register_btn'])) {
        register();
}

// 회원가입 함수
function register(){
        // 함수 밖에서 선언된 변수를 사용하기 위해 global 키워드 사용
        global $db, $errors, $username, $email;

        // form으로부터 전송된 입력값들을 받는다.
        // 이 때, 아래 정의한 e()함수에서 문자열 escape처리(e함수에 주석으로 설명)를 한다.
        $username    =  e($_POST['username']);
        $email       =  e($_POST['email']);
        $password_1  =  e($_POST['password_1']);
        $password_2  =  e($_POST['password_2']);

        // form 유효성 검사. 정확하게 입력이 채워져 있음을 보장한다.
        if (empty($username)) { 
                array_push($errors, "Username is required"); 
        }
        if (empty($email)) { 
                array_push($errors, "Email is required"); 
        }
        if (empty($password_1)) { 
                array_push($errors, "Password is required"); 
        }
        if ($password_1 != $password_2) {
                array_push($errors, "The two passwords do not match");
        }

        // form에 에러가 없으면 회원가입을 진행한다.
        if (count($errors) == 0) {
                // md5(문자열) 함수 : 문자열에서 md5 해쉬값을 생성하는 함수
                // md5 : 해쉬값에서 원래의 문자열을 만들지는 못하나 같은 문자열에서 같은 해쉬값 생성
                $password = md5($password_1);// DB에 저장하기 전 비밀번호를 암호화한다(md5해쉬값으로)

                // 이 시점에서 'user_type'이 설정되어 있다는 말은 admin으로 유저생성을 하고있는 상황
                if (isset($_POST['user_type'])) {
                        $user_type = e($_POST['user_type']);
                        // DB에서 실행 할 query문 작성
                        $query = "INSERT INTO users (username, email, user_type, password) 
                                          VALUES('$username', '$email', '$user_type', '$password')";
                        // 위에서 작성한 query문 실행 : 유저 추가됨
                        mysqli_query($db, $query);
                        $_SESSION['success']  = "New user successfully created!!";

                        // admin/home.php로 이동
                        header('location: home.php');
                }else{
                        // DB에서 실행할 query문 작성 (user_type 항상 'user')
                        $query = "INSERT INTO users (username, email, user_type, password) 
                                          VALUES('$username', '$email', 'user', '$password')";
                        // 위에서 작성한 query문 실행 : 유저 추가됨
                        mysqli_query($db, $query);

                        // 생성된 유저의 고유한 uid(user identifier) 받아옴
                        $logged_in_user_id = mysqli_insert_id($db);

                        // 세션이 유지된 동안 로그인 상태를 유지
                        $_SESSION['user'] = getUserById($logged_in_user_id);
                        $_SESSION['success']  = "You are now logged in";

                        // 회원가입 절차가 끝나고 index.php로 이동
                        header('location: index.php');                          
                }
        }
}

// 유저의 고유한 uid를 이용해 DB에서 유저 정보를 가져옴
function getUserById($id){
        global $db;
        // SELECT : 데이터 조회. users테이블에서 id열이 $id인 유저 조회
        $query = "SELECT * FROM users WHERE id=" . $id;
        $result = mysqli_query($db, $query);

        // mysqli_fetch_assoc() : 데이터를 문자형 연관 배열로 반환
        $user = mysqli_fetch_assoc($result);
        return $user;
}

/* 파라미터로 주어진 문자열을 Escape 처리한다. 이유: 
입력 내용이 ' 와 같이 특수문자를 포함하면 쿼리문의 문법과 중첩되어 다른 값이 적용될 수 있음.
사용자가 입력창에 악의적으로 DB에 관한 명령어를 입력하면 그 명령어가 실행되어버릴 수 있다.
PHP에서 mysqli_real_escape_string(DB,문자열) 함수를 지원한다. */
function e($val){
        global $db;
        return mysqli_real_escape_string($db, trim($val));
}

/* 에러가 하나 이상 발생했으면 에러를 출력하는 함수 */
function display_error() {
        global $errors;

        // 에러가 하나 이상 있으면
        if (count($errors) > 0){
                echo '<div class="error">';
                        // 에러들을 출력한다.
                        foreach ($errors as $error){
                                echo $error .'<br>';
                        }
                echo '</div>';
        }
}       

// 이미 로그인 되어있는 지 확인하는 함수
function isLoggedIn()
{
        // 세션에 'user' 키값이 설정되어 있으면
        if (isset($_SESSION['user'])) {
                return true;
        }else{
                return false;
        }
}

// GET방식으로 전달 받은 'logout' 키가 존재하는지
if (isset($_GET['logout'])) {
        // 모든 세션 삭제 및 종료. $_SESSION 배열이 초기화되지는 않는다.
        session_destroy();
        // 세션의 'user' 키값 삭제
        unset($_SESSION['user']);
        // login.php로 이동
        header("location: login.php");
}

// login.php의 form에서 login_btn을 누르면 POST방식으로 form을 전송함.
// 이 때 submit 타입 버튼인 'login_btn'도 $_POST 배열에 존재
if (isset($_POST['login_btn'])) {
        // 즉 로그인 버튼을 눌렀으면 로그인().
        login();
}

// 로그인 함수
function login(){
        global $db, $username, $errors;

        // 입력받은 username과 password를 escape처리한다.
        $username = e($_POST['username']);
        $password = e($_POST['password']);

        // username, password가 적절하게 채워졌음을 보장한다.
        if (empty($username)) {
                array_push($errors, "Username is required");
        }
        if (empty($password)) {
                array_push($errors, "Password is required");
        }

        // 오류가 없으면
        if (count($errors) == 0) {
                // password문자열에대한 md5 해시값 생성
                $password = md5($password);

                // DB에서 username과 password가 일치하는 데이터를 조회하는 쿼리문 작성
                $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";

                // 쿼리문 실행
                $results = mysqli_query($db, $query);

                // 일치하는 데이터가 1개인 지 검사
                // (회원가입 할 때 username과 password가 같은 여러 계정을 가입해도
                // 가입이 되는데 이를 방지하는 로직이 없음)
                if (mysqli_num_rows($results) == 1) { // 유저 조회 성공
                        // 유저 데이터를 DB에서 추출
                        $logged_in_user = mysqli_fetch_assoc($results);

                        // admin인 지 검사
                        if ($logged_in_user['user_type'] == 'admin') {

                                $_SESSION['user'] = $logged_in_user;
                                $_SESSION['success']  = "You are now logged in";
                                
                                // admin은 로그인 후 home.php로 이동
                                header('location: admin/home.php');               
                        }else{
                                $_SESSION['user'] = $logged_in_user;
                                $_SESSION['success']  = "You are now logged in";

                                // user는 로그인 후 index.php로 이동
                                header('location: index.php');
                        }
                }else {
                        // 유저 조회에 실패했을 떄 여기에 도달
                        // 에러 추가
                        array_push($errors, "Wrong username/password combination");
                }
        }
}

// admin인지 확인하는 함수
function isAdmin()
{
        // 세션의 'user'키가 설정되어 있고
        // 해당 유저의 타입이 adminn이면 true
        if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
                return true;
        }else{
                return false;
        }
}