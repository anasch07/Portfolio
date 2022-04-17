<!DOCTYPE html>
<html lang="fr">
<?php 
include('head.php');
?>
<body id="page-top">
   
   <?php
   include('nav.php');
   ?>
   <link href="./public/css/styleCovid.css" rel="stylesheet">
  <section class="project" id="project">
        <div class="container">
           
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4 my-5 my-lg-4">
                    <div class="mb-auto mt-auto">
                        <div class="mr-0 ml-auto">
                            <h3 class="font-weight-bold mt-5 mb-3 text-"> Corona Statistiques quotidiennes en Tunisie</h3>
                            

                            <a href="#howitworks" class="btn-machbarschaft btn-s btn-white text-center d-inline-block">En savoir plus</a>
                        </div>
                       
                    </div>
                 
                   
                </div>
               

                
            </div>
        </div>
    </section>

<section class="wirvsvirus">
                             

<h2 id="total_cases"> </h2>
        <div id="gallery" class="gallery">
            
      </div>
                    
    </section>
    <button id="upBtn" style="color:grey; border-radius:5px;"onclick="scroll">
    <img src="up.jpg" width="40" height="50">
</button>

    <script language="javascript" src="./js/statq.js"></script>
<?php 
include('footer.php');

?>
</body>
