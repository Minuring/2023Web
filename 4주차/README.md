# 📁웹프로그래밍 4주차 과제
웹프로그래밍 4주차 과제입니다.
<br>
이 README에는 <b>특히</b> 문제를 풀면서 어려웠던 점, 새로 알게 된 점 등을 기록하였습니다.
<br>
## 📖 문제
### Chapter06. 자바스크립트 언어
- [**Open Challenge 06 - 별문자(*) 출력하기**](../4주차/chap06/html/OpenChallenge_06.html)<br>

  ✏️ 정수와 실수를 구별하기 위해 `변수 % 1 == 0` 의 조건식을 활용함.<br>   

- **실습문제 01**<br>
  - [(1)](../4주차/chap06/html/q01-1.html)
  
  ✏️ script태그 내에 `function changeYellow()`, `function changeWhite()`를 정의하고 div태그의 이벤트 리스너 속성으로 호출함.
  
  - [(2)](../4주차/chap06/html/q01-2.html)
  
  ✏️ `<script src="../script/q01-2.js></script>`를 통해 불러옴.
  

- [**실습문제 02**](../4주차/chap06/html/q02.html)<br>

  ✏️ `document.write("")` 큰 따옴표 내에 HTML문서와 똑같이 태그를 작성함.
  
- **실습문제 03**<br>
  - [(1)](../4주차/chap06/html/q03-1.html)
  
  ✏️ `document.write("")` 큰 따옴표 내에 HTML문서와 똑같이 태그를 작성함.
  
  - [(2)](../4주차/chap06/html/q03-2.html)
  
  ✏️ `document.write("")` 큰 따옴표 내에 HTML문서와 똑같이 테이블을 작성함.

- [**실습문제 04**](../4주차/chap06/html/q04.html)<br>

  ✏️ `switch-case` 문을 이용해 `prompt()` 함수가 반환하는 값과 비교함.

- [**실습문제 05**](../4주차/chap06/html/q05.html)<br>

  ✏️ `while(true)` 반복문에서 계속 `prompt()`의 리턴값과 "you"를 비교함.

- **실습문제 06**<br>
  - [(1)](../4주차/chap06/html/q06-1.html)
  
  ✏️ 숫자간의 비교이므로 `parseFloat()` 함수를 통해 실수로 변환하고 비교함.
  
  - [(2)](../4주차/chap06/html/q06-2.html)
  
  ✏️ 두 번째 파라미터를 반복문의 조건식에 활용해 첫 번째 파라미터를 출력함.

- [**실습문제 07**](../4주차/chap06/html/q07.html)<br>

  ✏️ 가장 큰 자리수를 아래와 같이 구함.
  ```
  while (n != 0) {
    high = n % 10;
    n = Math.floor(n / 10);
  }
  ```
  
- [**실습문제 08**](../4주차/chap06/html/q08.html)<br>

  ✏️ `eval()`함수를 이용해 수식을 계산함.
  
<hr>

### Chapter07. 자바스크립트 코어 객체와 배열
- [**Open Challenge 07 - 배열을 리스트의 아이템으로 출력하기**](../4주차/chap07/html/OpenChallenge_07.html)<br>

  ✏️ 반복문 전후로 `<ul>` 시작/종료 태그를 배치하고 반복문을 통해 출력함.
  
- [**실습문제 01**](../4주차/chap07/html/q01.html)<br>

  ✏️ `push( Math.floor( Math.random()*100 + 1 ) )` - 난수 저장

- [**실습문제 02**](../4주차/chap07/html/q02.html)<br>

  ✏️ `(Array객체).reverse()` - 자체변환 메소드를 이용함.

- [**실습문제 03**](../4주차/chap07/html/q03.html)<br>

  ✏️ Date 객체의 `getHours()` 메소드를 이용함.
  `document.<HTML태그>.style.<CSS프로퍼티>`를 이용해 스타일 적용이 가능함.

- [**실습문제 04**](../4주차/chap07/html/q04.html)<br>

  ✏️ Date 객체의 `getDay()` 메소드를 이용함. 일요일 : 0, 토요일 : 6

- [**실습문제 05**](../4주차/chap07/html/q05.html)<br>

  ✏️ `for` 문을 통해 하나씩 비교함.
  문자열 비교는 사전식으로 비교됨.

- [**실습문제 06**](../4주차/chap07/html/q06.html)<br>

  ✏️ 입력받은 문자열 객체에서 `split("구분자")` 메소드를 활용함.

- [**실습문제 07**](../4주차/chap07/html/q07.html)<br>

  ✏️ `for`문 내에서 div태그 style속성에 배열의 각 요소를 넣어줌.

- [**실습문제 08**](../4주차/chap07/html/q08.html)<br>

  ✏️ 두 자리의 무작위 16진수를 얻는 함수를 아래와같이 정의함.
  ```
  function getRandomHEX(){
    return Math.floor(Math.random()*256).toString(16);
  }
  ```
  
- [**실습문제 09**](../4주차/chap07/html/q09.html)<br>

  ✏️ 3가지 방법으로 객체를 생성할 수 있음.
  - `new Object()`
  - `객체참조변수이름 = {내용}` : 리터럴 표기법
  - `function 객체()` : 프로토타입
  
- [**실습문제 10**](../4주차/chap07/html/q10.html)<br>

  ✏️ `split(",")`메소드를 이용해 문자열을 분할, 객체 단위로 배열에 저장함.
  
  
