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
                <p><xmp class="aff">
La balise <submit> définie un champs de saisie dans un formulaire</xmp>
<br>
La balise encadre les balises suivantes :<br>
    &ltinput&gt<br>
    &lttextarea&gt<br>
    &ltbutton&gt<br>
    &ltselect&gt<br>
    &ltoption&gt<br>
    &ltoptgroup&gt<br>
    &ltfieldset&gt<br>
    &ltlabel&gt<br>
    <br>
                </p>
            </div>
                  
            <div class="exemple">
                <h2>Exemple</h2>
                <!-- zone pour insertion exemple -->
                <p class="aff">
Une balise FORM avec deux champs d'entrée INPUT et un bouton SUBMIT:
&ltform action="/action_page.php" method="get"&gt <br>
First name: &ltinput type="text" name="fname"&gt&ltbr&gt <br>
Last name: &ltinput type="text" name="lname"&gt&ltbr&gt <br>
&ltinput type="submit" value="Submit"&gt<br>
&lt/form&gt <br>
        
                    donnera le résultat suivant : <br>
            
                 <form action="/action_page.php" method="get">
                First name: <input type="text" name="fname"><br>
                Last name: <input type="text" name="lname"><br>
                <input type="submit" value="Submit">
                </form> 
            </p>
            </div>
         </main>
         <?php include 'footer.php' ; ?>
    </body>
 </html>