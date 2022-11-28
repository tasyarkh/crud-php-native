<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>CRUD PHP NATIVE</title>
</head>
<body>
    <h3>CRUD - PHP NATIVE</h3>

    
    <?php
    //memasukan file koneksi
        include 'connect.php';
    ?>

    
    <table class="table table-bordered border-success mt-lg-5 mb-lg-5 mx-lg-3 w-75">
        <tr>
            <th>No Barang</th>
            <th>Tanggal Masuk</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Action</th>
        </tr>

        
        <?php
        //eksekusi query untuk menampilkan isi table barang masuk
            $no = 1;
            $sql = mysqli_query($connect, "SELECT * FROM brg_masuk");
            while($data = mysqli_fetch_array($sql)){
        ?>
        
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['tanggal']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jumlah']; ?></td>
            <?php echo "<td><a href='update.php?id=$data[id]'>Edit</a> <b>|</b> <a href='delete.php?id=$data[id]'>Delete</a></td>";?>
        </tr>

        <?php
            }
        ?>  
    </table>

            <br/>
            <button type="button" class="btn btn-success mx-lg-3 w-15 shadow-md"><a href="print.php" target="_blank" style="text-decoration: none; color: white; font-weight: bold;">Print</a></button>
           
            <button type="button" class="btn btn-primary mx-lg-3 w-15 shadow-md"><a href="create.php" target="_blank" style="text-decoration: none; color: white; font-weight: bold;">Create</a></button>

            <!-- <button type="button" class="btn btn-warning mx-lg-3 w-15 shadow-md"><a href="update.php?id=$data['id']" style="text-decoration: none; color: white; font-weight: bold;">Update</a></button>

            <button type="button" class="btn btn-danger mx-lg-3 w-15 shadow-md"><a href="delete.php?id=$data['id']" style="text-decoration: none; color: white; font-weight: bold;">Delete</a></button> -->
</body>
</html>