function findMaxMin($arr) {
    if (empty($arr)) {
        return null; 
    }

    $maxValue = $arr[0];
    $minValue = $arr[0];

    foreach ($arr as $value) {
        if ($value > $maxValue) {
            $maxValue = $value;
        }
        if ($value < $minValue) {
            $minValue = $value;
        }
    }

   
    return ['max' => $maxValue, 'min' => $minValue];
}


$numbers = [14, 27, 5, 18, 9];
$result = findMaxMin($numbers);
echo "Max: " . $result['max'] . ", Min: " . $result['min'];
