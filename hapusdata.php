<?php
//untuk koneksi ke database
session_start();
include ("functions.php");

//proses delete
$id_alter = $_GET['id_alternatif'];
$sql   = "DELETE FROM tab_alternatif WHERE id_alternatif = '$id_alter' ";
$hapus = $koneksi->query($sql);

if ($hapus === TRUE) {
  echo "<script>alert('Hapus ID = ".$id_alter." Berhasil') </script>";
  echo "<script>window.location.href = \"data.php\" </script>";
} else {
  echo "Maaf Tidak Dapat Menghapus !";
}

?>
