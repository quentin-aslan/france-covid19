<!doctype html>
<html lang="fr">

<?php require_once('partials/head.php'); ?>

<body>

  <?php require_once('partials/navSecondary.php'); ?>

    <!-- END MENU PAGE SECONDAIRE -->

    <main role="main" class="container">

        <!-- RECHERCHER UN AUTRE PAYS -->
        <div class="row">
            <div class="alert alert-info col-lg-12 text-center">
              <h3 class="d-none d-md-block">Rechercher les statistiques d'un autre pays</h3>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control col-lg-8 float-left" style="margin-bottom: 2%" id="countrySearch" placeholder="Rechercher les statistiques d'un autre pays">
                    </div>
                    <button id="sendSearch" type="submit" class="btn btn-primary mb-2 col-lg-3 float-right">Rechercher</button>
                </form>
            </div>
        </div>
        <!-- END RECHERCHER UN AUTRE PAYS -->
        <div class="text-center h4">Informations mises à jour le <span id="updateTime" class="text-info"></span></div>
        <div class="text-center h4"><span id="test" class="text-danger"></span> personnes testées - <span class="countryName"></span> </div>
        <hr>


        <div class="row">

            <div class="col-lg-3 mb-4">
                <div class="card bg-dark text-white shadow">
                  <div class="card-body text-uppercase">
                    <h1 style="float:left ">Infectés </h1>
                    <h1 class="text-white-50" style="float:right"><i class="fas fa-clinic-medical"></i> <span id="casesCountry"><i class="fas fa-spinner fa-pulse"></i></span></h1>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 mb-4">
                <div class="card bg-danger text-white shadow">
                  <div class="card-body text-uppercase">
                    <h1 style="float:left">Morts </h1>
                    <h1 class="text-white-50" style="float:right"><i class="fas fa-skull-crossbones"></i> <span id="deadCountry"><i class="fas fa-spinner fa-pulse"></i></span></h1>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 mb-4">
                <div class="card bg-success text-white shadow">
                  <div class="card-body text-uppercase">
                    <h1 style="float:left ">Guéris </h1>
                    <h1 class="text-white-50" style="float:right"><i class="far fa-smile-beam"></i> <span id="recoveredCountry"><i class="fas fa-spinner fa-pulse"></i></span></h1>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-3 mb-4">
                <div class="card bg-warning text-white shadow">
                  <div class="card-body text-uppercase">
                    <h1 style="float:left ">critiques </h1> <br>
                    <h1 class="text-white-50" style="float:right"><i class="far fa-frown"></i> <span id="criticalCountry"><i class="fas fa-spinner fa-pulse"></i></span></h1>
                  </div>
                </div>
              </div>

        </div>
        <div class="row">
        
          <div id="sendMoreStats" class="btn btn-warning btn-lg col-lg-12">
          <small>Cliquez ici pour voir les</small> <br >
                Statistiques détaillées
          </div>
    
        </div>

        <hr>

        <div class="row" id="moreStats">
            <div class="col-lg-3 mb-4">
                <div class="card bg-dark text-white shadow">
                  <div class="card-body text-uppercase">
                    <h2 style="float:left ">Nouveaux cas</h2>
                    <h1 class="text-white-50" style="float:right"><i class="fas fa-clinic-medical"></i> <span id="casesCountryDay"><i class="fas fa-spinner fa-pulse"></i></span></h1>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 mb-4">
                <div class="card bg-secondary text-white shadow">
                  <div class="card-body text-uppercase">
                    <h2 style="float:left">Nouveaux décès</h2>
                    <h1 class="text-white-50" style="float:right"><i class="fas fa-skull-crossbones"></i> <span id="deadCountryday"><i class="fas fa-spinner fa-pulse"></i></span></h1>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 mb-4">
                <div class="card bg-info text-white shadow">
                  <div class="card-body text-uppercase">
                    <p style="float:left">Nombre d'inféctés pour 1 million de personnes</p>
                    <h1 class="text-white-50" style="float:right"><i class="fas fa-chart-line"></i> <span id="oneMillionCountry"><i class="fas fa-spinner fa-pulse"></i></span></h1>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 mb-4">
                <div class="card bg-info text-white shadow">
                  <div class="card-body text-uppercase">
                    <p style="float:left">Nombre de morts pour 1 million de personnes</p>
                    <h1 class="text-white-50" style="float:right"><i class="fas fa-chart-line"></i> <span id="oneMillionDeathCountry"><i class="fas fa-spinner fa-pulse"></i></span></h1>
                  </div>
                </div>
              </div>        

        </div>

        <div class="row">

            <div class="alert light-dark shadow text-center col-lg-12">
                <h2>Soyez informés des statistiques et mesures concernant le COVID-19 !</h2>
                <small>Vous serez également informé de la sortie de l'application france-covid19 sur mobile</small>
                <hr>
                <div class="form-group">
                    <label for="">Votre adresse mail</label>
                    <input type="emailInput" class="emailInput form-control" aria-describedby="emailHelp"
                        placeholder="xyz@example.com">
                    <span class="errorEmail form-text text-danger text-muted">Nous ne partegerons votre email avec
                        personne d'autre </span>
                </div>
                <input type="hidden" class="pageEmail" value="newsletter">
                <span class="loadEmail">Chargement ...</span>
                <button type="submit" class="sendEmail btn btn-success btn-lg">Envoyez</button>
                <h3 class="okEmail text-success">Votre adresse mail à bien été envoyé !</h3>
            </div>

        </div>

        <!-- Footer -->
        <?php require_once('partials/footer.php'); ?>
        <!-- End of Footer -->
    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <!-- <script src="assets/js/pages/dashboard.js"></script> -->

  <script src="assets/js/jquery-ui/jquery-ui.min.js"></script>

    <script src="assets/js/email.js"></script>
    <script src="assets/js/statsSearch.js"></script>

    <?php

    if(isset($_GET['country'])) {
        echo $_GET['country'];
    }
    ?>


</body>

</html>