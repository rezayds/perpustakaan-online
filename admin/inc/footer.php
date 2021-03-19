    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('select').material_select();
      });
    </script>
    <script type="text/javascript">
      function edit_id(id){
        if(confirm('Ingin merubah data ini ?')){
          window.location.href='edit_buku.php?edit_id='+id;
        }
      }
      function delete_id(id){
        if(confirm('Ingin menghapus data ini ?')){
          window.location.href='hapus_buku.php?delete_id='+id;
        }
      }
    </script>
  </body>
</html>
