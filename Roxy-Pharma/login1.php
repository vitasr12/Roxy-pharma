<?php

// Lampirkan dbconfig 

require_once "dbconfig.php";

// Cek status login user 

if ($user->isLoggedIn()) {

    header("location: index.php"); //redirect ke index 

}

//jika ada data yg dikirim 

if (isset($_POST['kirim'])) {

    $email = $_POST['email'];

    $password = $_POST['pass'];

    // Proses login user 

    if ($user->login($email, $password)) {

        header("location: index.php");
    } else {

        // Jika login gagal, ambil pesan error 

        $error = $user->getLastError();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

  </head>

  <body style="background:#004643;color:#fff;">

<div id="login-page" style="padding-top:3pc;">
	  	<div class="container">
		      <form class="form-login" method="POST">
                  
                <?php if (isset($error)) : ?>

<div class="error">

    <?php echo $error ?>

</div>

<?php endif; ?>

		        <h2 class="form-login-heading">APOTEK | ROXY PHARMA</h2>
		        <div class="login-wrap">

                <input type="email" name="email" placeholder="email" required />

                <input type="password" name="pass" placeholder="pass" required />

                <button type="submit" name="kirim">login</button>

                <p class="message">Not registered? <a href="register.php">Create an account</a></p>

            </form>

        </div>

    </div>

</body>

</html>