<?php
session_start();

if ( (!isset($_SESSION['refererLoginAdm']) && !isset($_SESSION['emailAdm'])) || $_SESSION['refererLoginAdm'] == false) {
    $_SESSION['erro'] = "Page is invalid";
    header('Location: login.php');
    exit;
}

unset($_SESSION['refererLoginAdm']);

$_SESSION['refererPostLoginAdm'] = true;


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
  <script src="assets/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Ricoh RLA Summit</title>
</head>

<body>
  <main class="bg-banner">
      <section class="pt-3">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-6 d-flex align-items-start flex-column">
              <div class="mb-auto p-2">
                <img src="assets/images/LOGO_RICOH.png" alt="">
              </div>
              <div class="p-2">
                <img src="assets/images/RICOH-SUMMIT-23.png" alt="" class="w-75 pb-5">
              </div>
            </div>
            <div class="col-lg-6 d-lg-flex justify-content-end d-none ">
              <img src="assets/images/simbolo-summit23.png" alt="" class="w-75">
            </div>
          </div>
        </div>
      </section>
    <section class="py-4">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-12 my-4">
            <div>
              <form action="post-login-admin.php" method="POST">
                
                <div class="row text-center d-flex align-items-center">
                  <div class="col-12 col-md-6 d-flex justify-content-start px-5">
                    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                    <button class="fs-5 button-cta px-5 ms-3">Login</button>
                  </div>
		  <div class="col-12 col-md-6 d-flex justify-content-start px-5">
                    <?php
	                if (isset($_SESSION['erro']) && $_SESSION['erro'] != "") {
	                  $mensagem = $_SESSION['erro'];
	                  unset($_SESSION['erro']);
	                  echo '<div class="mb-3 row"><p class="text-center" style="color:white; font-size: 16pt;">' . $mensagem . '</p>' . '</div>';
	                }
	             ?>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

</html>