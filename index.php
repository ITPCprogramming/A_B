<?php
$i = 0;
for ($i = 1; $i < 21; $i++){
    if($i % 2 == 0){
        echo "a" . "<br>";
    } elseif ($i % 3 == 0){
        echo "b" . "<br>";
    } elseif ($i % 2 == 0 or $i % 3 == 0){
        echo "a" . "b" . "<br>";
    } else {
        echo $i . "<br>";
    }
}



