<?php
// Definisikan fungsi patternB_count
function patternB_count($textB, $patternB) {
    $textB_length = strlen($textB);
    $patternB_length = strlen($patternB);
    $countB = 0;

    // Jika panjang pola lebih besar dari panjang teks, tidak mungkin ada pola
    if ($patternB_length > $textB_length) {
        return 0;
    }

    // Iterasi melalui teks dengan langkah sepanjang panjang pola
    for ($i = 0; $i <= $textB_length - $patternB_length; $i++) {
        // Periksa apakah substring teks mulai dari indeks $i sama dengan pola
        $match = true;
        for ($j = 0; $j < $patternB_length; $j++) {
            if ($textB[$i + $j] !== $patternB[$j]) {
                $match = false;
                break;
            }
        }
        // Jika substring teks sama dengan pola, tambahkan ke hitungan
        if ($match) {
            $countB++;
        }
    }
    return $countB;
}

// Inisialisasi variabel teks dan pola
$textB = "abakadabra";
$patternB = "ab";

// Hitung kemunculan pola dalam teks
$countB = patternB_count($textB, $patternB);
?>
