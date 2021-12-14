<?php
if (isset($_SESSION['level'])) {
    if ($_SESSION['level'] == 'admin') {
        header("Location: ../admin/index.php");
    }else if ($_SESSION['level'] == 'user'){
        header("Location: index.php");
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
                                    <form style="background: #fff;color:#000000" class="login-wrap" id="form" method="POST" action="user.php?aksi=register" enctype="multipart/form-data" >
                                            <div class="form-group">
                                                <label class="mb-1" for="nama">Name</label>
                                                <input class="form-control" type="text" id="nama" name="nama" required />
                                                <div id="validasi-nama"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"  for="email">Email Address</label>
                                                <input class="form-control" type="email" id="email" name="email" required />
                                                <div id="validasi-email"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"  for="password">Password</label>
                                                <input class="form-control" type="password" id="pass" name="pass" required />
                                                <div id="validasi-password"></div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Register</button>
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
<script>

    $(document).ready(function(){
    $('#email').blur(function(){
        var email = $(this).val();
        $.ajax({
            type    : 'POST',
            url     : 'user.php?aksi=validasi',
            data    : 'email='+email,
            success : function(data){
                $('#validasi-email').html(data);
            }
        })
    });

    $('#form').submit(function(){
       
        if ($('#nama').val().length  < 8) {
        $('#validasi-nama').html('<p class="text-danger">Silahkan isi nama anda min. 8 karakter </p>');
        return false;
       } 

       if ($('#email').val().length  == 0) {
        $('#validasi-email').html('<p class="text-danger">Silahkan isi email anda </p>');
        return false;
       } 

       if ($('#pass').val().length  < 8) {
        $('#validasi-password').html('<p class="text-danger">Silahkan isi password anda min. 8 karakter </p>');
        return false;
       } 
    });
});

</script>
</body>
</html>