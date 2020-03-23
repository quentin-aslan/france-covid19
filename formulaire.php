<!doctype html>
<html lang="fr">

<?php require_once('partials/head.php'); ?>

<body>

    <?php require_once('partials/navSecondary.php'); ?>

    <main role="main" class="container">

                <div class="alert alert-success shadow text-center">
                    <h2>Contactez des étudiants en pharmacie pour avoir un suivi !</h2>
                    <hr>
                    <form>
                        <div class="form-group">
                          <label for="">Votre adresse mail</label>
                          <input type="emailInput" class="emailInput form-control" aria-describedby="emailHelp" placeholder="xyz@example.com">
                          <span class="errorEmail form-text text-danger text-muted">Nous ne partegerons votre email avec personne d'autre </span>
                        </div>
                        <input type="hidden" class="pageEmail" value="suivi">
                        <span class="loadEmail">Chargement ...</span>
                        <button type="submit" class="sendEmail btn btn-primary">Envoyez</button>
                        <a href="projet.php" class="btn btn-dark">En savoir plus ?</a>
                        <h3 class="okEmail text-success">Votre adresse mail à bien été envoyé !</h3>
                      </form>
                </div>
                <div class="text-center">
                    <iframe class="col-lg-10" height="650" title="c19.info" src="https://c19.info/fr/">
                    </iframe>
                </div>


                    <!-- DON -->
                    <div class="alert alert-success">

                        Vous voulez participer à la lutte contre le COVID-19 ? Soutenir une initiative locale? <br>
                        <strong>Accompagner une équipe composée de bénévoles à la protection civile et d'étudiants en pharmacie ? Alors n'attendez plus et faites un don à la hauteur de votre engagement.</strong>

                        <hr>
                        <div class="text-center">
                            <a class="btn btn-success" href="http://www.leetchi.com/c/france-covid19" >Je participe !</a>
                            <a href="projet.php" class="btn btn-dark">Comprendre le projet</a>
                        </div>
                            
                    </div>
                    <!-- END DON -->

                <!-- PUB -->



        <!-- Footer -->
        <?php require_once('partials/footer.php'); ?>
        <!-- End of Footer -->
    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <!-- <script src="assets/js/pages/dashboard.js"></script> -->
    <script src="assets/js/email.js"></script>
</body>

</html>