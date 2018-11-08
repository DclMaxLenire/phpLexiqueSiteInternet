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
Cette balise permet de créer une ancre pour liens hypertexte
Le plus important attribut de la balise <a> est l'attribu href, qui indique le lien à ouvrir
Par défaut, les liens apparaissent comme ceci dans les navigateurs :
    Un lien non visité est surligné en bleu
    Un lien visité est surligné en violet
    Un lien actif est surligné en rouge</xmp></p>
            </div>
                  
            <div class="exemple">
                <h2>Exemple</h2>
                    <p>
                        <p><xmp class="aff">
Un lien vers W3Schools.com:
<a href="https://www.w3schools.com">Visit W3Schools.com!</a> </xmp>
<a href="https://www.w3schools.com">Visit W3Schools.com!</a>
                        </p>
            </div>
         </main>
         <?php include 'footer.php' ; ?>
    </body>
 </html>