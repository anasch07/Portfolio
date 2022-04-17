<?php 

include('conn.php');


$sql=" Select * from kadhya ";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<div class=\"kadhya_wahda\">";
        echo " <span class=\"champ\">Nom et Prenom </span>: ";
        echo  $row['nomPrenom'];
        echo " <br><span class=\"champ\">governorat </span>:";
        echo $row['governorat'];

        echo " <br><span class=\"champ\">address complete </span>:";
        echo $row['adresse'];
    
        echo " <br><span class=\"champ\">Cite</span>:";
        echo $row['cite'];
        echo " <br><span class=\"champ\">La liste d'achats </span>:";
        echo $row['listeAchat'];
    
    
        echo " <br><span class=\"champ\">Numero de telephone </span>:";
        echo $row['tel'];
    
        echo " <br><span class=\"champ\">Remarque </span>:";
        echo $row['remarque'];
        //To hard to deal with xD
        echo "<form action=\"supprimer.php\" method=\"POST\">";
        echo "<input type=\"hidden\" name=\"id\" value=\"";
        echo $row['cin'];
        echo "\">";
        echo "<input type=\"submit\" value=\"Je confirme cet achat\"></button>";
        echo "</form>" ;
    

        
        echo "</div>";
    }
}


?>