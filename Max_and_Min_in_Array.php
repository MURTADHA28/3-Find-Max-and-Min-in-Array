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

    return ['max' => $maxValue, '
