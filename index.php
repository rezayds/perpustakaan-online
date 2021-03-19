<?php
include 'inc/header.php';
if (isset($_SESSION['user']) != "") {
?>
    <div class="row">

            <?php
            $getbuku = "SELECT*FROM buku";
            $quebuku = mysqli_query($mysqli, $getbuku);
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
            ?>

    </div>
<?php
} else {
    ?>
    <div class="container">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Selamat Datang di Perpustakaan Online</span>
                <p>Perpustakaan online adalah sebuah website yang berisi buku-buku digital. Perpustakaan Online dibuat dengan sistem yang sederhana agar memudahkan para pengguna mengakses dimanapun dan kapanpun. Untuk dapat mengakses perpustakaan online pengguna tinggal login dengan klik link dibawah.</p>
            </div>
            <div class="card-action">
                <a href="#login" class="modal-trigger">Login</a>
                <a href="register.php">Belum punya akun? Daftar Disini</a>
            </div>
        </div>
    </div>
    <?php
}
?>

<?php include 'inc/footer.php'; ?>
