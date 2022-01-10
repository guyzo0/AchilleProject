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

$result1 = pyramidVolume(6, 8);
$result2 = factoriel(9);


echo $result1;
echo $result2


?>
