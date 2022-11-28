<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Print PHP Native</title>
</head>
<body>
    <h3>Mencetak Data DB</h3>
    <?php
    include 'connect.php';
    ?>

    <table class="table table-success table-striped w-75 mx-lg-5">
        <tr>
            <th width="1%">No</th>
            <th>Tanggal</th>
            <th>Nama Barang</th>
            <th width="5%">Jumlah</th>
        </tr>

        <?php
            $no = 1;
            $sql = mysqli_query($connect, "SELECT * FROM brg_masuk");
            while($data = mysqli_fetch_array($sql)){
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['tanggal']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['jumlah']; ?></td>
                </tr>
                <?php
            }
            ?>
    </table>

    <script>
        window.print();
    </script>
</body>
</html>