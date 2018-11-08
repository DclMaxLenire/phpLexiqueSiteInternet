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
La balise <htmml> indique au navigateur qu'il s'agit d'un document HTML.
                                                                
La balise <html> représente la racine d'un document HTML.
                        
La balise <html> est le conteneur pour tous les autres éléments HTML 
(à l'exception de la balise <! DOCTYPE>).
                </xmp></p>
            </div>
                  
            <div class="exemple">
                <h2>Exemple</h2>
                    <p><xmp class="aff">
        <!DOCTYPE html>
        <html>
        <title>HTML Tutorial</title>
            <body>
                            
            <h1>This is a heading</h1>
            <p>This is a paragraph.</p>
                            
            </body>
        </html> 
                    </xmp></p>
            </div>
         </main>
         <?php include 'footer.php' ; ?>
    </body>
 </html>