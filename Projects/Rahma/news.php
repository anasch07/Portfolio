<!DOCTYPE html>
<html lang="fr">
<?php 

include('head.php');
?>

<body id="page-top">
<style>
    .gallery {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-evenly;
    width: 100%;
    max-width: 1200px;
    margin: auto;
}
h3{
    font-family: 'Lateef', serif;}
.scheherazade{font-family: 'Scheherazade', serif;
}

.ida{
background: rgba(76, 175, 80, 0.3);
}
@import url(https://fonts.googleapis.com/earlyaccess/lateef.css); 
.card {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    cursor: pointer;
    width: 1200px;
    margin: 10px 10px 5px;
    padding: 0px;
    border: 2px solid white;
    padding: 10px;
    border-radius: 30px;
    transition: .4s ease-out;
    overflow: hidden;
    font-family: 'Lateef', serif;}
.scheherazade{font-family: 'Scheherazade', serif;
}
section {
    padding: 10px 0;
}
@media (max-width: 960px)
section {
    padding: 10px 0;
}
.card-img {
    width: 250px;
    margin: 10px 15px auto 10px;
    border-radius: 20%;
}

.card-info-container {
    text-align: left;
}

.card-name {
    margin: 20px auto 0;
}

.card-text {
    font-size: 0.9em;
    color: rgba(50, 50, 50, 0.7);
    margin: 7px auto;
    transition: .4s ease-out;
}

.cap {
    text-transform: capitalize;
}

    </style>

   <?php 
   include('nav.php');
   ?>
 <section class="download bg-primary pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="section-heading text-center mb-5">
                     
                        <h2>أخبار فيروس كورونا في جميع أنحاء العالم
</h2>
                    </div>
                    <div id="gallery" class="gallery">
            
            </div>
            </div>        

</section>

</div>
</div>
</div>
<script language="javascript" src="./news/js/script.js"></script>