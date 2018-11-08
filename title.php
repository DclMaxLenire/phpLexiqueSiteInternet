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
La balise <title> est requise dans tous les documents HTML et définit le titre du document.
                                                                
L'élément <title>
                        
    définit un titre dans la barre d'outils du navigateur
    fournit un titre pour la page quand il est ajouté aux favoris
    affiche un titre pour la page dans les résultats du moteur de recherche
</xmp></p>
            </div>
                  
            <div class="exemple">
                <h2>Exemple</h2>
                    <p>
                        <p><xmp class="aff">
            <!DOCTYPE html>
            <html>
                                
            <head>
                <title>HTML Reference</title>
            </head>
                                
            <body>
            The content of the document......
            </body>
                                
            </html> 
                        </xmp>
                        </p>
            </div>
         </main>
         <?php include 'footer.php' ; ?>
    </body>
 </html>