<!DOCTYPE html>
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
                <p>
Le commentaire est utilisé pour donner des indications dans le code source<br>
Les commentaires sont utiles pour la bonne compréhension du code source pour les développeurs<br>
Le commentaire n'apparait pas sur la page dans le navigateur
                </p>
            </div>
                  
            <div class="exemple">
                <h2>Exemple</h2>
                <p><xmp>
Voici un commentaire dans un fichier HTML:
<!--This is a comment. Comments are not displayed in the browser-->
                    </xmp>   
                </p>
            </div>
         </main>
         <?php include 'footer.php' ; ?>
    </body>
 </html>