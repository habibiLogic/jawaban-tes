<?php
function countAndSortLetters($input) {
    // Ubah input menjadi huruf kecil untuk memudahkan perhitungan
    $input = strtolower($input);

    // Inisialisasi array asosiatif untuk menyimpan jumlah kemunculan setiap huruf
    $letterCount = [];

    // Iterasi melalui setiap karakter dalam input
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        // Jika karakter bukan huruf, abaikan
        if (!ctype_alpha($char)) {
            continue;
        }

        // Periksa apakah karakter sudah ada dalam array letterCount
        // Jika ya, tambahkan 1 ke jumlah kemunculan huruf tersebut
        // Jika tidak, inisialisasi jumlah kemunculan huruf tersebut menjadi 1
        if (isset($letterCount[$char])) {
            $letterCount[$char]++;
        } else {
            $letterCount[$char] = 1;
        }
    }

    // Urutkan array berdasarkan kunci (huruf) secara alfabetic
    ksort($letterCount);

    // Kembalikan array dengan jumlah kemunculan huruf yang telah diurutkan
    return $letterCount;
}
?>
