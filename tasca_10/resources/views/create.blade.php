<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LIBRERIA TECNICA</title>

        <style>
            body {
                
                background-color: gray
                
                 }
        </style>
        </head>
        <body>
        <div><h1>AFEGIR LLIBRE</h1>
        </div>
        <div class='container p-6'>
    
    <div class='col-md-6'>
        
        <div class='card card-body'>
            <form action ='save_llibre.php'method='post'>
                  <label for="nom">Nou LLibre:</label>
                    <input type="text" id="nom" name="nom" autofocus><br><br>
                    
                    <label for="tema">Tema </label>
                    <input type="text" id="tema" name="tema"><br><br>
                    
                    <label for="unitats">Unitats rebudes</label>
                    <input type="text" id="unitats" name="preu"><br><br>
                    
                    
                    <input type="submit" name='save_llibre' value='Guardar'>

            </form>
            
         </div>
        
    </div>

        
        
        
        </body>