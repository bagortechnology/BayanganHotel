<?php

$d1 = explode('/','01/05/2023');
$d2 = explode('/','17/05/2023');
$d1_new = $d1[2].'-'.$d1[1].'-'.$d1[0];
$d2_new = $d2[2].'-'.$d2[1].'-'.$d2[0];
$t1 = strtotime($d1_new);
$t2 = strtotime($d2_new);

while(1) {
    if($t1>=$t2) {
        break;
    }
    echo date('d/m/Y',$t1).'<br>';
    $t1 = strtotime('+1 day',$t1);
}
