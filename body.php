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
                <p><xmp class="aff">
La balise <body> définit le corps du document.
L'élément <body> contient tout le contenu d'un document HTML, tel que du texte, 
des hyperliens, des images, des tableaux, des listes, etc.
                </xmp></p>
            </div>
                  
            <div class="exemple">
                <h2>Exemple</h2>
                    <p>
                        <p><xmp class="aff">
    <html>
         <head>
             <title>Titre du document</title>
         </head>
                                        
        <body>
            Contenu du document
        </body>
    </html>
                    </xmp>
                    </p>
            </div>
         </main>
         <?php include 'footer.php' ; ?>
    
    </body>
 </html>