<!DOCTYPE html>
<html lang="fr">
<?php
include('head.php');
?>
<body id="page-top">
   
<?php
include('nav.php');
?>
  <style>
      .form{
		max-width: 400px;
		background: rgba(0, 0, 0, .57);
		border-radius: 20px;
		box-sizing: border-box ;
		padding: 40px;
		margin: auto;
		color: white;
		margin-top: 100p	x;	
		margin-bottom: 50px;
}
input[type=text],input[type=password]{
	width: 100%;
	border-radius: 10px;
	box-sizing: border-box;
	background:black;
	border: none;
	font-weight: 500;
	font-size: 16px;
	border-bottom: 1px solid white;
	margin: 6px;
	color: white;
	padding: 12px 5px;
}
textarea{
    width: 80%;
    border-radius: 10px;
	box-sizing: border-box;
	background:white;
	border: none;
	font-weight: 500;
	font-size: 16px;
	border-bottom: 1px solid white;
	margin: 20px;
	color: black;
	padding: 12px 5px;
}
.form{
		max-width: 400px;
		background: rgba(0, 0, 0, .57);
		border-radius: 20px;
		box-sizing: border-box ;
		padding: 40px;
		margin: auto;
		color: white;
		margin-top: 100px;	
		margin-bottom: 50px;
}
input[type=email]{
	width: 100%;
	border-radius: 10px;
	box-sizing: border-box;
	background:black;
	border: none;
	font-weight: 500;
	font-size: 16px;
	border-bottom: 1px solid white;
	margin: 6px;
	color: white;
	padding: 12px 5px;
}
input[type=radio]{
	padding: 12px 5px;
	margin: 5px;
	margin-top: 15px;
	color: white;
	background-color: black;
}

button{
	cursor: pointer;
	width: 200px;
	margin-top: 25px;
	margin-left: 60px;
	border-radius: 18px;
	font-size: 25px;
	background-color: orange;
	border:none;
	padding: 5px;
	transition-duration:0.4s;
}
button:hover{
	background-color: black;
	color: orange;
	border: 1px solid orange;
}

</style>
 <section class="download bg-primary pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="section-heading text-center mb-5">
                     
                        <h2>الجار للجار رحمة</h2>

        <div class="form">
        <form action="1.php" method="Post" >
			    <input type="text"  name="cin"  placeholder="cin" required=""><br>
				<input type="text"  name="name"  placeholder="name" required=""><br>
				<input type="text"  name="tel"  placeholder="phone" maxlength="8"><br>
				<input type="text"  name="governorat"  placeholder="governorat" required=""><br>
				<input type="text"  name="cite"  placeholder="cite" required=""><br>
				<textarea name="adresse" placeholder="entrez votre adresse complète"></textarea><br>
				<textarea name="listeAchat" placeholder="liste d'achat"></textarea><br>
				<textarea name="remarque" placeholder="remarque"></textarea><br>

    <button type="submit" value="Envoyer"> envoyer </button>
                    </form>
                  
                  
                    </div>
                    <div id="gallery" class="gallery">
            
            </div>
                    

</section>