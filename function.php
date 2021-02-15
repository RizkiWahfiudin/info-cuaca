<?php
include "cuaca.php";

function bulan($bulan) {
  if($bulan=='01') $namabulan="Januari";
  else if($bulan=='01') $namabulan="Januari";
  else if($bulan=='02') $namabulan="Februari";
  else if($bulan=='03') $namabulan="Maret";
  else if($bulan=='04') $namabulan="April";
  else if($bulan=='05') $namabulan="Mei";
  else if($bulan=='06') $namabulan="Juni";
  else if($bulan=='07') $namabulan="Juli";
  else if($bulan=='08') $namabulan="Agustus";
  else if($bulan=='09') $namabulan="September";
  else if($bulan=='10') $namabulan="Oktober";
  else if($bulan=='11') $namabulan="November";
  else if($bulan=='12') $namabulan="Desember";
  return $namabulan;
}

function hari() {
  $hari = array ( 1 => 'Senin',
      'Selasa',
      'Rabu',
      'Kamis',
      'Jumat',
      'Sabtu',
      'Minggu'
    );
  return $hari;
}

function tanggal() {
  $date = date("d-m-Y");
  $exten = explode("-", $date);
  $tanggal = $exten[0].' '.bulan($exten[1]).' '.$exten[2];
  return $tanggal;
}

function tanggalLengkap() {
  setlocale(LC_ALL, 'id-ID', 'id_ID');
  return strftime("%A, %d %B %Y");
}

function waktu() {
  date_default_timezone_set('Asia/Jakarta');
  return date("H:i");
}

function getJakarta() {
  $result = cuaca('jakarta');
  file_put_contents('../assets/data/jakarta.json', $result);
}

?>