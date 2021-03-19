<?php
include_once '../inc/koneksi.php';
if(isset($_POST['btn-update'])){
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
  	$file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../buku/";

	// make file name in lower case
	$new_file_name = strtolower($file);

	$final_file=str_replace(' ','-',$new_file_name);

	$databuku = "SELECT*FROM buku WHERE kode_buku='".$_GET['edit_id']."'";
	$quebuku = mysqli_query($mysqli, $databuku);
	$buku = mysqli_fetch_array($quebuku);

	$unletak_buku = "../buku/".$buku['letak_buku'];

	$kode_buku 	= $_GET['edit_id'];
	$judul_buku	= $_POST['judul_buku'];
	$penerbit 	= $_POST['penerbit'];
	$deskripsi 	= $_POST['deskripsi'];
	$kategori 	= $_POST['kategori'];

	if ($file_size != 0) {
		if (file_exists($unletak_buku)) {
			unlink($unletak_buku);
			if(move_uploaded_file($file_loc,$folder.$final_file)){
				$sql="UPDATE buku SET judul_buku='$judul_buku',penerbit='$penerbit',deskripsi='$deskripsi',kategori='$kategori',letak_buku='$final_file'
				WHERE kode_buku='$kode_buku'";
				mysqli_query($mysqli, $sql);
				?>
				<script>
					alert('Data telah diperbaharui!');
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
		} else {
			echo "Buku tidak ditemukan";
		}
	} else {
		$sql="UPDATE buku SET judul_buku='$judul_buku',penerbit='$penerbit',deskripsi='$deskripsi',kategori='$kategori'
		WHERE kode_buku='$kode_buku'";
		mysqli_query($mysqli, $sql);
		?>
		<script>
			alert('Data telah diperbaharui!');
			window.location.href='index.php';
		</script>
		<?php
	}
}
?>
