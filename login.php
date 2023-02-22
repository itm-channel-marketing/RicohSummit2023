<?php
session_start();

if( isset($_SESSION['emailValidado']) && $_SESSION['emailValidado'] == true && isset($_SESSION['emailSessao']) && $_SESSION['emailSessao'] != "" ){
	
    header('Location: index.php');
	exit;
}
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
            <p class="text-captalise my-0 red fs-small">"Accelerate the Digi!tal Adoption"</p>
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
    <section class="bg-blue mb-5 py-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 my-4">
            <div class="bg-login px-5 py-3">
              <h2 class="text-center">Login</h2>
              <div>
                <form action="post-login.php" method="POST">
                    <?php
						if(isset($_SESSION['erro']) && $_SESSION['erro'] != ""){
							$mensagem = $_SESSION['erro'];							
							unset($_SESSION['erro']);
							echo '<div class="mb-3 row"><p class="text-center" style="color:red;">' . $mensagem . '</p>' . '</div>';
						}
					?>
                    <div class="mb-3 row text-center">
                        <label for="inputPassword" class="col-sm-4 col-form-label fs-5">Email</label>
                        <div class="col-sm-8">
                        <input name="email" type="email" class="form-control" id="inputPassword" required>
                        </div>
                        <button class="fs-5 button-cta my-3">Login</button>
				    </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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