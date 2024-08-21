<?php
function solution($X) {
    $n = count($X);
    $half = floor($n / 2);
    $counts = array_count_values($X);
    
    foreach ($counts as $key => $value) {
        if ($value > $half) {
            // Tampilkan semua index yang memiliki nilai dominasi
            foreach ($X as $index => $item) {
                if ($item == $key) {
                    echo $index . " ";
                }
            }
            return; // Keluar dari fungsi setelah menampilkan index dominasi
        }
    }
    echo -1;
}

// Contoh penggunaan
$X = [3, 4, 3, 2, 3, -1, 3, 3];
echo "Index nilai dominasi:\n";
solution($X);
?>
