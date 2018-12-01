
<?php
require_once 'core/init.php';
if (Input::get('login')) {
    if($mahasiswa->login_user(Input::get('username'), Input::get('password'))){
        Session::set('username', Input::get('username'));
        header('Location: data-mahasiswa.php');
    }else{
        echo "Login Gagal";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Form Login dan Tampil Data</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4" id="login-form">
                <div class="login-head">
                    <h3 class="text-center">Login Account</h3>
                    <h5 class="text-center">Login With Your Account!</h5>
                </div>
                <form action="" method="POST">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Masukan username sesuai di KTM</small>
                    </div><div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="Masukan Username" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Nim anda adalah password anda!</small>
                      </div>
                    <input type="submit" name="login" value="Masuk Pak Eko" class="btn btn-block btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>