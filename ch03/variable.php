<?php
//single-ine comment
/*
    multi-line comment
*/
    $age = 21;  // =은 대입연산자(오른쪽에 있는 값을 복사하여 왼쪽에 준다)
    print "<div>" . $age . "</div>";

    $name;
    print "<div>" . $name . "</div>";

    $name="홍길동";
    print "<div>" . $name . "</div>";

    $name="장보고";
    print "<div>" . $name . "</div>";

    $name = 10;
    print "<div>" . $name . "</div>";

    // 변수명 네이밍 규칙
    /*
        1. 대소문자 영어, 숫자, 특수기호 _(언더바) 로 이루어져야 함.
        2. 숫자가 맨 앞에 오면 x
        3. 문자 사이에 빈칸 x _가능
    */
    // html에서는 모두 문자열로 받아들여짐
    $a1b = 12;
    print $a1b;

    $_124 = "ㅁㅇㄴㄻ";
    print $_124;
?>

<!-- adfadfa f -->