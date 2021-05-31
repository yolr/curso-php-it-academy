<?php

include ('db.php');

if (isset($_POST['save_venta'])){
    $nom=$_POST['nom'];
    $quantitat=$_POST['quantitat'];
    
    $preu=$_POST['preu'];
    
    $query="INSERT INTO venta(nom,quantitat,preu)VALUES ('$nom','$quantitat','$preu')";
    $result=mysqli_query($conn,$query);
    
    header("Location:index.php");

}
?>

