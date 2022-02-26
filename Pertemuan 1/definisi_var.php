<?php
    //definisikan variables user
    $nama = 'Nuzurwan Patri Arja';
    $umur = 19;
    $berat = 40.5;

    echo "Nama saya $nama, umur saya $umur tahun, Berat saya sekitaran $berat kg";
?>

<?php
    // variable system
    echo 'Dokumen root '.$_SERVER["DOCUMENT_ROOT"];
    echo '<br/>';
    echo 'Nama File '.$_SERVER["PHP_SELF"];
?>
<hr/>
<?php 
    //variabel konstansta
    define('PHI',3.14);
    define('DBNAME','inventori');
    define('DBSERVER','localhost');

    $jari = 8;
    $luas = PHI *$jari * $jari;
    $kll = 2 * PHI * $jari;

    echo "Luas Lingkaran dengan Jari $jari : $luas <br/> Kelilingnya: $kll";
?>
<hr/>
<?php
    echo 'Nama databasenya : '.DBNAME;
    echo '<br/>';
    echo 'Lokasi databasenya ada di'.DBSERVER;
?>