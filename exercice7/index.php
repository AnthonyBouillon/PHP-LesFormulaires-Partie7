<DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>Les formulaires exercice 7</title>
        </head>
        <body>
            <?php
            // Tout début du code PHP. Situé en haut de la page web pour faire disparaitre les erreurs
            ini_set("display_errors", 0);
            error_reporting(0);
            ?>
            <!-- Vérifier si les données entrez dans les input existent-->
            <p><?php
                if(isset($_POST['name']) AND isset($_POST['firstName']) AND isset($_POST['genre'])) {
                    echo 'Tu te nomme' . ' ' . htmlspecialchars($_POST['name']) . ' ' . htmlspecialchars($_POST['firstName']) . ' et tu es de sexe' . ' ' . htmlspecialchars($_POST['genre']);
                } else {
                    echo '';
                }
                ?></p>
            <!-- Vérifie si le fichier existe, et si oui, afficher le nom du fichier sinon afficher le formulaire-->
            <?php
            if (isset($_FILES['file'])) {
                echo 'Le nom et l\'extension du fichier est' . ' ' . $_FILES['file']['name'];
                ?><p><a href="index.php">Retour en arrère</a></p><?php
            } else {
                ?><h1>Formulaire</h1><hr/>
                <fieldset name="fieldset">
                    <form method="post" action="index.php" enctype="multipart/form-data">
                        <label for="name">Nom : </label><input type="text" name="name" placeholder="Saisissez votre nom" id="inputName"/><br/>
                        <label for="firstName">Prénom : </label><input type="text" name="firstName" placeholder="Saisissez votre nom"/><br/>
                        <label for="genre">Choisissez votre sexe ci-dessous !</label><br/>
                        <select name="genre">
                            <option value="Masculin">Masculin</option>
                            <option value="Feminin">Féminin</option>
                            <option value="Amaphrodite">Amaphrodite</option>
                        </select><br/>
                        <input type="file" name="file"/><br/>
                        <button>Validez</button>
                    </form>
                </fieldset>
                <p><a href="../exercice8/index.php">Direction exercice 8</a></p><?php
            };
            ?>
                <!-- Lien qui dirige vers l'exercice suivant -->
            
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
                button{
                    margin-left: 150px;   
                }
            </style>
        </body>
    </html>