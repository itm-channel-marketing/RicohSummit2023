<?php
session_start();

if(!isset($_SESSION['emailValidado']) || $_SESSION['emailValidado'] == false){
	header('Location: login.php');
	exit;
}else if(!isset($_SESSION['refererOk']) || $_SESSION['refererOk'] == false){
    header('Location: registration.php#message');
	exit;
}

unset($_SESSION['refererOk']);

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
  <!-- <nav>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-3 d-flex align-items-center justify-content-between my-4">
          <img src="assets/images/ricoh-logo-sm.png" alt="" class="w-25">
          <div class="d-sm-flex d-lg-none">
            <p class="text-center text-uppercase my-0 fs-2 fw-bold">RLA Summit</p>
            <p class="text-captalise my-0 red fs-small">"Accelerate the Digital Adoption"</p>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex d-none justify-content-end align-items-center my-4">
          <div id="rla-summit">
            <p class="text-center text-uppercase my-0 fs-2 fw-bold">RLA Summit</p>
            <p class="text-captalise my-0 red fs-small">"Accelerate the Digital Adoption"</p>
          </div>
        </div>
      </div>
    </div>
  </nav> -->
  <main>
    <section class="bg-banner">
    </section>
    <article class="my-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <h1 class="red fs-1 text-uppercase">Registration successuful</h1>
              <p class="fs-2">Please check your email for confirmation
              </p>
            </div>
          </div>
        </div>
      </div>
    </article>
  </main>
  <footer>
    <div class="container-flex py-4">
      <div class="row-flex">
        <div class="col-lg d-flex justify-content-center">
          <img src="assets/images/ricoh-logo-footer.png" alt="">
        </div>
      </div>
    </div>
  </footer>
</body>

</html>