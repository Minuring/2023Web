# 📁웹프로그래밍 5주차 과제
웹프로그래밍 5주차 과제입니다.
<br>
이 README에는 <b>특히</b> 문제를 풀면서 어려웠던 점, 새로 알게 된 점 등을 기록하였습니다.
<br>

## 📖 문제

### Chapter08. HTML DOM과 Document
- [**Open Challenge 08 - 갬블링 게임 웹 페이지 만들기**](../5주차/chap08/html/OpenChallenge_08.html)<br>

  ✏️ `<li>`태그의 `onclick`프로퍼티에 `function gamble()`을 대입함.
  gamble메소드는 호출한 객체를 랜덤한 숫자로 바꾸고, 게임의 승패를 판단함.

- **실습문제 01**<br>
  - [(1)](../5주차/chap08/html/q01-1.jpg)
  
  ✏️ HTML태그의 포함관계에 따라 DOM트리를 그림.
  
  - [(2),(3)](../5주차/chap08/html/q01.html)
  
  ✏️ `document.getElementByTagName()` 메소드를 통해 li태그를 제어하고, `ol`태그의 `onclick` 속성에 배경색을 바꾸는 메소드를 대입함.
  

- **실습문제 02**<br>
  - [(1)](../5주차/chap08/html/q02-1.jpg)
  
  ✏️ HTML태그의 포함관계에 따라 DOM트리를 그림.
  
  - [(2),(3)](../5주차/chap08/html/q02.html)
  
  ✏️ `document.getElementByTagName()` 메소드를 통해 얻은 배열의 `length` 프로퍼티를 활용함.
  
- [**실습문제 03**](../5주차/chap08/html/q03.html)<br>

  ✏️ 자바스크립트를 통해 `span`태그의 `visibility` 프로퍼티를 토글로 변경함.

- [**실습문제 04**](../5주차/chap08/html/q04.html)<br>

  ✏️ 태그 안 내용은 `innerHTML` 프로퍼티를 수정함.

- [**실습문제 05**](../5주차/chap08/html/q05.html)<br>

  ✏️ `z-index`를 순차적으로 설정해두고, 클릭할 때마다 해당 이미지의 `z-index`를 0으로 설정하고 다른 이미지의 `z-index`를 증가시킴으로써 번갈아가면서 나타나도록 함.

- [**실습문제 06**](../5주차/chap08/html/q06.html)<br>

  ✏️ `prompt`함수를 통해 받은 입력을 `innerHTML`에 대입함.

- [**실습문제 07**](../5주차/chap08/html/q07.html)<br>

  ✏️ `"rotate(" + n + "deg)"`의 형식을 이용함.
  
- [**실습문제 08**](../5주차/chap08/html/q08.html)<br>

  ✏️ 클릭마다 카운트를 더하고 `transform` 프로퍼티를 `"scale("+count+",1)"`의 형식을 이용함.

- [**실습문제 09**](../5주차/chap08/html/q09.html)<br>

  ✏️ `document.createElement()`를 통해 생성한 객체의 `innerHTML`을 설정해 `ol`의 자식 노드로 추가함.

- [**실습문제 10**](../5주차/chap08/html/q10.html)<br>

  ✏️ `p`태그로 `innerHTML`을 설정해 `button`의 sibling 노드가 되도록 추가함.<br>`function(){ this.parentElement.removeChild(this) }`를 `onclick`에 추가함.

<hr>

### Chapter09. 이벤트 기초 및 활용
- [**Open Challenge 09 - 마우스 클릭 연습**](../5주차/chap09/html/OpenChallenge_09.html)<br>

  ✏️ `<img src=''>`를 `innerHTML`로 가지는 `td`객체를 10*10개 생성함.
  현재 이미지가 있는 셀 위치를 저장한 `select` 변수를 활용함.

- [**실습문제 01**](../5주차/chap09/html/q01.html)<br>

  ✏️ `blur`와 `focus` 이벤트를 통해 `body`객체의 배경색을 제어함.
  
- [**실습문제 02**](../5주차/chap09/html/q02.html)<br>

  ✏️ `radio` 각각의 `value`에 이미지 URL을 할당해 두고, `onclick` 프로퍼티에 `img.src = this.value`를 수행하는 메소드를 연결함.
  
- [**실습문제 03**](../5주차/chap09/html/q03.html)<br>

  ✏️ `e.key == "Enter"` 와 같은 조건식을 활용함.

- [**실습문제 04**](../5주차/chap09/html/q04.html)<br>

  ✏️ `window`객체의 `onmousemove` 리스너를 활용함.
  `clientX`,`clientY` 속성을 이미지의 `top`, `left`에 대입함.

- [**실습문제 05**](../5주차/chap09/html/q05.html)<br>

  ✏️ `window` 객체의 `dblclick` 이벤트를 활용함.

- [**실습문제 06**](../5주차/chap09/html/q06.html)<br>

  ✏️ 마우스 이벤트 객체의 `wheelDelta` 속성을 활용함.

- [**실습문제 07**](../5주차/chap09/html/q07.html)<br>

  ✏️ `textDecoration` 프로퍼티를 변경함.
  
- [**실습문제 08**](../5주차/chap09/html/q08.html)<br>

  ✏️ `e.target.tagName == "LI"` 의 조건식을 활용함.
  위 조건식이 거짓이면 모든 `li` 태그를 원래 크기로 출력함.

- [**실습문제 9**](../5주차/chap09/html/q09.html)<br>

  ✏️ `position: absolute` 와 `display: inline-block` 스타일 프로퍼티 활용.
  `innerHTML`을 이벤트 객체의 `value`로 구분해 각각 적절한 설명을 삽입함.

- [**실습문제 10**](../5주차/chap09/html/q10.html)<br>

  ✏️ 연산자와 피연산자를 누적시키는 `input[type='text']` 태그를 계산식으로 활용함.<br>숫자와 연산자는 누적시키고, Back, CE, C와 같은 특수한 버튼과 `=` 버튼을 각각 처리함. 