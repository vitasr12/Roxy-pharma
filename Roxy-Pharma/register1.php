<?php
  require_once 'config.php'; 

  if(isset($_POST['btn_signup'])){
    require 'config.php';
    
    $user = strip_tags($_POST['user']);
    $nama = strip_tags($_POST['nama']);
    $email = strip_tags($_POST['email']);
    $pass = strip_tags($_POST['pass']);

    $sql = "INSERT INTO login (user,nama,email,pass) VALUES ('$user','$nama','$email','$pass')";
    $row = $config->prepare($sql);
    $row -> execute(array($sql));
    $jum = $row -> rowCount();
    if($jum > 0){
        $hasil = $row -> fetch();
        $_SESSION['admin'] = $hasil;
            echo '<script>alert("Login Sukses");window.location="index.php"</script>';
    }else{
        echo '<script>alert("Login Gagal");history.go(-1);</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register | Roxy Pharma</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <style type="text/css">
    input[type=text], input[type=password] {
        margin: 5px auto;
        width: 100%;
        padding: 10px;
    }
    input[type=submit] {
        margin 5px auto;
        float: right;
        padding: 5px;
        width: 90px;
        border: 1px solid #fff;
        color: #fff;
        background: red;
        cursor: pointer;
    }
</style>
</head>

<body class="h-100"style="background:#004643;color:#fff;">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form"style="margin: 80px 350px;width: 400px;padding: 10px;border: 1px solid #ccc;background: #004643; border-radius:10px;">
                                    <h4 class="text-center mb-4" style="margin: 0;padding: 25px 20px;text-align: center;background: #42929e;border-radius: 5px 5px 0 0;-webkit-border-radius: 5px 5px 0 0;color: #fff;">Sign up your account</h4>
                                    <form style="background: #fff;color:#000000" class="login-wrap" id="form" method="POST" enctype="multipart/form-data" >
                                            <div class="form-group">
                                                <label class="mb-1" for="nama">Name</label>
                                                <input class="form-control" type="text" id="nama" name="nama" required oninvalid="this.setCustomValidity('Silahkan Isi Nama Anda')" oninput="setCustomValidity('')">
                                                <div id="validasi-nama"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1" for="user">Username</label>
                                                <input class="form-control" type="text" id="user" name="user" required oninvalid="this.setCustomValidity('Silahkan Isi Username Anda')" oninput="setCustomValidity('')">
                                                <div id="validasi-nama"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"  for="email">Email Address</label>
                                                <input class="form-control" type="email" id="email" name="email" required oninvalid="this.setCustomValidity('Silahkan Isi Email Anda')" oninput="setCustomValidity('')">
                                                <div id="validasi-email"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"  for="password">Password</label>
                                                <input class="form-control" type="password" id="pass" name="pass" required oninvalid="this.setCustomValidity('Masukkan Password')" oninput="setCustomValidity('')">
                                                <div id="validasi-password"></div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block" name="btn_signup">Register</button>
                                            </div>
                                            <div class="new-account mt-3">
                                            <p>Already have an account? <a class="text-primary" href="login.php">Sign in</a></p>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="./vendor/global/global.min.js"></script>
<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="./js/custom.min.js"></script>
<script src="./js/deznav-init.js"></script>
</body>
</html>