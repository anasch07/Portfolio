<?php 

include('./send/conn.php');


$sql=" Select * from survey LIMIT ";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<p>";
        echo $newCommentCount;
        echo $row['nom'];
        echo "<br>";
        echo $row['comment'];
        echo "<p>";

    }
}
else {
    echo "there is no 9adhya right now ";
}


?>