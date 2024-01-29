<?php

function compterTypesVariables($variables) {
    $typesCount = array(
        'integer' => 0,
        'double' => 0,
        'string' => 0,
        'boolean' => 0,
        'array' => 0,
        'object' => 0,
        'NULL' => 0,
        'unknown' => 0
    );

    foreach ($variables as $var) {
        $type = gettype($var);
        if (array_key_exists($type, $typesCount)) {
            $typesCount[$type]++;
        } else {
            $typesCount['unknown']++;
        }
    }

    return $typesCount;
}

$variables = array(1, 3.14, "Hello", array(1, 2, 3), new stdClass(), NULL);
$typesCounts = compterTypesVariables($variables);

foreach ($typesCounts as $type => $count) {
    echo "Type: $type, Count: $count" . PHP_EOL;
}

?>
