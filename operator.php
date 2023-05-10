<?php
$nama = "Aufa asad";
$umur = "16";

$pesan = "Nama saya : {$nama}";
$pesan2 = "Umur : {$umur}";
echo $pesan;
echo "<br>";
echo $pesan2;
echo "<br>";
echo "<br>";

$namaDepan = "Aufa";
$namaBelakang = "As'ad";

echo $namaLengkap = $namaDepan . ' ' . $namaBelakang;

echo "<br>";
echo "<br>";

$namaDepan = "Aufa";
$namaBelakang = "As'ad atsal FS";

 echo $namaLengkap = $namaLengkap . " Asad atsal FS";

 echo "<br>";

 $sedekah = "Kita harus selalu sedekah.";
 
 echo "<p>{$sedekah}</p>";
 echo "Panjang karakter: " . strlen($sedekah) . "<br>";

 echo "<br>";

 echo "Panjang kata: " . str_word_count($sedekah) . "<br>";

 echo "<br>";

 # dari indeks 0 sampai sepanjang 150 karakter
echo "<p>" . substr($sedekah, 0, 150) . "</p>";
# dari indeks 30 sampai sepanjang 150 karakter
echo "<p>" . substr($sedekah, 30, 150) . "</p>";
# dari indeks 100 sampai habis
echo "<p>" . substr($sedekah, 100) . "</p>";
# abmil 100 karakter terakhir
echo "<p>" . substr($sedekah, -100) . "</p>";

echo "<p>" . strtoupper($sedekah) . "</p>";

echo "<p>" . strtolower($sedekah) . "</p>";

$pesan = "saya sudah makan";
echo strrev($pesan) . "<br>";

$pesan = "saya sudah mandi";
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";

$judulBerita = "Sewu Dino";

echo strpos($judulBerita, "sewu") . "<br>"; # 18
echo strpos($judulBerita, "Dino") . "<br>"; # kosong
echo stripos($judulBerita, "Dino") . "<br>";

$judulBerita = "Sewu Dino";

echo "Judul asli: {$judulBerita} <br>";
echo "Judul baru: " . str_replace("membeli", "menjual", $judulBerita) . "<br>";
?>