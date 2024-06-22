function findMaxMin($array) {
    if (empty($array)) {
        return null;
    }

    $maxValue = $array[0];
    $minValue = $array[0];

    foreach ($array as $value) {
        if ($value > $maxValue) {
            $maxValue = $value;
        }
        if ($value < $minValue) {
            $minValue = $value;
        }
    }

    return ['max' => $maxValue, 'min' => $minValue];
}

// Example usage:
$numbers = [14, 27, 5, 18, 9];
$result = findMaxMin($numbers);
echo "Max: " . $result['max'] . ", Min: " . $result['min'];
