<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Login in here</title>
</head>
<body>
    <center>
        <h4>Halo Selamat Datang !!</h4>
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "username dan password tidak sesuai";
            }
        }
        ?>
        <form action="cekLog.php" method="POST">
            <label for="floatingInputValue">Username</label>
            <input type="text" class="form-control" id="floatingInputValue" placeholder="username" name="username" require>
            <br><br>
            <label for="floatingInputValue">Password</label>
            <input type="password" class="form-control" id="floatingInputValue" placeholder="password" name="password" require>
            <br><br>
            <button type="submit" class="btn btn-primary" name="Submit" value="Add">Login</button>
        </form>
    </center>
</body>
</html>