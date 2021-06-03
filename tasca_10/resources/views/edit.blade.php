<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LIBRERIA TECNICA</title>

        <style>
            body {
                
                background-color: orange

               }
        </style>
        </head>
        <body>
        
        <div><h1>Modificar llibre {{$id}} </h1>
       
        </div>

        <div class='container p-6'>
    
    <div class='col-md-6'>
        
        <div class='card card-body'>
            <form action ='llistar.php'method='get'>
                  <label for="nom">Titol llibre:</label>
                    <input type="text" id="nom" name="nom" autofocus><br><br>
                    
                    <label for="quantitat">Tema</label>
                    <input type="text" id="quantitat" name="quantitat"><br><br>
                    
                    <label for="preu">Unitats disponibles</label>
                    <input type="text" id="preu" name="preu"><br><br>
                    
                    
                    <input type="submit" name='llistar' value='update'>

            </form>
            
         </div>
        
    </div>

    </div>

        
        
        
        </body>