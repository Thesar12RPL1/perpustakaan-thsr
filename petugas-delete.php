<?php
//Proses Delete
if (isset($_GET['delete'])) {
    $id_petugas = $_GET['id_petugas'];
    $query_delete = mysqli_query($konek,"DELETE FROM petugas WHERE id_petugas = '$id_petugas'");
    
    if($query_delete){
        ?>
            <script>
                alert("Data Berhasil Di Delete");
            </script>
        <?php
        header('refresh:0; URL=http://localhost/perpustakaan/dashboard.php?page=petugas');
    }
}
////End of proses delete data/////////////////////////////////////////////////////////////////////////

?>