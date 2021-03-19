<?php
include 'inc/header.php';
if (isset($_SESSION['admin'])!="") {
?>

<div class="container center">
    <h3>Daftar Buku</h3>
    <table class="striped responsive-table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Buku</th>
                <th>Nama Buku</th>
                <th>Penerbit</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Buku</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $no=1;

    	$sql="SELECT * FROM buku";
    	$result_set=mysqli_query($mysqli, $sql);
    	while($row=mysqli_fetch_array($result_set)){
    		?>
            <tr>
                <td align="center"><?php echo $no; ?></td>
                <td align="center"><?php echo $row['kode_buku'] ?></td>
                <td align="center"><?php echo $row['judul_buku'] ?></td>
                <td align="center"><?php echo $row['penerbit'] ?></td>
                <td align="center"><?php echo $row['deskripsi'] ?></td>
                <td align="center"><?php echo $row['kategori'] ?></td>
                <td align="center"><a href="../buku/<?php echo $row['letak_buku'] ?>" target="_blank">Lihat Buku</a></td>
                <td align="center">
                    <a href="javascript:edit_id('<?php echo $row[0]; ?>')">
                        <img src="../images/b_edit.png" align="EDIT" />
                    </a>
                </td>
                <td align="center">
                    <a href="javascript:delete_id('<?php echo $row[0]; ?>')">
                        <img src="../images/b_drop.png" align="DELETE" />
                    </a>
                </td>
            </tr>
        <?php
            $no++;
        }
        ?>
        </tbody>
    </table>
</div>

<?php
} else {
?>

<div class="center container" style="width:400px">
    <div class="card blue-grey darken-1">
        <form action="inc/login.php" method="post">
            <div class="card-content white-text">
                <span class="card-title">Login</span>
                <div class="input-field">
                    <input placeholder="Username" name="username" type="text" class="validate">
                </div>
                <div class="input-field">
                    <input placeholder="Password" name="password" type="password" class="validate">
                </div>
            </div>
            <div class="card-action left">
                <input type="submit" class="btn" name="login" value="Login">
            </div>
        </form>
    </div>
</div>

<?php
}
?>

<?php include 'inc/footer.php'; ?>
