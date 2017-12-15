<html>
    <head>
        <meta charset="utf-8"/>
        <title>Les formulaires exercice 5</title>
    </head>
    <body>
        <h1>Formulaire</h1><hr/>
        <form method="post" action="index.php">
            <label>Nom : </label><input type="text" name="name" placeholder="Saisissez votre nom" id="inputName"/><br/>
            <label>Prénom : </label><input type="text" name="firstName" placeholder="Saisissez votre nom"/><br/>
            <label>Choisissez votre sexe ci-dessous !</label><br/>
            <select>
                <option>Monsieur</option>
                <option>Madame</option>
                <option>Transgenre</option>
            </select><br/>
            <button>Validez</button>
        </form>
        <style>
            select{
                margin-left: 150px;
            }
            #inputName{
                margin-left: 24px;
            }
        </style>
    </body>
</html>