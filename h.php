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
                    Les balises de h1 à h6 definissent les niveaux de titre<br>
                    La balise h1 est la plus importante et la balise h6 est la moins importante
                    </p>
            </div>
                  
            <div class="exemple">
                <h2>Exemple</h2>
                <!-- zone pour insertion exemple -->
                <p>
                    Les six niveaux de titre en HTML:<br>
                        <h1>Visuel Titre 1</h1>
                        <h2>Visuel Titre 2</h2>
                        <h3>Visuel Titre 3</h3>
                        <h4>Visuel Titre 4</h4>
                        <h5>Visuel Titre 5</h5>
                        <h6>Visuel Titre 6</h6>
                    </p>
            </div>
         </main>
         <?php include 'footer.php' ; ?>
    </body>
 </html>