<?php
      
         
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="blog";
$port="3306";

$dbname="blog";
$conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(!isset($_post['name'])){
    echo "hello";
}
else {echo "fuck you" ;}
       $name = $_POST['name'] ; 
       $cin = $_POST['cin'] ; 
       $tel = $_POST['tel'];
       $comment =$_POST['comment'];
       $query=" INSERT INTO account(name,cin,tel,comment)
       values (?,?,?,?)";
      $stmt= mysqli_prepare($conn, $query);
      mysqli_stmt_bind_param($stmt,"isis",$cin,$name,$tel,$comment);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_execute($stmt);
      if ( !$conn ) {
            die("Connection failed : " . mysql_error());
        }
    

       ?>
       <html>
           <body>

<h3>Ajouter un commentaire</h3>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nom">Nom et prenom : </label>
    <input type="text" name="nom" id="nom"/>

    <label for="cin">numero de votre CIN : </label>
    <input type="text" name="cin" id="cin"/>
    <label for="cin">Votre numero de telephone : </label>
    <input type="text" name="cin" id="cin"/>
    <textarea placeholder="vuillez remplir cette formulaire" style="padding:55px" name="comment"></textarea>
    <input type="submit" value="Envoyer"/>
    <input type="hidden" name="id_billet" value="" /><br><br>

   

</form>
    </body>
    </html>