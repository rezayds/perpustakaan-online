<?php
session_start();
require 'koneksi.php';
if(isset($_POST['login'])){
   $user = mysqli_real_escape_string($mysqli, $_POST['username']);
   $upass = mysqli_real_escape_string($mysqli, $_POST['password']);
   $res=mysqli_query($mysqli, "SELECT * FROM user WHERE username='$user'");
   $row=mysqli_fetch_array($res);

   if($row['password']== $upass && $row['username']== $user){
      $_SESSION['user'] = $row['id'];
      header("Location: ../index.php");
   }else{
      ?>
      <script>
         alert('Login Gagal!');
         window.history.back();
      </script>
      <?php
   }
}
?>
