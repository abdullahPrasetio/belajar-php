<?php 
require 'functions.php';
if (isset($_GET['id'])) {
    $id=$_GET["id"];
}else{
    header('Location: index.php');
    die();
}

if (hapus($id)>0) {
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('data gagal dihapus!');
        </script>
    ";
}
?>