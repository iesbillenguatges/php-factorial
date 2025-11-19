<?php
function factorial($n) {
    if ($n < 0) {
        return null; // Els factorials negatius no estan definits
    }
    if ($n === 0 || $n === 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

// Comprovar si s'ha passat 'num' per GET
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    echo "El factorial de $num és " . factorial($num);
} else {
    echo "Has de passar la variable 'num' per GET a l'URL.";
}
?>
