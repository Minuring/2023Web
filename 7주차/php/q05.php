<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP 2주차 과제 5번</title>
</head>

<body>
<pre>
5. 고객 정보가 들어있는 파일 client.txt가 있다. 이 파일에 저장된 자료의 구조는 다음과 같이 ASCII 형식으로 저장되어 있다고 가정하자.

이름 [TAB] 나이 [TAB] 성별 [TAB] 이메일

이 파일을 읽어 나이가 30세 이상의 고객을 출력하는 프로그램을 작성하시오.


'client.txt' 내용 (예):
--------------------------------------
이민우 23 남 mw9505@kyungsung.ac.kr
가나다 29 남 fff@Fast
라마바 30 여 ffwef@fWAf
사아자 31 남 f32f9@@af
차카타 51 여 af32gf93@f3fwa
nameA 19 여 ff92a@nar.r
nameB 30 남 manman@man
-------------------------------------- 
</pre>
<hr>
<?php
$ptr = fopen("client.txt", 'r');

while(!feof($ptr)) {
	$lineStr = trim(fgets($ptr));
	
	$data = explode('	', $lineStr);
	// echo "이름 : $data[0], 나이 : $data[1], 성별 : $data[2], 이메일 : $data[3]<br>";
	if ( intval($data[1]) >=30 ) {
		echo "이름 : $data[0], 나이 : $data[1], 성별 : $data[2], 이메일 : $data[3]<br>";
	}
}

?>


</body>

</html>