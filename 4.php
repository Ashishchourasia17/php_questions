<?php
function countOccurrences($arr) {
    $counts = [];

   
    foreach ($arr as $value) {
        if (isset($counts[$value])) {
            $counts[$value]++;
        } else {
            $counts[$value] = 1;
        }
    }

    return $counts;
}


$numbers = [1, 2, 2, 3, 1, 4, 2, 5, 3, 3, 4];
$result = countOccurrences($numbers);


echo "Occurrences:\n";
foreach ($result as $key => $value) {
    echo "$key => $value\n";
}
?>
