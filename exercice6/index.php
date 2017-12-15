<DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>Les formulaires exercice 6</title>
        </head>
        <body>
            <?php
            // Tout début du code PHP. Situé en haut de la page web pour faire disparaitre les erreurs
            ini_set("display_errors", 0);
            error_reporting(0);
            ?>
            <!-- PHP -->
            <p><?php
                if (isset($_POST['name']) AND isset($_POST['firstName']) AND isset($_POST['genre'])) {
                    echo 'Tu te nomme' . ' ' . htmlspecialchars($_POST['name']) . ' ' . htmlspecialchars($_POST['firstName']) . ' et tu es de sexe' . ' ' . htmlspecialchars($_POST['genre']);
                    ?><p><a href="index.php">Lien explicite !</a></p><?php
                } else {
                    ?> <!-- Couper php et mettre le formulaire dans le else -->
                <h1>Formulaire</h1><hr/>
                <fieldset name="fieldset">
                    <form method="post" action="index.php">
                        <label for="name">Nom : </label><input type="text" name="name" placeholder="Saisissez votre nom" id="inputName"/><br/>
                        <label for="firstName">Prénom : </label><input type="text" name="firstName" placeholder="Saisissez votre nom"/><br/>
                        <label for="genre">Choisissez votre sexe ci-dessous !</label><br/>
                        <select name="genre">
                            <option value="Masculin">Masculin</option>
                            <option value="Feminin">Féminin</option>
                            <option value="Amaphrodite">Amaphrodite</option>
                        </select><br/>
                        <button>Validez</button>
                    </form>
                </fieldset>
                <p><a href="../exercice7/index.php">Direction exercice 7</a></p><?php
            }
            ?></p>
            

            <!-- CSS -->
            <style>
                select{
                    margin-left: 150px;
                }
                #inputName{
                    margin-left: 24px;
                }
                p{
                    font-size: 20px;
                }
                form
            </style>
        </body>
    </html>