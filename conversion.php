<?php

function compterTypesVariables($variables) {
    // Initialisation du tableau associatif pour stocker le nombre d'apparition de chaque type de variable
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

    // Parcourir le tableau de variables et compter chaque type de variable
    foreach ($variables as $var) {
        $type = gettype($var);
        // Si le type est reconnu, incrémenter le compteur correspondant
        if (array_key_exists($type, $typesCount)) {
            $typesCount[$type]++;
        } else {
            // Sinon, considérer comme "unknown"
            $typesCount['unknown']++;
        }
    }

    return $typesCount;
}

// Exemple d'utilisation de la fonction
$variables = array(1, 3.14, "Hello", array(1, 2, 3), new stdClass(), NULL);
$typesCounts = compterTypesVariables($variables);

// Affichage des résultats
foreach ($typesCounts as $type => $count) {
    echo "Type: $type, Count: $count" . PHP_EOL;
}

?>
