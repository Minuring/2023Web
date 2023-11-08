# 📁웹프로그래밍 6주차 과제
웹프로그래밍 6주차 과제입니다.
<br>
이 README에는 <b>특히</b> 문제를 풀면서 어려웠던 점, 새로 알게 된 점 등을 기록하였습니다.
<br>

## 📖 문제

### PHP
- **1. 동적 웹페이지와 정적 웹페이지의 차이를 설명하시오.** <br>

  ✏️ 동적 웹페이지 : 클라이언트의 요청에 따라 동적으로 만들어지는 웹 페이지
  정적 웹페이지 : 서버에 저장된 이미 만들어진 고정된 웹 페이지

- **2. PHP에 설치된 모듈(20개)은 어떤 것이 있는지 조사하시오.** <br>

  ✏️ 명령 프롬프트에서 `php -m` 을 통해 확인할 수 있었음.
  bcmath, calendar, Core, ctype, date, dom, filter, hash, iconv, json,
  libxml, mysqlnd, pcre, PDO, Phar, random, readline, Reflection, session, SimpleXML, SPL, standard, tokenizer, xml, xmlreader, xmlwriter, zlib
  

- **3. PHP에서 사용되는 스크립트 엔진에 대해 기술하시오.**<br>

  ✏️ PHP 스크립트 엔진은 PHP 언어로 작성된 스크립트를 해석 및 실행한다.
  즉 PHP 스크립트 엔진은 PHP소스(스크립트)를 해석하고 실행(HTML 재작성)한다.

  
- **4. 웹 브라우저에서 http://www.abc.com/abc.php 페이지를 접속했을 때, 서버는 어떠한 일을 수행하는가?**<br>

  ✏️ 웹 서버에서 PHP 스크립트 엔진(파서) 에게 PHP 파일 처리를 위임한다.
   PHP 스크립트 엔진이 스크립트 실행 결과를 HTML파일로 응답하면, 웹 서버는 다시 클라이언트에게 반환하고, 최종적으로 브라우저에 재작성된 HTML파일이 응답된다.

- **5. Call by Value와 Call by Reference의 차이점에 대해 기술하시오.**<br>

  ✏️ Call by Value는 저장된 값을 전달한다.
  Call by Reference는 저장된 값의 포인터를 전달한다.

- [**PHP 실습 01 (링크)**](http://mw9505.dothome.co.kr/week1/q01.php)<br>

  ✏️ 조건문을 사용해 작성함.

- [**PHP 실습 02 (링크)**](http://mw9505.dothome.co.kr/week1/q02.php)<br>

  ✏️ `$i = 1`로 초기화해서 i를 더해가며 결과에 곱해감.

- [**PHP 실습 03 (링크)**](http://mw9505.dothome.co.kr/week1/q03.php)<br>

  ✏️ 삼항 연산자 `($value % 2 == 0) ? "even" : "odd"` 를 사용함.