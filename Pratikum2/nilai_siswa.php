<?php
  $proses = $_POST['proses'];
  $nama_siswa = $_POST['nama'];
  $mata_kuliah = $_POST['matkul'];
  $nilai_uts = $_POST['nilai_uts'];
  $nilai_uas = $_POST['nilai_uas'];
  $nilai_tugas = $_POST['nilai_tugas'];

  $nilai_akhir = ($nilai_uts * (30/100))+($nilai_uas * (35/100))+($nilai_tugas * (35/100));
  $per;
  $grade;
  $ket;

  if($nilai_akhir <= 55){
    $per = 'SISWA DINYATAKAN <b>TIDAK LULUS</b>';
  }else{
    $per = 'SISWA DINYATAKAN <b>LULUS</b>';
  }

  if($nilai_akhir >= 0 && $nilai_akhir < 36){
    $grade = 'E';
  }elseif($nilai_akhir >= 36 && $nilai_akhir < 56){
    $grade = 'D';
  }elseif($nilai_akhir >= 56 && $nilai_akhir < 70){
    $grade = 'C';
  }elseif($nilai_akhir >= 70 && $nilai_akhir < 85){
    $grade = 'B';
  }elseif($nilai_akhir >= 85 && $nilai_akhir <= 100){
    $grade = 'A';
  }else{
    $grade = 'I';
  }

  switch($grade){
    case 'E':
      $ket = 'Sangat Kurang';
      break;
    case 'D':
      $ket = 'Kurang';
      break;
    case 'C':
      $ket = 'Cukup';
      break;
    case 'B':
      $ket = 'Memuaskan';
      break;
    case 'A':
      $ket = 'Sangat Memuaskan';
      break;
    default:
      $ket = 'Tidak Ada';
  }

  if(!empty($proses)){
    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
    echo '<br/><br/>'.$per;
    echo '<br/>Totol Nilai Akhir : '.$nilai_akhir;
    echo '<br/>Grade Nilai siswa : '.$grade.' ('.$ket.')';
  }
?>