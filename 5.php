<?php
function removeDuplicates($arr) {
   
    return array_values(array_unique($arr));
}


$numbers = [1, 2, 2, 3, 1, 4, 2, 5, 3, 3, 4];
$result = removeDuplicates($numbers);


echo "Array without duplicates: ";
print_r($result);
?>
