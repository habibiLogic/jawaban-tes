<?php
function urut($arr) {
    $huruf = [];
    $angka = [];
    
    // Pisahkan elemen ke dalam dua array: satu untuk huruf dan satu untuk angka
    foreach ($arr as $element) {
        if (is_string($element)) {
            $huruf[] = $element;
        } elseif (is_int($element)) {
            $angka[] = $element;
        }
    }
    
    // Urutkan masing-masing array
    sort($huruf);
    sort($angka);
    
    // Gabungkan kembali array dengan urutan huruf di depan dan angka di belakang
    $urutArr = array_merge($huruf, $angka);
    return $urutArr;
}

if (!function_exists('formatArrayForOutput')) {
    function formatArrayForOutput($array) {
        return implode(', ', $array);
    }
}
?>
