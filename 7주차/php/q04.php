<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP 2주차 과제 4번</title>
</head>

<body>
<pre>
4. 다음은 각각의 사람들이 현재까지 생활하였던 도시의 이름을 나타내었다.

Kim   Seoul
Lee    Pusan, Daegu
Choi   Inchon
Park   Suwon, Daejon
Jung   Kwangju, Chunchon, Wonju

위의 값들을 연상 배열로 선언한 후 Choi 항목을 삭제한 뒤 연상 배열의 내용을 출력하는 PHP 프로그램을 작성하시오 (단, vardump() 함수는 사용하지 않음).
</pre>
<hr>
<?php
$arr = array(
	"Kim"=>"Seoul",
	"Lee"=>"Pusan, Daegu",
	"Choi"=>"Inchon",
	"Park"=>"Suwon, Daejon",
	"Jung"=>"Kwangju, Chunchon, Wonju"
);
unset($arr["Choi"]);

foreach($arr as $name=>$cities) {
	echo $name . " : " . $cities . "<br>";
}

?>


</body>

</html>