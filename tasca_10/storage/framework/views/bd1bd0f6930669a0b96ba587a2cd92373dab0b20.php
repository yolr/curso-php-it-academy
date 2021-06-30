<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LIBRERIA TECNICA</title>

        <style>
            body {
                
                background-color: paleturquoise            }
        </style>
        </head>
        <body>
        <div><h1>LLISTA LLIBRES</h1>




        
        
            <form action ='llistar.php'method='get'>
                
                  <label for="nom">Titol llibre:</label>
                    <input type="text" id="nom" name="nom" autofocus><br><br>
                    
                    <label for="quantitat">Tema</label>
                    <input type="text" id="quantitat" name="quantitat"><br><br>
                    
                    <label for="preu">Unitats disponibles</label>
                    <input type="text" id="preu" name="preu"><br><br>
                    
                    
                    <input type="submit" name='llistar' value='Llistar'>
                </div>

            </form>

            
            
         </div>
        
    </div>
                
                
    </div>
    
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>      
        
        
 </body><?php /**PATH C:\xampp\htdocs\tasca_10\resources\views/index.blade.php ENDPATH**/ ?>