<!DOCTYPE html>
<!-- fichier modifier le 08/10 par Corinne -->
<html lang="FR">
    <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="style\style.css">
                <title>Lexique Balise</title>
    </head>
    <body>
        <header>
            <?php include 'menu.php' ; ?>

         </header>


        <main>
            
            <div class="definition">
                <h2> Definition</h2>
                <!-- zone pour insertion definition -->
                <p>
                    <xmp class="aff">
La balise <img> permet d'insérer d'insérer une image dans une page HTML
La balise a deux attributs scr st alt 
src="nom du fichier" : emplacement et nom de l'image à afficher 
alt="text" : affiche ce texte lorsque l'image n'est pas affichable ou lorsque la souris reste 
pointée dessus                                                     
                    </xmp>
                    </p>
            </div>
                  
            <div class="exemple">
                <h2>Exemple</h2>
                <!-- zone pour insertion exemple -->
                <p class="aff">
                    <xmp><img src="image\smiley.gif" alt="Smiley face"> </xmp>
                    <br><br>aura pour résultat d'afficher : <br><br><br>  <img src="image\smiley.gif" alt="Smiley face">    
                    </p>
            </div>
         </main>
         <?php include 'footer.php' ; ?>
    </body>
 </html>