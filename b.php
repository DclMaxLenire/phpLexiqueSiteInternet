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
La balise <b> spécifie un texte en gras.

La balise <i> définit une partie du texte dans une voix ou une humeur différente. 
Le contenu de la balise <i> est généralement affiché en italique.
La balise <i> peut être utilisée pour indiquer un terme technique, 
une phrase d’une autre langue, une pensée, un nom de navire, etc.
Utilisez l'élément <i> uniquement lorsqu'il n'y a pas d'élément sémantique
 plus approprié

La balise <u> représente un texte qui doit être stylistiquement différent du 
texte normal, tel que les mots mal orthographiés ou les noms propres en chinois.

Le texte d'un élément <pre> est affiché dans une police à largeur fixe 
(généralement Courier) et conserve les espaces et les sauts de ligne.
                </xmp></p>
            </div>
                  
            <div class="exemple">
                <h2>Exemple</h2>
                    <p><xmp class="aff">
<p>This is normal text - <b>and this is bold text</b>.</p> 

<p>He named his car <i>The lightning</i>, because it was very fast.</p>

<p>This is a <u>parragraph</u>.</p> 

<pre>
    Text in a pre element
    is displayed in a fixed-width
    font, and it preserves
    both      spaces and
    line breaks
</pre> 
                        </xmp>
                        </p>
            </div>
         </main>
    <footer>
        <?php include 'footer.php' ; ?>
    </footer>
    </body>
 </html>