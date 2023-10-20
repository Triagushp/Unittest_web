<?php
// Mengimpor kelas TestCase dari PHPUnit
use PHPUnit\Framework\TestCase;     
// Mengimpor file Wordcount.php
require_once "Wordcount.php";        
// Mendefinisikan kelas pengujian SimpleTest yang menggantung pada TestCase
class SimpleTest extends TestCase {   
    // Mendefinisikan metode pengujian
    public function testCountWords() {
        // Membuat instance dari kelas Wordcount 
        $Wc = new Wordcount();        
        // Menyiapkan kalimat uji
        $testSentence = "My name is a agos"; 
        // Menghitung jumlah kata
        $wordCount = $Wc->countWords($testSentence); 
        // Membandingkan hasil penghitungan kata dengan 5
        $this->assertEquals(5, $wordCount); 
    }
}
