<?php
// File: WordCount.php
// Ini adalah awal dari definisi file PHP. Biasanya, komentar ini digunakan untuk memberikan informasi tentang nama file.

// class Wordcount
// Ini adalah definisi dari kelas bernama Wordcount. Kelas digunakan untuk mengorganisir kode dan memiliki metode-metode yang dapat digunakan untuk melakukan operasi tertentu.
class Wordcount
{
    // public function countWords ($sentence)
    // Ini adalah deklarasi dari metode countWords. Metode ini menerima satu parameter yaitu $sentence, yang merupakan kalimat atau string yang akan dihitung jumlah katanya.
    public function countWords($sentence)
    {
        return count(explode(" ",$sentence));
        // Di dalam metode countWords, kode ini akan menghitung jumlah kata dalam $sentence:
        // 1. Metode explode() akan memecah $sentence menjadi array kata-kata berdasarkan spasi (" ").
        // 2. Metode count() akan menghitung jumlah elemen dalam array kata-kata yang telah dipecah.
        // 3. Hasilnya akan dikembalikan (return) sebagai jumlah kata dalam bentuk integer.

        // Perlu dicatat bahwa kode ini mengasumsikan bahwa kata-kata dalam $sentence dipisahkan oleh spasi. Hasilnya bisa tidak akurat jika ada karakter pemisah lainnya, seperti tanda baca.

        // Sumber potensial untuk perbaikan adalah mengatasi karakter pemisah kata yang berbeda dan menyaring tanda baca.
    }
}
?>