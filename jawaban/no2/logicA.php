<?php
// Definisikan fungsi pattern_count
function pattern_count($text, $pattern) {
    $text_length = strlen($text);
    $pattern_length = strlen($pattern);
    $count = 0;

    // Jika panjang pola lebih besar dari panjang teks, tidak mungkin ada pola
    if ($pattern_length > $text_length) {
        return 0;
    }

    // Iterasi melalui teks dengan langkah sepanjang panjang pola
    for ($i = 0; $i <= $text_length - $pattern_length; $i++) {
        // Periksa apakah substring teks mulai dari indeks $i sama dengan pola
        $match = true;
        for ($j = 0; $j < $pattern_length; $j++) {
            if ($text[$i + $j] !== $pattern[$j]) {
                $match = false;
                break;
            }
        }
        // Jika substring teks sama dengan pola, tambahkan ke hitungan
        if ($match) {
            $count++;
        }
    }
    return $count;
}

// Inisialisasi variabel teks dan pola
$text = "palindrom";
$pattern = "ind";

// Hitung kemunculan pola dalam teks
$count = pattern_count($text, $pattern);
?>
