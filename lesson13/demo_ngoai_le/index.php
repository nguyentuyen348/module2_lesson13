<?php

include 'DivideByZeroException.php';

function divide($numerator, $denominator): float
{
    if ($denominator == 0) {
        throw new DivideByZeroException();
    }
    return $numerator/$denominator;
}


try {
    $result = divide(100, 5);
    echo $result;
    $result = divide(100, 0);
    echo $result;
} catch (DivideByZeroException $e) {
    echo 'Có lỗi xảy ra: '. $e;
}

/*$result = divide(100, 5);
echo $result;
$result = divide(100, 0);
echo $result;*/
