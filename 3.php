<?php
function MergeArray($arr1, $arr2) {
    $merged = [];


    foreach ($arr1 as $value) {
        $merged[] = $value;
    }

 
    foreach ($arr2 as $value) {
        $merged[] = $value;
    }

    return $merged;
}

$a = [5, 6, 3, 7];
$b = [63, 36, 8, 35];


$c = MergeArray($a, $b);


echo "Merged Array: ";
foreach ($c as $v) {
    echo $v . " ";  
}
?>
