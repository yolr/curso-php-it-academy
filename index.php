
<?php include ('db.php')?>
<?php include ('includes/header.php')?>

<div class='container p-6'>
    
    <div class='col-md-6'>
        
        <div class='card card-body'>
            <form action ='save_venta.php'method='post'>
                  <label for="nom">Producto:</label>
                    <input type="text" id="nom" name="nom" autofocus><br><br>
                    
                    <label for="quantitat">Quantitat</label>
                    <input type="text" id="quantitat" name="quantitat"><br><br>
                    
                    <label for="preu">Preu</label>
                    <input type="text" id="preu" name="preu"><br><br>
                    
                    
                    <input type="submit" name='save_venta' value='Guardar'>

            </form>
            
         </div>
        
    </div>
    
    <div class='col-md-8'>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Producte</th>
                    <th>Quantitat</th>
                    <th>Total</th>
                    <th>Acción</th>
                
                </tr>
                
            </thead>>
            <tbody>
                <?php
                $alta='SELECT * FROM venta';
                $res=mysqli_query($conn, $alta);
                
                while($row= mysqli_fetch_array($res)){?>
                
                    <tr>
                        <td><?php echo $row['Nom'] ?></td>
                        <td><?php echo $row['Quantitat'] ?></td><!-- comment -->
                        <td><?php echo $row['preu']*$row['Quantitat'] ?></td>
                        <<td>
                            
                            <a href="edit.php?id=<?php echo $row['idProducte']?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a> 
                            
                            <a href="delete.php?id=<?php echo $row['idProducte']?>"class="btn btn-danger">
                               <i class="fas fa-trash-alt"></i> 
                            </a><!-- comment -->
                            
                            
                                                        

                       </td>
                    </tr>
                    
                <?php } ?>
                
               
                
                
           
            
            
        </table>
        
    </div>
    
</div>
<?php include ('includes/footer.php')?>



        
        
        
        
     


