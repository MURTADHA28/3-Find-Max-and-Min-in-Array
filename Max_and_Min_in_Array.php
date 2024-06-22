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


$array = [38, 56, 50, 90, 55];
$result = findMaxMinDifferent($array);
echo "Maximum: " . $result['maximum'] . ", Minimum: " . $result['minimum'];
