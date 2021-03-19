<?php
require '../inc/koneksi.php';
if(isset($_GET['delete_id'])){

   $id = $_GET['delete_id'];
   echo $id;
   $databuku = 'SELECT*FROM buku WHERE kode_buku = "'.$id.'"';
   $quebuku = mysqli_query($mysqli, $databuku)or die('1');
   $buku = mysqli_fetch_array($quebuku);

   $letak_buku = "../buku/".$buku['letak_buku'];

   if (file_exists($letak_buku)) {
        unlink($letak_buku);
        $sql_query="DELETE FROM buku WHERE kode_buku='".$id."'";
        mysqli_query($mysqli, $sql_query)or die('qeu gagal');
      	header("Location: index.php");
    } else {
        echo "Buku tidak ditemukan";
    }
}
?>
