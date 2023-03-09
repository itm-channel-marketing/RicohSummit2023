<?php

    session_start();


    if ( !isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
        $_SESSION['erro'] = "Page is invalid";
        header('Location: index.php');
        exit;
    }

    $myServer = "18.215.109.94";
    ini_set('mssql.charset', 'UTF-8');
    $connectionInfo = array( "Database"=>"campanha_ricoh", "UID"=>"campanha_ricoh", "PWD"=>"C4mp@nh@Ric2022!", "CharacterSet" => "UTF-8" );
    if( !($dbhandle = sqlsrv_connect($myServer, $connectionInfo)) )
    { 
    // Try to close it if for some reason it's open?
    // Otherwise when you try a connect again, it will revert to anyone it already finds..
    @sqlsrv_close($dbhandle); // Supress error messages.
    // Failed connecting to first database, try secondary
    $dbhandle = sqlsrv_connect($myServer, $connectionInfo) or die ("Couldn't open database.");
    }

    $query = "SELECT * FROM EmailsRicohSummit where  ativo = 1 and (admin is null or admin = 0) and cadastroConcluido = 1";
    $parametros = array($email);

    $consulta = sqlsrv_query($dbhandle, $query, $parametros);

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

  <main>

    <section class="bg-banner">
      <aside>
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-lg-1 col-sm-12 d-block justify-content-end px-2 py-1 flag-p">
              <a href="index.php" title="English">
                <img src="assets/flags/us.svg" alt="" class="flags"></a> &nbsp;&nbsp;&nbsp;
              <a href="/es/index.php" title="Español">
                <img src="assets/flags/mx.svg" alt="" class="flags"></a>
            </div>
          </div>
        </div>
      </aside>
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
    </section>
    <article class="my-4">
      <div class="container-fluid">
        <div class="row">
            <div class="col col-md-6">
                <a href="index.php">
                  <button class="fs-5 button-cta">Back to home</button>
                </a>
            </div>
	    <div class="col col-md-6" style="text-align: right;">
                <a href="export-excel.php">
                  <button class="fs-5 button-cta">Download Excel</button>
                </a>
            </div>
          <div class="col-lg-12 d-flex justify-content-center">
            <div class="text-end px-5 margin-summit">
              <h2 class="red text-center">Registers in the event</h2>
              <p class="my-0 fw-semibold fs-5 text-center">look all registrations in the table below.</p>
            </div>
          </div>
        </div>
      </div>
    </article>
    <section class="bg-gray">
      <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Company</th>
                            <th scope="col">Country</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Food Allergies</th>
                            <th scope="col">Jacket Size</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($consulta){
                                while ($linha = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC)) {
                                    echo '<tr>';
                                    echo '<td>'.$linha['name'].'</td>';
                                    echo '<td>'.$linha['email'].'</td>';
                                    echo '<td>'.$linha['company'].'</td>';
                                    echo '<td>'.$linha['country'].'</td>';
                                    echo '<td>'.$linha['phoneNumber'].'</td>';
                                    echo '<td>'.$linha['foodAllergies'].'</td>';
                                    echo '<td>'.$linha['jacketSize'].'</td>';
                                    echo '</tr>';
                                }
                            }
                            sqlsrv_close($dbhandle);
                        
                        ?>
                    </tbody>
                </table>
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