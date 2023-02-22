<?php
session_start();

if(!isset($_SESSION['emailValidado']) || $_SESSION['emailValidado'] == false){
	header('Location: login.php');
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
    <section class="mb-5 py-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 my-4">
            <div class="text-center" id="message">
              <h1 class="red fs-2">Registration</h1>
              <p class="fs-5">April 17-21, 2023 - Hilton Mexico City Santa Fe
              </p>
                <?php
                    if(isset($_SESSION['erro']) && $_SESSION['erro'] != ""){
                        $mensagem = $_SESSION['erro'];							
                        unset($_SESSION['erro']);
                        echo '<p class="text-center" style="color:red;">' . $mensagem . '</p>';
                    }
                ?>
            </div>
            <div class="bg-register px-5 py-3">
              <div>
                <form action="post-registration.php" method="POST">
                  <div class="mb-3 row text-center">
                    <label class="col-sm-3 col-form-label fs-3">Name:</label>
                    <div class="col-sm-8">
                      <input type="name" class="form-control" id="name" name="name" required>
                    </div>
                  </div>
                  <div class="mb-3 row text-center">
                    <label class="col-sm-3 col-form-label fs-3">Email:</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                  </div>
                  <div class="mb-3 row text-center">
                    <label class="col-sm-3 col-form-label fs-3">Company:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="company" name="company" required>
                    </div>
                  </div>
                  <div class="mb-3 row text-center">
                    <label class="col-sm-3 col-form-label fs-3">Country:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="country" name="country" required>
                    </div>
                  </div>
                  <div class="mb-3 row text-center">
                    <label class="col-sm-3 col-form-label fs-3">Phone number:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                  </div>
                  <div class="mb-3 row text-center">
                    <label class="col-sm-3 col-form-label fs-3">Food Allergies:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="foodAllergies" name="foodAllergies" required>
                    </div>
                  </div>
                  <div class="mb-3 row text-center">
                    <label class="col-sm-3 col-form-label fs-3">Jacket size:</label>
                    <div class="col-sm-8">
                      <input type="radio" class="btn-check" name="jacketSize" value="XS" id="xs" autocomplete="off" required>
                      <label class="btn btn-jacket" for="xs">XS</label>

                      <input type="radio" class="btn-check" name="jacketSize" value="S" id="s" autocomplete="off">
                      <label class="btn btn-jacket" for="s">S</label>

                      <input type="radio" class="btn-check" name="jacketSize" value="M" id="m" autocomplete="off">
                      <label class="btn btn-jacket" for="m">M</label>

                      <input type="radio" class="btn-check" name="jacketSize" value="L" id="l" autocomplete="off">
                      <label class="btn btn-jacket" for="l">L</label>

                      <input type="radio" class="btn-check" name="jacketSize" value="2XL" id="2xl" autocomplete="off">
                      <label class="btn btn-jacket" for="2xl">2XL</label>
                      <input type="radio" class="btn-check" name="jacketSize" value="3XL" id="3xl" autocomplete="off">
                      <label class="btn btn-jacket" for="3xl">3XL</label>
                    </div>
                  </div>
                  <div class="mb-3 row text-center">
                    <div>
                      <button type="submit" class="fs-5 button-cta my-3">SEND</button>
                    </div>
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