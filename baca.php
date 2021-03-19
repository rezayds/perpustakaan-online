<?php
require 'inc/header.php';
$letak_buku = $_GET['letak_buku'];
$buku = "SELECT * FROM buku WHERE letak_buku='$letak_buku'";
$quebuku = mysqli_query($mysqli, $buku)or die('Buku tidak ada');
$databuku = mysqli_fetch_array($quebuku);
?>

<body style="overflow: hidden">

    <div id="infobuku" class="modal">
        <div class="modal-content">
            <table class="bordered">
                <tr>
                    <td width="100px">Kode Buku</td>
                    <td>:</td>
                    <td><?php echo $databuku['kode_buku']; ?></td>
                </tr>
                <tr>
                    <td width="100px">Judul Buku</td>
                    <td>:</td>
                    <td><?php echo $databuku['judul_buku']; ?></td>
                </tr>
                <tr>
                    <td width="100px">Penerbit</td>
                    <td>:</td>
                    <td><?php echo $databuku['penerbit']; ?></td>
                </tr>
                <tr>
                    <td width="100px">Deskripsi</td>
                    <td>:</td>
                    <td><?php echo $databuku['deskripsi']; ?></td>
                </tr>
                <tr>
                    <td width="100px">Kategori</td>
                    <td>:</td>
                    <td><?php echo $databuku['kategori']; ?></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
            <a href="#" class=" modal-action modal-close btn-flat"><b>X</b></a>
        </div>
    </div>
    <div class="container">
        <a href="#infobuku" class="btn modal-trigger">Info Buku</a>
        <a href="buku/<?php echo $databuku['letak_buku'] ?>" target="_blank" class="btn">Baca Fullscreen</a>
    </div>
    <br>
    <iframe src="buku/<?php echo $letak_buku ?>"
        style="
        width: 90%;
        height: 100vh;
        margin: 0 auto;
        display: block;">
    </iframe>
</body>

<?php require 'inc/footer.php'; ?>
