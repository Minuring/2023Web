# 📁웹프로그래밍 3주차 과제
웹프로그래밍 3주차 과제입니다.
<br>
이 README에는 <b>특히</b> 문제를 풀면서 어려웠던 점, 새로 알게 된 점 등을 기록하였습니다.
<br><br>
## 📖 문제
### Chapter04. CSS3로 웹 페이지 꾸미기
- [**Open Challenge 04 - 컴퓨터 기술 소개 웹 페이지 : CSS로 모양 꾸미기**](../3주차/chap04/html/OpenChallenge_04.html)<br>

  ✏️ footer 태그에서 border-radius:(좌상단부터 시계방향) 프로퍼티를 통해 동그란 모서리를 만들 수 있었음.<br>   
  <b><i>survey4.html : </i></b>
  ```
    <label class="comment" for="say">남기고 싶은 말</label>
    <textarea id="say" placeholder="글을 남겨주세요." cols="35" rows="10"></textarea>
  ```
  두 태그가 한 라인에 있는 것은 `textarea`가 인라인-블럭 태그이기 때문임.

- [**실습문제 01**](../3주차/chap04/html/q01.html)<br>

  ✏️ `<h3>소연재</h3>` 을 `text-align : right` 를 통해 우측정렬함.
  
- [**실습문제 02**](../3주차/chap04/html/q02.html)<br>

  ✏️ `font-size`에서 em은 글자 단위임.
- [**실습문제 03**](../3주차/chap04/html/q03.html)<br>

  ✏️ td태그 내 p태그의 마진과 패딩을 0으로 함으로써 테이블 각 칸에서의 여백을 없앰.
  
- [**실습문제 04**](../3주차/chap04/html/q04.html)<br>

  ✏️ 태그 이름, 클래스, id를 조합하여 스타일을 적용할 수 있음.
  
- [**실습문제 05**](../3주차/chap04/html/q05.html)<br>

  ✏️ 자식(">")셀렉터 : 직계 자식인 태그에 적용함.   
  자손("공백")셀렉터 : 모든 자손인 태그에 적용함.
  
- [**실습문제 06**](../3주차/chap04/html/q06.html)<br>

  ✏️ `a:hover`은 a태그에 마우스가 올라간 상황에서만 스타일이 적용되는 **가상 클래스 셀렉터**의 한 종류임.
  
- [**실습문제 07**](../3주차/chap04/html/q07.html)<br>

  ✏️ `table`을 통해 설명과 이미지를 배치하고, **img태그를 사용하지 않고 div블록만 배치하여   
  CSS의 `background-image`를 이용해 작성**함.
  
- [**실습문제 08**](../3주차/chap04/html/q08.html)<br>

  ✏️ 테두리 표현을 위해 p태그로 감싸고 padding, border를 조절해 이미지 공간 확보 후 `border-image` 프로퍼티를 사용함.
  
- [**실습문제 09**](../3주차/chap04/html/q09.html)<br>

  ✏️ `box-shadow`와 `text-shadow`를 활용함.

<hr>

### Chapter05. CSS3 고급 활용
- [**Open Challenge 05 - 컴퓨터 기술 소개 웹 페이지 : CSS3로 태그 배치하기**](../3주차/chap05/html/OpenChallenge_05.html)<br>

  ✏️ body태그 수준에서 각 블럭들의 `width`, `height`의 합이 100%가 됨.
  `float` 프로퍼티를 활용해 nav태그를 좌측에 배치함.

- **실습문제 01**<br>
  - [(1)](../3주차/chap05/html/q01-1.html)

  ✏️ `display:inline-block`프로퍼티를 이용해 원래 블록단위인 div태그를 인라인-블록으로 지정함.

  - [(2)](../3주차/chap05/html/q01-2.html)
    
  ✏️ `display:inline`프로퍼티를 이용해 원래 블록단위인 div태그를 인라인으로 지정함.
  
- [**실습문제 02**](../3주차/chap05/html/q02.html)<br>

  ✏️ `position:fixed`, `bottom:0%`를 이용해 브라우저 바닥에 고정시킴.
  
- [**실습문제 03**](../3주차/chap05/html/q03.html)<br>

  ✏️ 음악 제목을 th태그로 작성하고 `border-bottom`프로퍼티를 통해 아래 테두리만 드러냄.   
  1,2,3은 `class='index'`로 클래스를 지정해 `border:1px solid yellowgreen`프로퍼티를 이용함.
  
- **실습문제 04**<br>
  - [(1)](../3주차/chap05/html/q04-1.html)
  
  ✏️ ul태그 블럭에서 `list-style`프로퍼티를 이용해 **마커** 지정가능.
  
  - [(2)](../3주차/chap05/html/q04-2.html)
  
  ✏️ `background-image`로 이미지 지정, `background-size:100% 100%`로 ul내에서 이미지가 꽉 차도록 지정함.
  
- [**실습문제 05**](../3주차/chap05/html/q05.html)<br>

  ✏️ `float:left`, `left:10px` 프로퍼티를 이용해 스폰지밥 이미지를 배치함.
  
- **실습문제 06**<br>
  - [(1)](../3주차/chap05/html/q06-1.html)
  
  ✏️ `@keyframe`을 이용해 애니메이션 작성 후 `animation`프로퍼티를 이용해 스폰지밥을 돌림.
  
  - [(2)](../3주차/chap05/html/q06-2.html)
  
  ✏️ `@keyframe`에서 시간비율 0% : -90˚ ,  50% : 90˚  ,  100% : -90˚ 로 설정하여 부드럽게 돌아가게함.
  
- [**실습문제 07**](../3주차/chap05/html/q07.html)<br>

  ✏️ 전환 프로퍼티 `transition:width 2s`을 이용하고 `img:hover{ width:100% }`를 통해 브라우저 폭 100%까지 늘어나게함.
  
- [**실습문제 08**](../3주차/chap05/html/q08.html)<br>

  ✏️ li태그는 블럭 태그로 독립적인 라인을 차지하기때문에 기본적으로 상하로 출력됨.
  
- [**실습문제 09**](../3주차/chap05/html/q09.html)<br>

  ✏️ span태그를 **절대 배치**하면 span태그 뒤에 오는 p태그에 겹쳐서 출력됨. 이를 이용해 마커를 제거하고 스타일 적용.
     
- [**실습문제 10**](../3주차/chap05/html/q10.html)<br>

  ✏️ `@keyframe`에서 `from{ margin-left:100% }` `to{ margin-left:0% }` 를 통해 연출함.
  