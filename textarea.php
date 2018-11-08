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
La balise <textarea> définit un contrôle de saisie de texte sur plusieurs lignes.

Une zone de texte peut contenir un nombre illimité de caractères et le texte est
rendu dans une police à largeur fixe (généralement Courier).
                         
La taille d'une zone de texte peut être spécifiée par les attributs cols et rows,
ou même mieux grâce aux propriétés de hauteur et de largeur CSS.</xmp></p>
            </div>
                  
            <div class="exemple">
                <h2>Exemple</h2>
                    <p><xmp class="aff">
<p><textarea rows="4" cols="4">
Exemple zone de texte
</textarea></p>
                    </xmp>
<textarea rows="4" cols="4">
Exemple zone de texte
</textarea></p>
            </div>
         </main>
         <?php include 'footer.php' ; ?>
    </body>
 </html>