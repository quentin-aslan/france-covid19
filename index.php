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
                    <a target="_blank" href="projet.php" class="btn btn-primary">Comprendre le projet</a>
                </li>

                <li>
                    <span class="text-light font-weight-ligh text-xs nav-link"><i class="fas fa-phone-volume"></i>
                        Numéro vert gratuit 24h/7j</span>
                </li>
                <li class="nav-item  active ">
                    <a class="nav-link font-weight-bold" href="tel:0800130000">0 800 130 000<span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container">
        <!-- <div class="row d-md-none" style="margin-bottom: 5%;">
            <a class="btn btn-success btn-lg shadow col-lg-10 offset-lg-1" href="formulaire.php" target="_blank">
                Avez-vous le COVID-19 ?
                <i class="fas fa-user-nurse"></i>
            </a>
        </div> -->

        <div class="alert alert-danger shadow text-center">
            <h2 class="text-center"><span id="timerConfinement"></span></h2>
            <h5 class="text-center">Avant la fin du confinement</h5>
            <!-- <em>Pas officiellement prolongé</em> -->

            <hr>

            <blockquote class="blockquote text-center">
                <small class="mb-0">
                    <strong>Le confinement prolongé jusqu'au 11 mai</strong>
                    <br>Le gouvernement présentera d’ici quinze jours le plan de l’après 11 mai et les détails d’organisation de notre vie quotidienne</small>
                </small>
                <footer class="blockquote-footer"><cite title="Source Title">Le Président de la République</cite></footer>
            </blockquote>

            <!-- <blockquote class="blockquote text-center">

                <footer class="blockquote-footer"><cite title="Source Title">Ministère de l'intérieur</cite></footer>
            </blockquote> -->
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
                <div class="card bg-primary text-white shadow">
                  <div class="card-body text-uppercase">
                    <p style="float:left text-xs">Verbalisés pour
                        non-respect du confinement</p>
                    <h1 class="text-white-50" style="float:right"><i class="fas fa-shield-alt"></i> <span id="pvFrance"><i class="fas fa-spinner fa-pulse"></i></span></h1>
                  </div>
                </div>
              </div>
        </div>

        <!-- STATS AJD FRANCE -->
        <div class="row">
            <a href="statsFrance.php" class="btn btn-warning btn-lg shadow col-lg-10 offset-lg-1">
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

        <!-- GRAPHIQUE PAR CONTINENT -->
        
        <!-- FORMULAIRE SYMPTOME -->
        <div class="row">
            <div class="alert alert-dark shadow col-lg-10 offset-lg-1 text-center ">
                <a class="btn btn-danger btn-lg shadow" href="formulaire.php" target="_blank">
                    Avez-vous le COVID-19 ?
                    <i class="fas fa-user-nurse"></i>
                </a>
                <br /><br />
                <h5>Répondez à ce questionnaire pour savoir si vous avez le Covid-19 et vous faire suivre par notre
                    équipe d'étudiants en pharmacie volontaires.</h5>
            </div>
        </div>

        <!-- CONFINEMENT -->
        <div class="row">
            <button class="btn btn-primary btn-lg shadow col-lg-10 offset-lg-1" data-toggle="modal"
                data-target="#confinementModal">
                <i class="fas fa-exclamation-triangle"></i>
                <small>Cliquez ici pour voir les</small> <br >Règles du confinement
                <i class="fas fa-exclamation-triangle"></i>
            </button>

        </div>

        <hr>

        <!-- END CONFINEMENT -->

        <div class="row">

            <div class="alert alert-danger shadow text-center col-lg-10 offset-lg-1">
                <h2>Don du <strong class="text-danger">sang</strong></h2>
                <hr>
                <h5>Les citoyens sont <strong>AUTORISÉS</strong> à se déplacer pour aller <strong class="text-danger">donner
                        leur sang</strong> sur les sites de collecte de l'EFS</h5>
                <button class="btn btn-danger btn-lg shadow col-lg-6" data-toggle="modal"
                    data-target="#donduSangModal">
                    <i class="fas fa-exclamation-triangle"></i>
                        Se renseigner !
                    <i class="fas fa-exclamation-triangle"></i>
                </button>
            </div>
        </div>

        <div class="row text-center">
        
        <div class="alert alert-light text-center col-lg-12 d-none d-md-block">
        
            <div style="vertical-align: middle;text-align:center" class="float-left" id="o2adiv48206676">
                <noscript><a href="http://www.okoclick.fr" target="_blank">Régie pub et affiliation - OkoClick</a></noscript>
                <script type="text/javascript">
                    var _oaf = _oaf || [];
                    _oaf.push('3-1727-3385-1-30467424256-0-o2adiv48206676');
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
            <div style="vertical-align: middle;text-align:center" class="float-right d-none d-md-block" id="o8adiv6877270">
                <noscript><a href="http://www.okoclick.fr" target="_blank">Régie pub et affiliation - OkoClick</a></noscript>
                <script type="text/javascript">
                    var _oaf = _oaf || [];
                    _oaf.push('3-1727-3385-1-30467424256-0-o8adiv6877270');
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
        </div>
        
        </div>

        <hr>

        <!-- LIVRAISONS -->
        <!-- <div class="row">
            <div class="alert alert-success shadow col-lg-10 offset-lg-1">
                <h2 class="text-center">Livraisons</h2>
                <hr>
                <h5 class="text-center">La vente à emporter est toujours autorisée, de ce fait plusieurs restaurants
                    restent
                    ouverts.</h5>

            </div>
        </div> -->
        <!-- END LIVRAISON -->

        <div class="row">

            <div class="alert light-dark shadow text-center col-lg-5">
                <h2>Soyez informés des statistiques et mesures concernant le COVID-19 !</h2>
                <small>Vous serez également informé de la sortie de l'application france-covid19 sur mobile</small>
                <hr>
                <button data-toggle="modal" data-target="#emailModal" class="btn btn-success btn-lg">Envoyer votre email</button>
            </div>

            <div id="maps" class="alert alert-warning shadow col-lg-5 offset-lg-2">
                <h5 class="text-center">Carte interactive</h5>
                <hr>
                <h2 class="text-center">
                    <a class="btn btn-warning btn-lg" target="_blank"
                        href="https://www.arcgis.com/apps/opsdashboard/index.html#/bda7594740fd40299423467b48e9ecf6"
                        role="button">Carte interactive COVID-19</a>
                </h2>

                <h2 class="text-center">
                    <a class="btn btn-primary btn-lg" target="_blank"
                        href="https://mapthenews.maps.arcgis.com/apps/opsdashboard/index.html#/5e09dff7cb434fb194e22261689e2887"
                        role="button">Carte interactive COVID-19 (france)</a>
                </h2>
            </div>
        </div>

        <!-- DON -->
        <div class="alert alert-success">
            Vous voulez participer à la lutte contre le COVID-19 ? Soutenir une initiative locale? <br>
            <strong>Alors n'attendez plus et faites un don à la hauteur de votre engagement.</strong>
            <hr>
            <div class="text-center">
                <a class="btn btn-success" href="http://www.leetchi.com/c/france-covid19" >Je participe !</a>
                <a href="projet.php" class="btn btn-dark">Comprendre le projet</a>
            </div>   
        </div>
        <!-- END DON -->

    </main><!-- /.container -->

    <!-- Footer -->
    <?php require_once('partials/footer.php'); ?>
    <!-- End of Footer -->

    <!-- MODAL -->
    <!-- Confinement Modal-->
    <div class="modal fade" id="confinementModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Règles du confinement
                    </h5>
                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
                <div class="modal-body">
                    <strong> Les déplacements sont interdits sauf dans les cas suivants et uniquement à condition d'être
                        munis d'une attestation</strong> pour :

                    <br />

                    <ul>
                        <li>Déplacements entre le domicile et le lieu d’exercice de l’activité professionnelle, lorsqu’ils sont indispensables à l’<strong>exercice d’activités ne pouvant être organisées sous forme de télétravail ou déplacements professionnels ne pouvant être différés.</strong></li>
                        <li>Déplacements pour effectuer des achats de fournitures nécessaires à l’activité professionnelle et des achats de première nécessité dans des établissements dont les activités demeurent autorisées.</li>
                        <li><strong>Consultations et soins ne pouvant être assurés à distance et ne pouvant être différés</strong>; soin des patients atteints d'une affection de longue durée.</li>
                        <li>Déplacements pour motif familial impérieux, pour l’assistance aux personnes vulnérables ou la garde d’enfants.</li>
                        <li><strong class="text-danger">Déplacements brefs, dans la limite d'une heure quotidienne et dans un rayon maximal d'un kilomètre autour du domicile</strong>, liés soit à l'activité physique individuelle des personnes, à l'exclusion de toute pratique sportive collective et de toute proximité avec d'autres personnes, soit à la promenade avec les seules personnes regroupées dans un même domicile, soit aux besoins des animaux de compagnie.</li>
                        <li>Convocation judiciaire ou administrative.</li>
                        <li><strong>Participation à des missions d’intérêt général</strong> sur demande de l’autorité administrative</li>
                    </ul>

                    <strong>Les deux documents nécessaires pour circuler sont disponibles :</strong>

                    <ul>
                        <li><strong>l'attestation individuelle</strong>, à télécharger ou à reproduire sur papier libre.
                            Elle doit être remplie pour chaque déplacement non professionnel ;</li>
                        <li><strong>l'attestation de l'employeur</strong>, Elle est valable pendant toute la durée des
                            mesures de confinement et n’a donc pas à être renouvelée tous les jours.</li>
                    </ul>

                    <!-- DON -->
                    <div class="alert alert-success">
                        Vous voulez participer à la lutte contre le COVID-19 ? Soutenir une initiative locale? <br>
                        <strong>Alors n'attendez plus et faites un don à la hauteur de votre engagement.</strong>
                        <hr>
                        <div class="text-center">
                            <a class="btn btn-success" href="http://www.leetchi.com/c/france-covid19" >Je participe !</a>
                            <a href="projet.php" class="btn btn-dark">Comprendre le projet</a>
                        </div>
                    </div>
                    <!-- END DON -->

                </div>
                <div class="modal-footer">

                    <a class="btn btn-dark shadow"
                        href="https://www.gouvernement.fr/sites/default/files/contenu/piece-jointe/2020/03/attestation-deplacement-fr-20200324.pdf"
                        target="_blank">
                        Attestation individuel
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


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

    <!-- Don du sang Modal-->
    <div class="modal fade" id="donduSangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Don du <strong class="text-danger">sang</strong>
                    </h5>
                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
                <div class="modal-body">
                    <h3>Mobilisez-vous pour le don de sang, continuez à donner !</h3>

                    Dans le contexte de l’épidémie de coronavirus covid-19, la collecte de sang doit<br />
                    se poursuivre pour répondre aux besoins des patients.<br />
                    Vous pouvez vous rendre en collecte sauf si vous présentez des symptômes grippaux.
                    <hr />
                    <div class="alert alert-danger">
                        Info donneurs : dans le cadre des mesures de confinement, <br />
                        les citoyens sont autorisés à se déplacer pour aller donner leur sang sur les sites de collecte
                        de l’EFS, sous réserve de remplir <strong>l’attestation officielle</strong> <br />
                        ou une déclaration sur l’honneur indiquant indiquant qu’ils vont donner leur sang, au motif de
                        l’assistance aux personnes vulnérables.
                    </div>

                    <!-- PUB -->
                    <div style="vertical-align: middle;text-align:center" id="o2adiv66718960" class="d-none d-md-block">
                        <noscript><a href="http://www.okoclick.fr" target="_blank">Régie pub et affiliation - OkoClick</a></noscript>
                        <script type="text/javascript">
                            var _oaf = _oaf || [];
                            _oaf.push('3-1727-3385-1-134217728-0-o2adiv66718960');
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
                <div class="modal-footer">
                    <a class="btn btn-danger shadow"
                        href="https://dondesang.efs.sante.fr/"
                        target="_blank">
                        Redirection vers <strong>dondesang.efs.sante.fr</strong>
                        <i class="fas fa-syringe"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- email Modal-->
    <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Soyez informés des statistiques et mesures concernant le COVID-19 !
                    </h5>
                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
                <div class="modal-body">
                    <div class="alert light-dark shadow text-center">
                        <strong>Vous serez également informé de la sortie de l'application france-covid19 sur mobile</strong>
                        <hr>
                        <form>
                            <div class="form-group">
                              <label for="">Votre adresse mail</label>
                              <input type="emailInput" class="emailInput form-control" aria-describedby="emailHelp" placeholder="xyz@example.com">
                              <span class="errorEmail form-text text-danger text-muted">Nous ne partagerons votre email avec personne d'autre </span>
                            </div>
                    </div>

                    <div style="vertical-align: middle;text-align:center" id="o9adiv72514181" class="d-none d-md-block">
                        <noscript><a href="http://www.okoclick.fr" target="_blank">Régie pub et affiliation - OkoClick</a></noscript>
                        <script type="text/javascript">
                            var _oaf = _oaf || [];
                            _oaf.push('3-1727-3385-1-134217728-0-o9adiv72514181');
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
                    

                </div>
                
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary mr-auto" id="stopEmail">Ne plus me demander</button>
                    <span class="loadEmail">Chargement ...</span>
                    <input type="hidden" class="pageEmail" value="newsletter">
                    <button type="submit" class="sendEmail btn btn-success btn-lg">Envoyez</button>
                    <h3 class="okEmail text-success">Votre adresse mail à bien été envoyé !</h3>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- END MODAL -->
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/email.js"></script>
    <?php
    /**
     * Si l'utilisateur à déja rentrer son email alors on ne lui redemande pas
     */

     if(!isset($_COOKIE['france-covid19-email'])) { ?>

        <script>
            $(() => {
                // Popup email
                setTimeout(()=> {
                    $('#emailModal').modal('show');
                }, 5000);
            });
        </script>

     <?php } ?>

     <?php
    /**
     * Redirection regle de confinement
     */

     if(isset($_GET['modal'])) {
        if($_GET['modal'] == 'confinement') { ?>
            <script>
                $(() => {
                    // Popup email
                        $('#confinementModal').modal('show');
                });
            </script>
        <?php }} ?>
     

</body>

</html>