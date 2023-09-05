<?php
$counter_file = 'counter.txt';

// Membaca jumlah kunjungan dari file
if (file_exists($counter_file)) {
    $counter = (int) file_get_contents($counter_file);
} else {
    $counter = 0;
}

$counter++;

// Menyimpan kembali jumlah kunjungan ke file
file_put_contents($counter_file, $counter);

echo "$counter";
?>