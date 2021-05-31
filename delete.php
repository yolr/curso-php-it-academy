<?php

    include('db.php');

    if (isset($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE FROM venta WHERE idProducte=$id";
        $result=mysqli_query($conn,$query);
        if (!$result){
            die('Quary Failed');
        }

        $_SESSION['message']=' Venta eliminada';
        $_SESSION['message_type']='danger';
        header("Location: index.php");

    }
?>



