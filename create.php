<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>CREATE DATA PHP</title>
    <style>
        body{
            margin-left: 40px;
            margin-top: 20px;
        }
        form{
            margin-top: 40px;
        }
        .form-control{
            width: 300px;
            margin-top: 8px;
        }
        h3{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    
        <h3>TAMBAH DATA DENGAN PHP NATIVE</h3>
        
        <form action="create.php" method="POST" name="form">
            <label for="floatingInputValue">ID Barang</label>
            <input type="text" class="form-control" id="floatingInputValue" placeholder="id barang" name="id" disable>
            <br><br>
            <label for="floatingInputValue">Tanggal</label>
            <input type="date" class="form-control" id="floatingInputValue" placeholder="Tanggal" name="tanggal" require>
            <br><br>
            <label for="floatingInputValue">Nama Barang</label>
            <input type="text" class="form-control" id="floatingInputValue" placeholder="nama barang" name="nama" require>
            <br><br>
            <label for="floatingInputValue">Jumlah Barang</label>
            <input type="text" class="form-control" id="floatingInputValue" placeholder="jumlah barang" name="jumlah" require>
            <br><br>

            <button type="submit" class="btn btn-primary" name="Submit" value="Add">Create</button>
            <button type="submit" class="btn btn-warning"><a href="index.php" target="_blank" style="text-decoration: none; color: white;">Back</a></button>
        </form>
   

    <?php
    //INSERT DATA
    if(isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $tanggal = $_POST['tanggal'];
        $nama = $_POST['nama'];
        $jumlah = $_POST['jumlah'];

        //include koneksi db file
        include_once("connect.php");

        //query insert
        $result = mysqli_query($connect, "INSERT INTO brg_masuk(id,tanggal,nama,jumlah) VALUES ('$id','$tanggal','$nama','$jumlah')");

        //pesan add
        echo "<center>Barang Telah Ditambahkan. <a href='index.php'>View Barang</a></center>";
    }
    ?>
</body>
</html>