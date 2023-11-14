# 📁웹프로그래밍 7주차 과제
웹프로그래밍 7주차 과제입니다.
<br>
이 README에는 <b>특히</b> 문제를 풀면서 어려웠던 점, 새로 알게 된 점 등을 기록하였습니다.
<br>

## 📖 문제

### PHP
- **1. [링크](http://mw9505.dothome.co.kr/week2/q01.php) for문을 이용하여 다음과 같은 출력을 하는 프로그램을 작성하시오.** <br>
  <pre>
  A
  A B
  A B C
  A B C D
  A B C D E 
  A B C D
  A B C
  A B
  A
  </pre>

  ✏️ 점점 많아지는 단계, 줄어드는 단계를 2중 for문 2개로 나누어 작성함.<br>
  `chr(정수)` 함수를 이용해 정수를 문자화 할 수 있음.

- **2. [링크](http://mw9505.dothome.co.kr/week2/q02.php) 배열을 내림차순으로 정렬하고 싶다. sort() 함수를 이용하여 revsort() 함수를 설계하고 테스트하시오.**<br>
   (hint : sort와 array_reverse함수 사용)** <br>

  ✏️ 힌트 그대로 sort 후 array_reverse함수를 사용함.
  

- **3. [링크](http://mw9505.dothome.co.kr/week2/q03.php) 'exam.txt' 라는 파일을 열어 그 파일의 줄 수, 단어 수, 글자 수를 계산하는 프로그램을 작성하시오.**<br>

  ✏️ `fopen()` 함수를 이용해 파일을 열어, `!eof()` 함수를 반복문의 조건으로 이용함.<br>
  `fgets()` 함수를 이용해 매 라인마다, 단어 수는 `str_word_count()`, 글자 수는 공백을 제외하기 위해<br>
  `str_replace()` 함수로 공백을 없애고 `strlen()` 함수를 사용함.

  
- **4. [링크](http://mw9505.dothome.co.kr/week2/q04.php) 다음은 각각의 사람들이 현재까지 생활하였던 도시의 이름을 나타내었다.**<br>
<pre>
Kim   Seoul
Lee    Pusan, Daegu
Choi   Inchon
Park   Suwon, Daejon
Jung   Kwangju, Chunchon, Wonju
</pre>

  위의 값들을 연상 배열로 선언한 후 Choi 항목을 삭제한 뒤 연상 배열의 내용을 출력하는 PHP 프로그램을 작성하시오 (단, vardump() 함수는 사용하지 않음).<br>

  ✏️ `=>` 연산자로 Key에 따른 Value를 할당함.<br>
  `unset()` 함수로 배열의 `Choi` 항목을 삭제함.

- **5. [링크](http://mw9505.dothome.co.kr/week2/q05.php) 고객 정보가 들어있는 파일 client.txt가 있다. 이 파일에 저장된 자료의 구조는 다음과 같이 ASCII 형식으로 저장되어 있다고 가정하자.**<br>
<pre>
이름 [TAB] 나이 [TAB] 성별 [TAB] 이메일
</pre>
이 파일을 읽어 나이가 30세 이상의 고객을 출력하는 프로그램을 작성하시오.<br>

  ✏️ `fopen()` 으로 열고 `!eof()` 를 조건으로 활용한 반복문에서 `fgets()` 로 한 줄 씩 읽으면서,<br>
  `explode()` 함수를 이용해 공백을 기준으로 4개의 데이터로 잘라서, 1번 인덱스로 나이를 판단함.