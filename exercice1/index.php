<DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Transmettres des formulaires - Exercice 1</title>
        </head>
        <body>
            <!-- user.php est ma page où se trouve les données du formulaire -->
            <form method="get" action="user.php">
                <!-- Et ceci grâce au name qui est appeler : $_GET['name']..-->
                <label>Nom : &nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="name" placeholder="Saisissez votre nom"/><br/>
                <label>Prénom : <input type="text" name="firstName" placeholder="Saisissez votre prénom"/><br/>
                    <button>Validez</button>
            </form>
           <p><a href="../exercice2/index.php">Direction exercice 2</a></p>
        </body>
    </html>

    
