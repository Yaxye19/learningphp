<?php

if (false) {
    //echo 'Yeah, its pandin time!';
}

$panda = 'Lushui';

if($panda == 'Lushui') {
    //echo 'Yeah, its pandin time!';
} 

$panda = 'Pali';

if ($panda == 'Lushui') {
    //echo 'yeaahhhh, its pandin time';
} else {
    //echo 'wys Pali';
}

$panda = 'lol';

if ($panda == 'Pali') {
    //echo 'PALI TIME';
} elseif($panda == 'Jasmina') {
    //echo 'JASMINA TIME';
} elseif($panda == 'panda') {
    //echo 'PANDA IS NOT A PANDAAAAA';
} elseif($panda == 'Lushui') {
    //echo 'LUSHUI TIME';
}else {
    //echo 'who are you brev';
}


/* switch statements */

$panda2 = 'L';

switch ($panda2) {

    case 'Lushui':
        echo 'wys Lushui';
        break;
    
    case 'Pali':
        echo 'wys Pali';
        break;

    case 'Jasmina':
        echo 'wys Jasmina';
        break;
    
    default: 
        echo 'who are you brev';
}