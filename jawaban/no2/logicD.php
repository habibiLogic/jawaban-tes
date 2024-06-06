<?php
// Definisikan fungsi patternD_count
function pattern_countD($textD, $patternD) {
    $textD_length = strlen($textD);
    $patternD_length = strlen($patternD);
    $countD = 0;

    // Jika panjang pola lebih besar dari panjang teks, tidak mungkin ada pola
    if ($patternD_length > $textD_length) {
        return 0;
    }

    // Iterasi melalui teks dengan langkah sepanjang panjang pola
    for ($i = 0; $i <= $textD_length - $patternD_length; $i++) {
        // Periksa apakah substring teks mulai dari indeks $i sama dengan pola
        $match = true;
        for ($j = 0; $j < $patternD_length; $j++) {
            if ($textD[$i + $j] !== $patternD[$j]) {
                $match = false;
                break;
            }
        }
        // Jika substring teks sama dengan pola, tambahkan ke hitungan
        if ($match) {
            $countD++;
        }
    }
    return $countD;
}

// Inisialisasi variabel teks dan pola
$textD = "ababab";
$patternD = "aba";

// Hitung kemunculan pola dalam teks
$countD = pattern_countD($textD, $patternD);
?>
