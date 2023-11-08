<?PHP
/*3. 다음 프로그램과 동일한 기능을 하는 프로그램을
삼항연산자( ? : )를 이용하여 작성고 테스트하시오.*/
/*
   $value = 12;
   if (($value % 2) == 1) print "odd";
   else print "even";
*/
   $value = 12;
   print ($value % 2 == 0) ? "even" : "odd"
?>