<!DOCTYPE html>
<html lang="fr">
<?php
include('head.php');
?>
<body id="page-top">
   
<?php
include('nav.php');
?>
    

    <section class="wirvsvirus" style="background-color:grey">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    
                </div>
                <div class="col-12">
                    <div class="ml-auto mr-auto text-center content-wrapper">
                    <br><br>
                    <?php
                    include('conn.php');
                    $id=$_POST['id'];
                    $sql = "DELETE FROM kadhya WHERE cin=$id";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Enregistré avec succès &#9989;</h1>";
} else {
    echo "<h1>erreur;</h1>";
}
                      
            ?>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <script language="javascript" src="./js/stats.js"></script>
    <?php 
include('footer.php');

?>