<!doctype html>
<html lang="fr">

<?php require_once('partials/head.php'); ?>

<style>

#ifram {
    margin-bottom: 0;
}

</style>

<body>

    <?php require_once('partials/navSecondary.php'); ?>

    <main role="main" class="container">

        <div class="jumbotron">
            <!-- PUB -->
            <p class="lead text-center">

                <!-- TEXTE COMPRENDRE LE PROJET -->
                <div>
                    <h1>Comprendre le projet ...</h1>
                    <p>
                        L’expansion du virus et la mise en place de politiques restrictives comme <strong>le confinement</strong> a profondément perturbé notre quotidien et celui de nos familles. 
                    </p>
                    <p>
                        Cependant, pour un retour rapide à la normale, pour alléger les hôpitaux, nos parents, amis et personnels soignants, <strong>il faut que la partie civile se mobilise elle aussi. </strong>
                            
                        Nous avons décidé de créer ce site internet pour mutualiser un certain nombre de compétences autant sur le domaine informatique que sur celui de la santé. 
                    </p>

                    <p>
                        <strong>Cette page a été conçue pour sensibiliser et conseiller</strong> le plus rapidement possible un maximum de personnes à surmonter la crise actuelle que connait notre pays. 
                        <br>

                    </p>
                    <p>

                        Pour tenter de l’atteindre, nous proposons en plus du questionnaire sur les symptômes <strong class="text-danger">un service d’écoute</strong> ne remplaçant en aucun cas les conseils d’un médecin mais qui <strong class="text-danger">délivré par des
                            étudiants en pharmacie permet d’avoir un certain suivi en attendant que les médecins généralistes débordés ou les urgentistes puissent vous répondre.</strong>
                    </p>

                    <p>
                        De plus, nous souhaitons mettre en place une application pour faciliter l’accès aux informations et au questionnaire à un plus grand nombre de personnes tout en développant un certain nombre de services d’aides pour les personnes âgées et les malades réalisables. Pour mener à bien toutes ces idées, nous avons besoin de votre soutien.
                    </p>

                    <p>
                    En effet, une partie de ces dons servira à remplir <strong> les frais du site internet et à mettre en ligne l'application</strong> que nous développons en ce moment. et une autre partie sera <strong>reversée aux personnels soignant.</strong> 
                        <strong class="text-success"> Alors si vous souhaitez participer à la lutte contre le COVID-19 et soutenir cette initiative civile, <a class="btn btn-success" href="http://www.leetchi.com/c/france-covid19" target="_blank">faites un don… !</a></strong>
                    </p>

                    <p>Si vous êtes une entreprise, un particulier, membre du corps médical ? <small>(médecin, étudiants en médecine...)</small> contactez nous ! Pour un partenariat ou pour partager vos idées <strong>contact@france-covid19.info</strong> </p>

                </div>
                <!-- END TEXTE COMPRENDRE LE PROJET -->

                <div class="row">

                    <div class="alert light-dark shadow text-center col-lg-5">
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
                        <hr>
                        <!-- PUB -->
                        <div style="vertical-align: middle;text-align:center" id="o9adiv455246">
                            <noscript><a href="http://www.okoclick.fr" target="_blank">Régie pub et affiliation - OkoClick</a></noscript>
                            <script type="text/javascript">
                                var _oaf = _oaf || [];
                                _oaf.push('3-1727-3385-4-134217728-0-o9adiv455246');
                                (function() 
                                {
                                    var oaScpt = (("https:" == document.location.protocol) ? "https://" : "http://") + "www.okoads.com/adj.js?"+Math.floor(Math.random()*99999999999);
                                    var oaSe = document.createElement('script');
                                    oaSe.src = oaScpt;
                                    oaSe.setAttribute('async', 'true');
                                    document.body.appendChild(oaSe);
                                })();
                            </script>
                        </div>
                        <!-- END PUB -->

                    </div>
                    <div class="alert light-dark shadow text-center col-lg-5 offset-lg-2">
                    <h2>Vidéo explicative</h2>
                    <hr>
                    <iframe id="ifram" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fchristianjunior.effi.58%2Fvideos%2F2618708831699429%2F&show_text=1&width=267" width="267" height="871" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>
                </div>


                <!-- PUB -->
            </p>
        </div>



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