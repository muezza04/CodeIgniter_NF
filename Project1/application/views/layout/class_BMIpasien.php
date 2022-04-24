  <?php
  require_once "class_BMI.php";

  $nomor = 1;
  $bb1 = new bmi("2311", "Patri", "L", 69.8, 180);
  $bb1->tanggal = "2022-01-10";
  $bb2 = new bmi("3242", "Nopa", "P", 55.3, 150);
  $bb2->tanggal = "2022-01-10";
  $bb3 = new bmi("1232", "Arvari", "L", 45.2, 171);
  $bb3->tanggal = "2022-01-11";

  $_tanggal_periksa = isset ($_POST['tanggal_periksa']) ? $_POST['tanggal_periksa'] : '';
  $_kode_pasien = isset ($_POST['kode_pasien']) ? $_POST['kode_pasien'] : '';
  $_nama_pasien = isset ($_POST['nama_pasien']) ? $_POST['nama_pasien'] : '';
  $_gender = isset ($_POST['gender']) ? $_POST['gender'] : '';
  $_berat = isset ($_POST['berat']) ? floatval($_POST['berat']) : '';
  $_tinggi = isset ($_POST['tinggi']) ? floatval($_POST['tinggi']) : '';

  $bb4 = new bmi ($_kode_pasien, $_nama_pasien, $_gender, $_berat, $_tinggi);
  $bb4->tanggal = $_tanggal_periksa;

  $array = [$bb1, $bb2, $bb3, $bb4];

  foreach ($array as $bb){
    echo '<tr><th>'.$nomor.'</th>';
    echo'<td>'.$bb->getNama().'</td>';
    echo'<td>'.$bb->getKode().'</td>';
    echo'<td>'.$bb->tanggal.'</td>';
    echo'<td>'.$bb->getGender().'</td>';
    echo'<td>'.$bb->getBerat().'</td>';
    echo'<td>'.$bb->getTinggi().'</td>';
    echo'<td>'.$bb->nilaiBMI().'</td>';
    echo'<td>'.$bb->statusBMI().'</td></tr>';
    $nomor ++;
  }
  ?>