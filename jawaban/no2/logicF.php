<?php
// Definisikan fungsi patternF_count
function pattern_countF($textF, $patternF) {
    $textF_length = strlen($textF);
    $patternF_length = strlen($patternF);
    $countF = 0;

    // Jika panjang pola lebih besar dari panjang teks, tidak mungkin ada pola
    if ($patternF_length > $textF_length) {
        return 0;
    }

    // Iterasi melalui teks dengan langkah sepanjang panjang pola
    for ($i = 0; $i <= $textF_length - $patternF_length; $i++) {
        // Periksa apakah substring teks mulai dari indeks $i sama dengan pola
        $match = true;
        for ($j = 0; $j < $patternF_length; $j++) {
            if ($textF[$i + $j] !== $patternF[$j]) {
                $match = false;
                break;
            }
        }
        // Jika substring teks sama dengan pola, tambahkan ke hitungan
        if ($match) {
            $countF++;
        }
    }
    return $countF;
}

// Inisialisasi variabel teks dan pola
$textF = "hell";
$patternF = "hello";

// Hitung kemunculan pola dalam teks
$countF = pattern_countF($textF, $patternF);
?>
