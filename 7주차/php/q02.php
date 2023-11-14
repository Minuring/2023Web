<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP 2주차 과제 2번</title>
</head>

<body>
<pre>
2. 배열을 내림차순으로 정렬하고 싶다. sort() 함수를 이용하여 revsort() 함수를 설계하고 테스트하시오.
   (hint : sort와 array_reverse함수 사용)
</pre>
<hr>
<?php
function revsort($arr){
	sort($arr);
	return array_reverse($arr);
}

$arr = array(4,15,2,6,71,9,23,36,1,62,3,20);
echo "정렬 전<br>";
foreach ($arr as $e){
	echo $e . " ";
}

$arr = revsort($arr);
echo "<br>정렬 후<br>";
foreach ($arr as $e){
	echo $e . " ";
}
?>


</body>

</html>