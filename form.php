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
                <p class="aff">
                        La balise &ltform&gt est utilisée pour insérer un formulaire<br>
                      
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
                <p class="aff">
                        Une balise FORM avec deux champs d'entrée et un bouton SUBMIT:<br>
                            &ltform action="/action_page.php" method="get"&gt <br>
                            First name: &ltinput type="text" name="fname"&gt&ltbr&gt <br>
                            Last name: &ltinput type="text" name="lname"&gt&ltbr&gt <br>
                             &ltinput type="submit" value="Submit"&gt<br>
                            &lt/form&gt <br> <br>
            
                        donnera le résultat suivant : <br>
                </p>
                <form action="/action_page.php" method="get">
                    First name: <input type="text" name="fname"><br>
                    Last name: <input type="text" name="lname"><br>
                    <input type="submit" value="Submit">
                </form> 
                
            </div>
         </main>
         <?php include 'footer.php' ; ?>
    </body>
 </html>