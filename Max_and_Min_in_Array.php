function findMaxMinDifferent($arr) {
    if (empty($arr)) {
        return null;
    }

    $max_value = $arr[0];
    $min_value = $arr[0];

    $count = count($arr);
    for ($i = 1; $i < $count; $i++) {
        if ($arr[$i] > $max_value) {
            $max_value = $arr[$i];
        } elseif ($arr[$i] < $min_value) {
            $min_value = $arr[$i];
        }
    }

    return ['maximum' => $max_value, 'minimum' => $min_value];
}

// Example usage:
$array = [3, 5, 1, 9, 7];
$result = findMaxMinDifferent($array);
echo "Maximum: " . $result['maximum'] . ", Minimum: " . $result['minimum'];
