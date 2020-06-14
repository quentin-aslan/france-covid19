<!doctype html>
<html lang="fr">

<?php require_once('partials/head.php'); ?>

<body>

  <?php require_once('partials/navSecondary.php'); ?>

    <!-- END MENU PAGE SECONDAIRE -->

    <main role="main" class="container">

        <div class="text-center h4">Informations mises à jour le <span id="updateTime" class="text-info"></span></div>
        <div class="text-center h4"><span id="test" class="text-danger"></span> personnes testées - <span class="countryName">France</span> </div>
        <hr>

        <div class="row">

            <div class="col-lg-6 mb-4">
                <div class="card bg-dark text-white shadow">
                  <div class="card-body text-uppercase">
                    <h1 style="float:left ">Nouveaux cas</h1>
                    <h1 class="text-white-50" style="float:right"><i class="fas fa-clinic-medical"></i> <span id="casesCountryDay"><i class="fas fa-spinner fa-pulse"></i></span></h1>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="card bg-secondary text-white shadow">
                  <div class="card-body text-uppercase">
                    <h1 style="float:left">Nouveaux décès</h1>
                    <h1 class="text-white-50" style="float:right"><i class="fas fa-skull-crossbones"></i> <span id="deadCountryday"><i class="fas fa-spinner fa-pulse"></i></span></h1>
                  </div>
                </div>
              </div>

        </div>

        <div class="row">

            <div class="col-lg-6 mb-4">
                <div class="card bg-danger text-white shadow">
                  <div class="card-body text-uppercase">
                    <h2 style="float:left ">Cas critiques </h1> <br>
                    <h1 class="text-white-50" style="float:right"><i class="far fa-frown"></i> <span id="criticalCountry"><i class="fas fa-spinner fa-pulse"></i></span></h1>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mb-4">
                <div class="card bg-info text-white shadow">
                  <div class="card-body text-uppercase">
                    <p style="float:left">Nombre d'infectés pour 1 million de personnes</p>
                    <h1 class="text-white-50" style="float:right"><i class="fas fa-chart-line"></i> <span id="oneMillionCountry"><i class="fas fa-spinner fa-pulse"></i></span></h1>
                  </div>
                </div>
              </div>               

        </div>

        <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Nombres de cas et morts en France depuis le début de l'épidémie</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
                </div>

                <div class="card-footer text-center">
                    <span class="text-danger">Morts</span> |
                    <span class="text-warning">Infectés</span>
                </div>
            </div>
        </div>

        </div>

        <div class="row">

            <div class="alert alert-primary shadow text-center col-lg-5">
                <h2>Non respect du confinement</h2>
                <hr>
                <h5>Enfreindre les règles de confinement est passible d'une amende de</h5>
                <h2><i class="fas fa-exclamation-triangle"></i>   135 €   <i class="fas fa-exclamation-triangle"></i></h2>
                <br>
                <h5>avec une possible majoration à <strong>375 €</strong> et <strong>1500 €</strong> en cas de récidive.</h5>
                <img src="assets/images/statsAmendes.jfif" alt="">
            </div>

            <div class="alert light-dark shadow text-center col-lg-5 offset-lg-2">
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
                </form>
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
    <script src="assets/js/email.js"></script>
    <script src="assets/js/statsFrance.js"></script>

</body>

</html>