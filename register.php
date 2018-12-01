<?php

require_once 'core/init.php';

if (Input::get('submit')) {
    $mahasiswa->register_user(array(
        'username' => Input::get('username'),
        'nim'      => (int)Input::get('nim'),
        'password'  => password_hash(Input::get('password'), PASSWORD_DEFAULT)
    ));
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
                        <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username"
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukan Username"
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Username"
                            aria-describedby="helpId">
                    </div>
                    <input type="submit" name="submit" value="Daftar Sekarang" class="btn btn-block btn-success">
                </form>
            </div>

        </div>
    </div>
    </div>
</body>