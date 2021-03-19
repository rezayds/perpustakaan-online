<?php
include_once '../inc/koneksi.php';
if(isset($_POST['btn-upload'])){

	$file = rand(1000,100000)."-".$_FILES['file']['name'];
	$file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../buku/";

	// make file name in lower case
	$new_file_name = strtolower($file);

	$final_file=str_replace(' ','-',$new_file_name);

	if(move_uploaded_file($file_loc,$folder.$final_file)){
		$kode_buku = $_POST['kode_buku'];
		$judul_buku = $_POST['judul_buku'];
		$penerbit = $_POST['penerbit'];
		$deskripsi = $_POST['deskripsi'];
		$kategori = $_POST['kategori'];
		$sql="INSERT INTO buku VALUES('$kode_buku','$judul_buku','$penerbit','$deskripsi','$kategori','$final_file')";
		mysqli_query($mysqli, $sql);
		?>
		<script>
			alert('Buku telah di upload!');
        	window.location.href='index.php';
        </script>
		<?php
	}else{
		?>
		<script>
			alert('Cek kembali form anda');
        	window.location.href='upload.php';
        </script>
		<?php
	}
}
?>
