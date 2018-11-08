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
La balise <table> définit une table HTML.
Une table HTML comprend l'élément <table> et un ou plusieurs éléments <tr>, <th> et <td>.
L'élément <tr> définit une ligne de table, l'élément <th> définit un en-tête de table et l'élément 
<td> définit une cellule de table.
Un tableau HTML plus complexe peut également inclure les éléments &ltcaption&gt, &ltcol&gt, &ltcolgroup&gt, 
&ltthead&gt, &lttfoot&gt et &lttbody&gt.

La balise &lttd&gt définit une cellule standard dans un tableau HTML.
                   
Un tableau HTML a deux types de cellules:
Cellules d'en-tête - contient les informations d'en-tête (créées avec l'élément &ltth&gt)
Cellules standard - contient des données (créées avec l'élément &lttd&gt)
Le texte des éléments &ltth&gt est en gras et centré par défaut.
Le texte dans les éléments &lttd&gt est normal et aligné à gauche par défaut.

La balise &lttr&gt définit une ligne dans un tableau HTML.
Un élément &lttr&gt contient un ou plusieurs éléments &ltth&gt ou &lttd&gt.</xmp></p>
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