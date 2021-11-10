<?php
require ('koneksi.php');
if(isset($_POST['register'])){
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName =$_POST['txt_nama'];

    $query = "INSERT INTO user_detail VALUES ('', '$userMail', '$userPass', '$userName', 2)";
    $result = mysqli_query($koneksi, $query);
    header('Location: login.php');
}
?>
<html>
<head>
    <title>Register Page </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body>
    <main>
    <div class="row">
        <div class="col register-left">
            <div class="title">
                <h1>Yuk gabung & <br>
                    buat akun baru!
                </h1>
                <p>Kami hadir untuk membantumu di kehidupan perkuliahan</p>
                <div class="register">
                    <img src="img/register.png" alt="register">
                </div>
                <div class="flower bottom-0 start-0">
                    <img src="img/flower-register.png" alt="flower">
                </div>
            </div>
        </div>
        <div class="col register-right position-relative">
            <form action="register.php" method="POST">
                <div class="mb-4">
                    <input type="text" name="txt_email" placeholder="Email address" class="form-control">
                </div>
                <div class="mb-4">
                    <input type="password" name="txt_pass" class="form-control" placeholder="Password">
                </div>
                <div class="mb-4">
                    <input type="text" name="txt_nama" placeholder="Full Name" class="form-control">
                </div>
                <p class="login-at-register text-center">Sudah memiliki akun? <a href="login.php">Masuk</a></p>
                <button type="submit" name="submit" class="btn btn-primary container-fluid">Daftar</button>
            </form>
        </div>
    </div>
    </main>
</body>
</html>