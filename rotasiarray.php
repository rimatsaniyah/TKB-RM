<?php
function solution($X, $Y) {
    $n = count($X);
    
    for ($i = 0; $i < $Y; $i++) {
        // Rotasi array
        array_unshift($X, array_pop($X));
        
        // Tampilkan hasil rotasi
        echo "[" . implode(", ", $X) . "]\n";
    }
}

// Contoh penggunaan
$X = [7, 2, 4, 1, 6, 8, 9];
$Y = 3;
echo "Hasil rotasi:\n";
solution($X, $Y);
?>
