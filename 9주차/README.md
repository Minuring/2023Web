# 📁웹프로그래밍 9주차 과제
웹프로그래밍 9주차 과제입니다.
<br>
이 README에는 <b>특히</b> 문제를 풀면서 어려웠던 점, 새로 알게 된 점 등을 기록하였습니다.
<br>

## 📖 문제

### 실습 때 제작한 로그인 폼 주석 달기
<small>자세한 설명은 코드에 주석으로 달았습니다.</small><br>

#### 개념 및 함수
  - **header(string str)**
    <pre>
    HTTP 프로토콜의 <b>헤더</b>에 텍스트를 출력하는 함수
  
    서버에서 페이지를 보낼 때 헤더에 페이지의 정보를 담아 보내고,
    이후에 (실제 표시되는) body를 붙여서 보낸다.
  
    브라우저에서 http://~~/login 에 접속하면 이 index.php가 전송된다.
  
    이 때 header함수에서 location을 지정하면 body가 출력되기 전
    헤더에서 location의 주소로 Redirect(페이지 이동)를 수행한다.
    </pre>
  - **세션**<br>
    <pre>
    웹 사이트의 여러 페이지에 걸쳐 사용되는 사용자 정보를 저장하는 방법 
    (사용자가 브라우저를 닫아 서버와의 연결을 끝내는 시점까지)
    서버측에 세션의 값만 저장, 키값만 클라이언트에 남겨둠
    이때 **$_SESSION** 슈퍼글로벌 배열에 세션들이 K,V 형태로 저장됨
    </pre>
  - **session_start()**
    <pre>
    새로운 세션을 시작하거나 (웹 서버에 의해 무작위로 세션 아이디 생성, 클라이언트측에 키로 저장)
    기존의 세션을 다시 시작 (세션 아이디가 존재하면) */
    </pre>
  - **session_destroy()**
    <pre>
    모든 세션을 삭제 및 종료한다. 단, $_SESSION 배열이 초기화되지는 않는다.
    </pre>
  - **문자열 Escape**<br>
    [functions.php](functions.php) 의 `e(string str)` 함수
    <pre>
    입력 내용이 ' 와 같이 특수문자를 포함하면 쿼리문의 문법과 중첩되어 다른 값이 적용될 수 있다.
    사용자가 입력창에 악의적으로 DB에 관한 명령어를 입력하면 그 명령어가 실행되어버릴 수 있다.
    따라서 DB의 쿼리문을 작성할 때 입력을 그대로 사용하지 않고, Escape시켜서 쿼리문을 작성한다.
    PHP에서 mysqli_real_escape_string(DB,문자열) 함수를 통해 escape된 문자열을 얻을 수 있다.
    </pre>
  - **ucfirst(string str)**
    <pre>
    파라미터 문자열의 첫 문자가 알파벳이면 대문자로 치환한다.
    </pre>
  
<br>

#### index.php <br>

  ✏️ 로그인이 되어있으면 홈 페이지로, 로그인이 되어있지 않으면 [login.php](login.php) 로 이동시킨다.<br>

  - `$_SESSION['user']` 존재여부에 따라 로그인 여부 판단<br>
    ($_SESSION['user']는 [functions.php](functions.php)의 `login()`함수에서 로그인할 때 고유 아이디로 대입한다.) 
  - 최초 로그인 시 "You are now logged in" 메세지 출력
  - 로그아웃 버튼 클릭 시 `GET`방식으로 `(키)logout=(값)'1'`을 전달<br>
  -> `$_GET['logout'] == '1'`이 되고 [functions.php](functions.php)를 통해 로그아웃 처리됨

  - 로그인 성공 화면 ( 기본. 홈. 페이지 ) 츌력 

<br>

#### functions.php <br>

  ✏️ 로그인, 로그아웃, 회원가입, 어드민/일반유저, DB 등 모든 기능 담당<br>
  
  - 로그인, 회원가입 시 `form`태그의 `POST`방식으로 전송된 입력이 `$_POST` 배열에 저장됨
    - 유저 타입(Admin / User) 검사하여 각각에 맞는 작업을 수행
    - `getUserById($id)` : DB에 저장된 uid (회원가입할 때 생성된 고유 ID)를 이용해 유저 정보를 읽어옴
  - 유효성 검사 : 비어있는 입력이 없는지, 재확인 비밀번호가 비밀번호와 같은 지 등
  - 에러 출력 : 에러가 하나 이상 발생하면 에러를 출력
  - 비밀번호 암호화 : 입력한 비밀번호 문자열을 `md5` 해시값으로 변환
  - DB 작업
    - DB 연결 함수 `mysqli_connect(아이피,아이디,비밀번호,DB명,포트)`<br>
    실습 기준 laragon에 만든 mysql DB 'multi_login'에 연결<br>
    - 입력 문자열을 [Escape 처리](#개념-및-함수) 하여 쿼리문을 작성한다.<br>
   
<br>

#### login.php <br>

  ✏️ 로그인 폼 창으로, `POST` 방식으로 입력한 Username과 Password를 전송한다.

  - `$_POST['login_btn']` Key가 생김. (값은 할당되지 않지만 키가 존재)
  - [functions.php](#functionsphp-br)에서 `login()`함수 실행

<br>

#### register.php <br>

  ✏️ 회원가입 창으로, `POST` 방식으로 입력한 Username과 Email, Password를 전송한다.

  - `$_POST['register_btn']` Key가 생김. (값은 할당되지 않지만 키가 존재)
  - [functions.php](#functionsphp-br)에서 `register()`함수 실행

<br>

#### home.php <br>

  ✏️ **Admin**으로 로그인이 되어 있으면 관리자 페이지로, 그게 아니라면 [login.php](#loginphp-br) 로 이동시킨다. 

  - [index.php](#indexphp-br) 와 같지만 [functions.php](#functionsphp-br) 의 `!isAdmin()` 함수를 통해 Admin이 아니면 [login.php](#loginphp-br) 로 이동시킨다.
  - 추가로 [create_user.php](#createuserphp-br) 로 이동해 새 유저를 생성하는 링크가 있다.

<br>

#### create_user.php <br>

  ✏️ 유저를 생성하는 창으로, [register.php](#registerphp-br) 와 같은 일을 하지만 유저 타입 (Admin/User)를 함께 지정한다.<br>

  - [index.php](#indexphp-br) 와 같지만 [functions.php](#functionsphp-br) 의 `!isAdmin()` 함수를 통해 Admin이 아니면 [login.php](#loginphp-br) 로 이동시킨다.
  - 추가로 [create_user.php](#createuserphp-br) 로 이동해 새 유저를 생성하는 링크가 있다.