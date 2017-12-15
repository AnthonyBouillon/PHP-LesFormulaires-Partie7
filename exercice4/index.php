<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Les formulaires exercice 4</title>
    </head>
    <body>
        <h1>Formulaire</h1>
        <hr/>
        <form method="post" action="user.php">
            <label>Nom : </label><input type="text" name="name" placeholder="Saisissez votre nom" id="inputName" title="Écrivez votre nom"/><br/>
            <label>Prénom : </label><input type="text" name="firstName" placeholder="Saisissez votre prénom" id="firstName" title="Écrivez votre prénom"/><br/>
            <button>Validez</button>
        </form>
        <p><a href="../exercice5/index.php">Direction exercice 5</a></p>
        <style>
            #inputName{
                margin-left: 24px;
            }
        </style>
    </body>
</html>
