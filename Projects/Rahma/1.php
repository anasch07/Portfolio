<?php

$name = $_POST['name'] ; 
$cin = $_POST['cin'] ; 
$tel = $_POST['tel'];
$governorat =$_POST['governorat'];
$cite =$_POST['cite'];
$adresse =$_POST['adresse'];
$listeAchat =$_POST['listeAchat'];
$remarque =$_POST['remarque'];

include('conn.php');
$query=" INSERT INTO kadhya (cin,nomPrenom,tel,governorat,cite,adresse,listeAchat,remarque)
values (?,?,?,?,?,?,?,?)";
                     
$stmt= mysqli_prepare($conn, $query);

mysqli_stmt_bind_param($stmt,"isisssss",$cin,$name,$tel,$governorat,$cite,$adresse,$listeAchat,$remarque);
mysqli_stmt_execute($stmt);
  
  if ( !$conn ) {
        die("Connection failed : " . mysql_error());
    }


else{
    echo "connected successfully";
}






echo '<script language="Javascript"> 

document.location.replace("success.php");

</script>' 
?>