<?php

    include('db.php');
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query="SELECT * FROM venta where idProducte=$id";
        $result=mysqli_query($conn, $query);
       
        $row=mysqli_fetch_array($result);
        $Nom=$row['Nom'];
        $Quantitat=$row['Quantitat'];
    }    
    if (isset($_POST['update'])){
       $id =$_GET['id'];
       $Nom=$_POST['Nom'];
       $Quantitat=$_POST['Quantitat'];
       
       $query= "UPDATE venta set Nom='$Nom', Quantitat='$Quantitat' where idProducte=$id";
       mysqli_query($conn, $query);
       header("Location: index.php");
    }

?>
<?php include('includes/header.php')?>
<?php include('includes/footer.php')?>
    <div class="container p-4">
        <div class="row">
            <div class='col-md-4 mx-auto'>
                <div class="card card-body">
                    <form action="edit.php?id=<?php echo $_GET['id']?> "method="POST">
                        <div class='form-group'>
                            
                            <input type="text" name='Nom' value="<?php echo $Nom; ?>" class="form-control" placeholder="Nom">
                        </div>
                        
                        <div class='form-group'>
                            <textarea name="Quantitat" rows="3" class="form-control"placeholder="Quantitat"><?php echo $Quantitat;?></textarea>
                            
                        </div>
                        <button class="btn btn-success" name='update'>
                            
                            Update
                            
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        



