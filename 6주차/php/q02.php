<?php
    /*
    2. while문을 이용하여 factorial 값을 구하는 함수를 작성하고 테스트하시오.
    */

    echo "factorial(10)의 결과 <br>";
    
    $n = 10;

    $i = 1;
	$sum = 1;
    while($i <= $n) {
        $sum *= ($i++);
    }

    echo "{$sum}";
?>