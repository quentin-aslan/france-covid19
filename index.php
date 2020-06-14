<!doctype html>
<html lang="fr">

<?php require_once('partials/head.php'); ?>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">COVID-19 - France</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <!-- <a class="btn btn-success shadow" href="formulaire.php" target="_blank">
                Avez-vous le COVID-19 ?
                <i class="fas fa-user-nurse"></i>
            </a> -->
            <ul class="navbar-nav ml-auto">

                <li>
                    <a target="_blank" class="text-danger" href="https://dondesang.efs.sante.fr/un-mois-pour-tous-donner-revient">Mobilisez vous, donnez votre sang !</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container">
        <div class="alert alert-success shadow text-center">
            <h2 class="text-center"><span id="timerConfinement"></span></h2>
            <h5 class="text-center">Depuis la fin du confinement</h5>
            <!-- <em>Pas officiellement prolongé</em> -->

            <hr>

            <blockquote class="blockquote text-center">
                <small class="mb-0">
                    Nous vous remercions d'avoir utiliser france-covid19.info comme source d'information durant le confinement.</small>
                </small>
                <footer class="blockquote-footer"><cite title="Source Title">Quentin Aslan</cite></footer>
            </blockquote>
        </div>


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



        <!-- <h4>Statistiques en France - Informations mises à jour le <span id="updateFr" class="text-info"></span> - <span id="test" class="text-danger"></span> personnes testées </h4> -->
        <div class="text-center h4">Informations mises à jour le <span id="updateTime" class="text-info"></span></div>
        <div class="text-center h4"><span id="test" class="text-danger"></span> personnes testées - <span class="countryName">France</span> </div>
        <hr>

        <div class="row">

            <div class="col-lg-4 mb-4">
                <div class="card bg-dark text-white shadow">
                  <div class="card-body text-uppercase">
                    <h2 style="float:left ">Infectés </h2>
                    <h1 class="text-white-50" style="float:right"> <small><i class="fas fa-clinic-medical"></i> <span id="casesCountry"><i class="fas fa-spinner fa-pulse"></i></span></small> </h1>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-4">
                <div class="card bg-danger text-white shadow">
                  <div class="card-body text-uppercase">
                    <h1 style="float:left">Morts </h1>
                    <h1 class="text-white-50" style="float:right"><i class="fas fa-skull-crossbones"></i> <span id="deadCountry"><i class="fas fa-spinner fa-pulse"></i></span></h1>
                  </div>
                </div>
              </div>


              <div class="col-lg-4 mb-4">
                <div class="card bg-success text-white shadow">
                  <div class="card-body text-uppercase">
                    <h1 style="float:left ">Guéris </h1>
                    <h1 class="text-white-50" style="float:right"><i class="far fa-smile-beam"></i> <span id="recoveredCountry"><i class="fas fa-spinner fa-pulse"></i></span></h1>
                  </div>
                </div>
              </div>
        </div>

        <!-- STATS AJD FRANCE -->
        <div class="row">
            <a href="statsSearch.php#country=France" class="btn btn-warning btn-lg shadow col-lg-10 offset-lg-1">
                <small>Cliquez ici pour voir les</small> <br >
                Statistiques détaillées
            </a>
        </div>

        <hr>

        <!-- GESTES BARRIERE -->
        <div class="row">

            <div id="gestesBarriere" class="alert alert-danger shadow text-center col-lg-10 offset-lg-1">
                <h2>5 GESTES "BARRIÈRE"</h2>
                <hr>
                <h5>Face aux infections, il existe des gestes simples pour préserver votre santé et celle de votre entourage</h5>
                <button class="btn btn-danger btn-lg shadow col-lg-6" data-toggle="modal"
                    data-target="#gestesModal">
                        Se renseigner !
                </button>
            </div>
        </div>
        <div class="text-center h4">Informations mises à jour le <span id="updateTimeMonde" class="text-info"></span></div>
        <div class="text-center h4"><span id="testWorld" class="text-danger"></span> personnes testées - <span class="countryWorld">Monde</span> </div>
        <hr>
        <!-- Content Row -->
        <div class="row">

            <!-- Personnes gueris dans le monde -->
            <div class="col-xl-4 col-md- mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-success text-uppercase mb-1">Guéris dans le monde
                                </div>
                                <div id="recoveredWorld" class="h3 mb-0 font-weight-bold text-gray-800"><i
                                        class="fas fa-spinner fa-pulse"></i></div>
                            </div>
                            <div class="col-auto">
                                <i class="far fa-smile-beam fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Personnes morte dans le monde -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-danger text-uppercase mb-1">Morts dans le monde</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div id="deadWorld" class="h3 mb-0 mr-3 font-weight-bold text-gray-800"><i
                                                class="fas fa-spinner fa-pulse"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-skull-crossbones fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Personnes atteinte du virus dans le monde -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-warning text-uppercase mb-1">Infectés</div>
                                <div id="casesWorld" class="h3 mb-0 font-weight-bold text-gray-800"><i
                                        class="fas fa-spinner fa-pulse"></i></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clinic-medical fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        <a href="https://dondesang.efs.sante.fr/un-mois-pour-tous-donner-revient" target="_blank">
            <img src="assets/images/don_sang.png" alt="Don du sang" class="img-fluid">
        </a>
        </div>

    </main><!-- /.container -->

    <!-- Footer -->
    <?php require_once('partials/footer.php'); ?>
    <!-- End of Footer -->

    <!-- MODAL -->

    <!-- Geste barrière Modal-->
    <div class="modal fade" id="gestesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        5 GESTES "BARRIÈRE"
                    </h5>
                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
                <div class="modal-body">
                    
                    <p class="text-center">
                        <img src="assets/images/gestesMain.gif" alt="5 gestes barrières" />
                    </p>

                    <p>
                        Face aux infections, il existe des <strong>gestes simples pour préserver votre santé et celle de votre entourage :</strong>
                    </p>

                    <ul>
                        <li>Se laver les mains très régulièrement</li>
                        <li>Tousser ou éternuer dans son coude ou dans un mouchoir</li>
                        <li>Saluer sans se serrer la main, éviter les embrassades</li>
                        <li>Utiliser des mouchoirs à usage unique et les jeter</li>
                        <li>Eviter les rassemblements, limiter les déplacements et les contacts</li>
                    </ul>
                    <div class="alert alert-danger">
                        J’ai des symptômes (toux, fièvre) qui me font penser au COVID-19 : je reste à domicile, j’évite les contacts, j’appelle un médecin avant de me rendre à son cabinet ou j’appelle le numéro de permanence de soins de ma région. Je peux également bénéficier d’une téléconsultation.
                    </div>

                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary shadow"
                        href="https://www.gouvernement.fr/info-coronavirus"
                        target="_blank">
                        Redirection vers <strong>gouvernement.fr/info-coronavirus</strong>
                        <i class="fas fa-shield-alt"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- END MODAL -->
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
     

</body>

</html>