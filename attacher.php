<?php

$arr = file('Files list.csv');

$counter = count($arr);
for ($k = 0; $k < $counter; $k++) {
    $arr[$k] = explode(',', $arr[$k]);
}
for ($l = 0; $l < $counter; $l++) {
    $arr[$l][1] = intval($arr[$l][1]);
    $arr[$l][2] = 'n';
}

$sum = 0;
$j = 1;
while ($counter > 0) {
    for ($i = 0; $i < count($arr); $i++) {
        if ((($arr[$i][1] + $sum) < 2050) && ($arr[$i][2] === 'n')) {
            $sum+=$arr[$i][1];
            $arr[$i][2] = 'a';
            $arr[$i][] = 'block' . $j;
            $counter--;
        }
    }
    $j++;
    $sum = 0;
}

$reverseCount = count($arr);
for ($m = 0; $m < $reverseCount; $m++) {
    $arr[$m] = implode(',', $arr[$m]);
}

var_dump($arr);


//$attached = serialize($arr);
////$final = fopen('test1.csv',"w");
////fwrite($final, $arr);
////fclose($final);
//
//file_put_contents($arr, $attached);