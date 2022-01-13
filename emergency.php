<?php

 function pyramidVolume($heigh, $ratium)
{
return ($heigh*$ratium)/3;
}

function factoriel($number)
{
    $i=1;
    for($i=1; $i<$number; $i++)
    {
        $i = $i*($i+1);
    }
    return $i;
}

function average($number1, $number2, $number3)
{
    $average = ($number1 + $number2 + $number3)/3;
    return $average;
}

$result1 = pyramidVolume(6, 8);
$result2 = factoriel(9);
$result3 = average(67, 9, 5);


echo $result1;
echo $result2;
echo $result3;


?>
