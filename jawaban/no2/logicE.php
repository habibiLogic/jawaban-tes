<?php
// Definisikan fungsi patternE_count
function pattern_countE($textE, $patternE) {
    $textE_length = strlen($textE);
    $patternE_length = strlen($patternE);
    $countE = 0;

    // Jika panjang pola lebih besar dari panjang teks, tidak mungkin ada pola
    if ($patternE_length > $textE_length) {
        return 0;
    }

    // Iterasi melalui teks dengan langkah sepanjang panjang pola
    for ($i = 0; $i <= $textE_length - $patternE_length; $i++) {
        // Periksa apakah substring teks mulai dari indeks $i sama dengan pola
        $match = true;
        for ($j = 0; $j < $patternE_length; $j++) {
            if ($textE[$i + $j] !== $patternE[$j]) {
                $match = false;
                break;
            }
        }
        // Jika substring teks sama dengan pola, tambahkan ke hitungan
        if ($match) {
            $countE++;
        }
    }
    return $countE;
}

// Inisialisasi variabel teks dan pola
$textE = "aaaaaa";
$patternE = "aa";

// Hitung kemunculan pola dalam teks
$countE = pattern_countE($textE, $patternE);
?>
