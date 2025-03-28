<?php
function reverseArray($arr) {
    
    return array_reverse($arr);
}


$numbers = [1, 2, 3, 4, 5];
$result = reverseArray($numbers);


echo "Reversed Array: ";
print_r($result);
?>
