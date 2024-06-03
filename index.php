<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>

<?php
// 5. Deklarasi Variabel (Proses deklarasi variabel $txt, $x, dan $y)
$txt = "Hello world!";
$x = 5;
$y = 10.5;

// 6. Output Variabel 1 (Proses keluaran hasil deklarasi variabel)
$txt1 = "PHP";
echo "I love $txt1!<br>";

// 7. Output Variabel 2 (Proses cara pemanggilan variabel di dalam string)
$txt2 = "PHP";
echo "I love " . $txt2 . "!<br>";

// 8. Output Variabel 3 dengan operasi aritmatika (Proses melakukan perhitungan pada penjumlahan menggunakan PHP)
$x = 5;
$y = 4;
echo $x + $y . "<br>";

// 9. Mengetahui panjang string (Proses menghitung panjang huruf dari Hello world)
echo strlen("Hello world!") . "<br>"; // outputs 12

// 10. Menghitung jumlah kata pada kalimat
echo str_word_count("Hello world !") . "<br>"; // outputs 2

// 11. Membalikkan String
echo strrev("Hello world!") . "<br>"; // outputs !dlrow olleH

// 12. Pencarian dalam string (Posisi kata "world" dalam kata "Hello world")
echo strpos("Hello world!", "world") . "<br>"; // outputs 6

// 13. Mengganti Text (Proses melakukan replace pada suatu kata)
echo str_replace("world", "Dolly", "Hello world!") . "<br>"; // outputs Hello Dolly!

// 14. Fungsi (Proses deklarasi sebuah fungsi dengan nama writeMsg)
function writeMsg() {
    echo "Hello World!<br>";
}

writeMsg(); // Memanggil fungsi

// 15. Fungsi dengan argument (Proses deklarasi sebuah fungsi dengan membawa suatu nilai dengan nama variabel fname)
function familyName($fname) {
    echo $fname . "<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

// 16. Fungsi dengan lebih dari satu argument (Proses deklarasi sebuah fungsi dengan membawa suatu nilai dengan 2 variabel sekaligus)
function familyNameWithYear($fname, $year) {
    echo "$fname Jaeger. Born in $year <br>";
}

familyNameWithYear("Hege", "1975");
familyNameWithYear("Stale", "1978");
familyNameWithYear("Kai Jim", "1983");

// 17. Fungsi dengan nilai default pada argument (Proses deklarasi sebuah fungsi dengan memberi nilai awal sebesar 50)
function setHeight($minHeight = 50) {
    echo "The height is: $minHeight <br>";
}

setHeight(350);
setHeight(); // akan menggunakan nilai default 50
setHeight(135);
setHeight(80);

// 18. Fungsi dengan nilai default pada argument (Proses deklarasi sebuah fungsi penjumlahan dengan mengembalikan nilai/hasil)
function sum($x, $y = 0) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";
?>

</body>
</html>
