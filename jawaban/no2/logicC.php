<?php
// Definisikan fungsi patternC_count
function pattern_countC($textC, $patternC) {
    $textC_length = strlen($textC);
    $patternC_length = strlen($patternC);
    $countC = 0;

    // Jika panjang pola lebih besar dari panjang teks, tidak mungkin ada pola
    if ($patternC_length > $textC_length) {
        return 0;
    }

    // Iterasi melalui teks dengan langkah sepanjang panjang pola
    for ($i = 0; $i <= $textC_length - $patternC_length; $i++) {
        // Periksa apakah substring teks mulai dari indeks $i sama dengan pola
        $match = true;
        for ($j = 0; $j < $patternC_length; $j++) {
            if ($textC[$i + $j] !== $patternC[$j]) {
                $match = false;
                break;
            }
        }
        // Jika substring teks sama dengan pola, tambahkan ke hitungan
        if ($match) {
            $countC++;
        }
    }
    return $countC;
}

// Inisialisasi variabel teks dan pola
$textC = "hello";
$patternC = " ";

// Hitung kemunculan pola dalam teks
$countC = pattern_countC($textC, $patternC);
?>
