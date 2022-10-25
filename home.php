<?php 
    include "header.php";
?>
<?php
if($_SESSION['role']=='kasir'){
    echo "<script>alert(Selamat datang kasir');</script>";
}
?>

<h2>Selamat datang <?=$_SESSION['nama_user']?> di website Laundryku.</h2>

<?php
    include "footer.php";
?>
