<?php
require 'inc/header.php';
$kat = $_GET['kategori_nama'];
$getkat = mysqli_query($mysqli, "SELECT*FROM kategori WHERE kategori_nama = '".$kat."'");
if (isset($_SESSION['user']) != "") {
?>
    <div class="row">
        <?php
        $getbuku = "SELECT*FROM buku WHERE kategori = '".$kat."'";
        $quebuku = mysqli_query($mysqli, $getbuku)or die('Tidak ada buku dalam Kategori');
        if (mysqli_num_rows($quebuku) != 0) {
        	while ($buku = mysqli_fetch_array($quebuku)) {
        	?>
            <div class="col s12 m4 l2">
            	<div class="card">
	                <div class="card-image waves-effect waves-block waves-light">
	                    <img class="activator" src="images/buku.png">
	                </div>
	                <div class="card-content">
	                    <span class="card-title activator grey-text text-darken-4"><?php echo $buku['judul_buku']; ?></span>
	                    <p><a href="baca.php?letak_buku=<?php echo $buku['letak_buku'] ?>" class="btn">Baca</a></p>
	                </div>
	                <div class="card-reveal">
	                    <span class="card-title grey-text text-darken-4"><?php echo $buku['judul_buku']; ?></span>
	                    <p><?php echo $buku['deskripsi']; ?></p>
	                </div>
            	</div>
            </div>
            <?php
            }
        }else{
        	echo "<h1>Tidak ada buku dalam kategori</h1>";
        }
        ?>
    </div>
<?php
} else {
    ?>
    <script type="text/javascript">
    	alert('Silahkan login terlebih dahulu');
    	window.location = "index.php"
    </script>
    <?php
}
?>

<?php require 'inc/footer.php'; ?>
