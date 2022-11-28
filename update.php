<?php

include_once("connect.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];

    //query update
    $result = mysqli_query($connect, "UPDATE brg_masuk SET tanggal = '$tanggal', nama = '$nama', jumlah = '$jumlah' WHERE id =$id");

    //kembali ke index
    header("Location: index.php");
}
?>

<?php
//include koneksi file
include_once("connect.php");

//get id
$id = $_GET['id'];

//query menampilkan
$result = mysqli_query($connect, "SELECT * FROM brg_masuk WHERE id = $id");

while($data = mysqli_fetch_array($result))
{
    
    $tanggal = $data['tanggal'];
    $nama = $data['nama'];
    $jumlah = $data['jumlah'];
}
?>
<html>
    <head>
        <title>Uptade Data</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
        <h3>UPDATE DATA</h3>
        <br>
        <form action="update.php" method="POST" name="update">
            <label for="floatingInputValue">Tanggal</label>
            <input type="date" class="form-control" id="floatingInputValue" placeholder="Tanggal" name="tanggal" require value=<?php echo $tanggal;?>>
            <br><br>
            <label for="floatingInputValue">Nama Barang</label>
            <input type="text" class="form-control" id="floatingInputValue" placeholder="nama barang" name="nama" require value=<?php echo $nama;?>>
            <br><br>
            <label for="floatingInputValue">Jumlah Barang</label>
            <input type="text" class="form-control" id="floatingInputValue" placeholder="jumlah barang" name="jumlah" require value=<?php echo $jumlah;?>>
            <br><br>
            <input type="hidden" class="form-control" id="floatingInputValue"  name="id" value=<?php echo $_GET['id'];?>>

            <button type="Submit" class="btn btn-success" name="update">Update</button>
            <button type="submit" class="btn btn-warning"><a href="index.php" target="_blank" style="text-decoration: none; color: white;">Back</a></button>

           
        </form>
    </body>
</html>
