<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP 2주차 과제 3번</title>
</head>

<body>
<pre>
3. 'exam.txt' 라는 파일을 열어 그 파일의 줄 수, 단어 수, 글자 수를 계산하는 프로그램을 작성하시오.

'exam.txt' 내용 (예):
---------------------------------------------------------------------------------------------------------------
A popular general-purpose scripting language that is especially suited to web development.
Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.
---------------------------------------------------------------------------------------------------------------
</pre>
<hr>
<?php
$ptr = fopen("exam.txt", 'r');

$line = $word = $chr = 0;
while(!feof($ptr)) {
	$line++;
	$lineStr = trim(fgets($ptr));
	
	$word += str_word_count($lineStr);

	$chr += strlen(str_replace(' ','',$lineStr));
}
echo "줄 수 : " . $line . ", 단어 수 : " . $word . ", 글자 수 : ". $chr ."";
?>


</body>

</html>