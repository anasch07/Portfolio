<!DOCTYPE html>
<html lang="fr">
<?php
include('head.php');
?>

<body id="page-top">
   
    <?php
include('nav.php');
?>

    <section class="project" id="project">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4 my-5 my-lg-4">
                    <div class="mb-auto mt-auto">
                        <div class="mr-0 ml-auto">
                            <h1 class="font-weight-bold mt-5 mb-3 text-uppercase">Rahma</h1>
                            <div class="font-weight-bold mb-3">
                                <span class="text-uppercase">Rahma</span> est une AIDE DE quartier pour les personnes âgées sans accès à Internet ou sans COMPÉTENCES Internet
                            </div>
                            <div class="mb-3">
                                Plus de 1.4 millions de personnes en tunisie ont plus de 60 ans, particulièrement exposées au virus et ayant besoin d'aide - mais sans Internet.
                            </div>
                            <div class="mb-3 font-weight-bold">
                                Nous développons une solution accessible à tous: un service téléphonique basé sur la technologie où les voisins plus âgés peuvent soumettre leurs demandes d'achat. Avec une application dans laquelle les bénévoles peuvent accepter les demandes à proximité.
                            </div>
                            <div class="mb-3">
                                Grâce à notre plateforme technologique et à notre intelligence artificielle, nous <span class="font-weight-bold">pouvons fournir de l'aide</span> rapidement, en toute sécurité et de manière évolutive.
                            </div>
                            <a href="#howitworks" class="btn-machbarschaft btn-s btn-white text-center d-inline-block">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <img src="img/Grafik_4.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="wirvsvirus">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <img src="edited.png" width="150px" class="d-block mt-2 mb-3 ml-auto mr-auto">
                </div>
                <div class="col-12">
                    <div class="ml-auto mr-auto text-center content-wrapper">
                      <button ><a href="./rahma2.php"> Rahma2</a></button>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <?php 
    include('howItWorks.php');
    ?>

    <section class="features" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 my-auto">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <iframe src="Rahma.png" frameborder="0" class="img-fluid" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 100%; width: auto" id="app-video"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a id="app-ios" class="mr-3 toggle-app toggle-app-active" onclick="toggleAppVideo('ios')">iOS</a>
                        <a id="app-android" class="toggle-app" onclick="toggleAppVideo('android')">Android</a>
                    </div>
                </div>
                <div class="col-lg-8 my-auto">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="icon-phone text-icon"></i>
                                    <h3>Voisins nécessiteux âgés: à l'intérieur appeler le numéro de Rahma</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="icon-microphone text-icon"></i>
                                    <h3>Un bot enregistre la demande - qu'il s'agisse de shopping ou d'une autre manière</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="icon-screen-smartphone text-icon"></i>
                                    <h3>Notre Rahma montre les demandes dans le quartier</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="icon-bag text-icon"></i>
                                    <h3>Trouvez une demande près de chez vous et aidez les voisins.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="behaviour">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-wrapper-xlarge ml-auto mr-auto mb-3 bg-behaviour">
                        <div class="content-wrapper">
                            <div class="mr-5 pt-5">
                                <span class="font-weight-bold d-block text-right font-size-large">
                                "Comment dois-je me comporter"
                            </span>
                                <span class="font-weight-bold d-block text-right font-size-large">
                                pour ceux qui cherchent de l'aide
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="mr-0 ml-auto content-wrapper">
                        <div class="text-center">
                            <a target="_blank" rel="noopener noreferrer" class="btn-machbarschaft btn-l btn-black d-inline-block" href="#">Télécharger la recommandation</a>
                        </div>
                        <span class="d-block mt-4 text-color-gray">
                        Afin que vous soyez les mieux protégés contre les infections, nous avons déjà
                        développé des règles de conduite détaillées qui respectent les normes  pour vous et nos demandeurs d'aide. Alors
                        tout le monde est protégé!
                    </span>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="mr-auto ml-0 content-wrapper">
                        <div class="text-center">
                            <a target="_blank" rel="noopener noreferrer" class="btn-machbarschaft btn-l btn-black d-inline-block" href="#">Télécharger le flyer</a>
                        </div>
                        <span class="d-block mt-4 text-color-gray">
                        Nos demandeurs d'aide passent un simple coup de téléphone via notre hotline gratuite * et vos préoccupations sont
                        traitées via des systèmes d'intelligence artificielle  Sans aucun contact personnel!
                    </span>
                    </div>
                </div>
                <div class="col-12 col-lg-12 mt-3">
                    <span class="d-block text-center font-weight-bold text-color-gray-base">
                    Vous pouvez en savoir plus dans notre <a href="faq.html">FAQ</a>.
                </span>
                </div>
            </div>
        </div>
    </section>

    <?php 
    include('us.php');
    ?>



   <?php 
   include('footer.php');
   ?>
</body>

</html>