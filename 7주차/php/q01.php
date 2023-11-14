<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP 2주차 과제 1번</title>
</head>

<body>
<pre>
1. for문을 이용하여 다음과 같은 출력을 하는 프로그램을 작성하시오.
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
<hr>
<?php
$rows = 5;

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo chr(65 + $j) . " ";
    }
    echo "<br>";
}

for ($i = $rows - 2; $i >= 0; $i--) {
    for ($j = 0; $j <= $i; $j++) {
        echo chr(65 + $j) . " ";
    }
    echo "<br>";
}
?>


</body>

</html>