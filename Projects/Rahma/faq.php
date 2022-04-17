<!DOCTYPE html>
<html lang="fr">
<?php 

include('head.php');
?>

<body id="page-top">


   <?php 
   include('nav.php');
   ?>

    <section class="download bg-primary pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="section-heading text-center mb-5">
                        <h2>FAQ</h2>
                    </div>

                    <h4 class="font-weight-bold">Comment fonctionne Rahma exactement?</h4>
                    <div class="mt-3 mb-3">
                        Sur la carte de notre application gratuite «Rahma», vous pouvez découvrir qui a besoin d'aide dans votre région. </div>
<div class="mt-3 mb-3">
    liquez sur la commande et vous pouvez voir les détails sur le type de demande. Dès que vous avez décidé d'accepter la commande, le numéro de téléphone de la personne recherchant de l'aide s'affiche. Appelez la personne et clarifiez le besoin exact, le
    délai et le mode de paiement. Faites-nous savoir dès que vous êtes sur la route et nous informerons automatiquement la personne qui cherche de l'aide.
</div>
<div class="mt-3 mb-3">
    Allons-y - nous nous réjouissons de vos commentaires!
</div>

<h4 class="font-weight-bold">Comment fonctionne la livraison et le paiement?</h4>
<div class="mt-3 mb-3">
    En général, c'est un service gratuit basé sur votre engagement volontaire. Vous devriez discuter de la liste d'achats avec la personne qui demande de l'aide au préalable. De plus, vous pouvez également organiser le paiement individuellement (paiement
    à l'avance ou uniquement après votre aide? En espèces ou autre moyen de paiement?). Afin d'assurer une totale transparence, nous vous demandons de conserver le reçu. Lors de la remise des marchandises et du paiement, veuillez éviter tout contact physique!
    Gardez la distance minimale de 1m à 2m en plaçant vos achats à la porte de l'appartement. Vous devriez avoir l'argent dans une enveloppe ou similaire. également être placé devant la porte de l'appartement.
</div>
<div class="mt-3 mb-3">
    Ici vous pouvez lire nos recommandations de <a class="cta-phone" href="#">comportement</a> étape par étape
</div>

<h4 class="font-weight-bold">Quand faut-il faire les courses?</h4>
<div class="mt-3 mb-3">
    Vous spécifiez la période exacte par téléphone avec la personne à soutenir.
</div>

<h4 class="font-weight-bold">Que dois-je faire si je ne peux pas joindre la personne par téléphone?</h4>
<div class="mt-3 mb-3">
    Il peut arriver que la personne ne soit pas joignable par téléphone à court terme. Nous vous demandons ici de réessayer. Si cela ne fonctionne pas à nouveau, vous pouvez rejeter la demande afin qu'elle soit à nouveau ajoutée au pool de demandes.
</div>

<h4 class="font-weight-bold">Groupe / personnage cible:</h4>
<div class="mt-3 mb-3">
    "Rahma" a été lancé à l'occasion - la crise de Corona. Nous voulons connecter les gens, capitaliser sur la solidarité et, surtout, apporter de l'aide là où elle est urgente.
</div>
<div class="mt-3 mb-3">
    Rahma s'adresse aux personnes soumises à des restrictions plus strictes que le grand public en raison de COVID-19 et qui ne peuvent pas s'appuyer sur des contacts sociaux étendus, des magasins et des pharmacies ou similaires. en ce moment. Cela comprend
    principalement les personnes âgées et les personnes ayant déjà souffert de maladies.
</div>
<div class="mt-3 mb-3">
    Nous voulons mettre en relation des personnes appartenant à un groupe à risque en raison de leur âge ou pour des raisons de santé avec des personnes qui les soutiennent volontairement pendant cette période et contribuent ainsi à leur protection.
</div>

<h4 class="font-weight-bold">Nos directives sont basées sur les valeurs suivantes:</h4>
<div class="mt-3 mb-3">
    <span class="font-weight-bold">Protection</span> Notre objectif principal est de ralentir la propagation du virus COVID-19 et de protéger les groupes à risque. Lors de la remise des courses, vous devez garder une distance d'au moins 1 à 2 m en plaçant
    les courses devant la porte de l'appartement. Pour les paiements en espèces, les espèces appropriées sont placées dans une enveloppe devant la porte de l'appartement, par exemple.
</div>
<div class="mt-3 mb-3">
    <span class="font-weight-bold">Responsabilité</span> – - courses convenu à faire au mieux de sa connaissance et dans le délai convenu.
</div>
<div class="mt-3 mb-3">
    <span class="font-weight-bold">Confiance</span> – - Afin de protéger au mieux ceux qui demandent de l'aide, nous effectuons un contrôle d'identité individuel. Conservez également le reçu de facture des achats effectués pour le maintien de la transparence.
</div>
<div class="mt-3 mb-3">
    <span class="font-weight-bold">Discrétion</span> - Nous traitons vos données personnelles de manière responsable et protégeons la confidentialité des assistants et de ceux qui recherchent de l'aide.
</div>
<div class="mt-3 mb-3">
    <span class="font-weight-bold">Engagement volontaire et de voisinage</span> – - Aucun frais n'est facturé pour le service fourni. Nous vous demandons de vous traiter avec soin. Particulièrement dans une situation exceptionnelle comme celle-ci, notre
    société compte sur chacun pour rester ensemble le mieux possible.
</div>

</div>
</div>
</div>
</section>
<?php include('footer.php');
?>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/new-age.min.js"></script>
<script>
    let onScroll = function(e) {
        if (window.innerWidth >= 992) {
            let contains = document.getElementById('mainNav').classList.contains('navbar-shrink');
            let image = contains ? 'img/edited3.png' : 'img/edited3.png';
            document.getElementById('logo').setAttribute('src', image);
        } else {
            document.getElementById('logo').setAttribute('src', 'img/edited.png');
        }
    };
    window.addEventListener('scroll', onScroll, {
        passive: true
    });
</script>
</body>

</html>