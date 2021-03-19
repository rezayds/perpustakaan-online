<?php
include_once 'inc/koneksi.php';
if (isset($_POST['register'])) {

	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$nama 		= $_POST['nama'];
	$tempat_lhr = $_POST['tempat_lhr'];
	$tgl_lhr 	= $_POST['tgl_lhr'];
	$email 		= $_POST['email'];
	$minat 		= $_POST['kategori'];

	$sql_query = "INSERT INTO user(username,password,nama,tempat_lhr,tgl_lhr,email,minat)
  VALUES('$username','$password','$nama','$tempat_lhr','$tgl_lhr','$email','$minat')";
	if (mysqli_query($mysqli, $sql_query)) {
		?>
		<script type="text/javascript">
			alert('Data Are Inserted Successfully ');
			window.location.href='index.php';
		</script>
		<?php
	} else {
		?>
		<script type="text/javascript">
			alert('error occured while inserting your data');
			window.location.href='register.php'
		</script>
		<?php
	}
}
?>
