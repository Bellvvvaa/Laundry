<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <?php
    include "koneksi.php";
    $qry_get_paket = mysqli_query($conn, "select * from paket where 
id_paket = '" . $_GET['id_paket'] . "'");
    $dt_paket = mysqli_fetch_array($qry_get_paket);
    ?>
     <br>
    <h3 align="center"><strong>Ubah Paket</strong></h3>
    <form action="proses_ubah_paket.php" method="post">
        <input type="hidden" name="id_paket" value="<?= $dt_paket['id_paket'] ?>">
        jenis paket :
        <select name="jenis_paket" value="<?= $dt_paket['jenis_paket'] ?>" class="form-control">
        <option></option>
            <option value="kiloan">kiloan</option>
            <option value="selimut">selimut</option>
            <option value="bed_cover">bed cover</option>
            <option value="kaos">kaos</option>
        </select>
        harga :
        <input type="text" name="harga" value="<?=$dt_paket['harga'] ?>" class="form-control">
        <input type="submit" name="simpan" value="Ubah Paket" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>