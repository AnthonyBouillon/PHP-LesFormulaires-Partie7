<DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Transmettres des formulaires - Exercice 2</title>
        </head>
        <body>
            <!-- user.php est ma page où se trouve les données du formulaire -->
            <form method="post" action="user.php">
                <!-- Et ceci grâce au name qui est appeler : $_POST['name']..-->
                <label>Nom : &nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="name" placeholder="Saisissez votre nom"/><br/>
                <label>Prénom : <input type="text" name="firstName" placeholder="Saisissez votre prénom"/><br/>
                    <button>Validez</button>
            </form>
            <p><a href="../exercice3/index.php">Direction exercice 3</a></p>
        </body>
    </html>