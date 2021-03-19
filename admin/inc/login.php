<?php
session_start();
include '../../inc/koneksi.php';
if(isset($_POST['login'])){
   $user = mysqli_real_escape_string($mysqli, $_POST['username']);
   $upass = mysqli_real_escape_string($mysqli, $_POST['password']);
   $res=mysqli_query($mysqli, "SELECT * FROM admin WHERE username='$user'");
   $row=mysqli_fetch_array($res);

   if($row['password']== $upass && $row['username']== $user){
      $_SESSION['admin'] = $row['id_admin'];
      header("Location: ../index.php");
   }else{
      ?>
      <script>
         alert('Login Gagal!');
         window.Location.href="../index.php";
      </script>
      <?php
   }
}
?>
