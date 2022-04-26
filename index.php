<?php

//  $firstname = htmlspecialchars($_GET['firstname']);
//  echo $firstname;
//  $age = htmlspecialchars($_GET['age']);
// echo $age;

//http://localhost:8000/index.php?prenom=%3Cscript%3Ealert(%22hacking%20ok%20!%22)%3C/script%3E
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .formStyle {
            padding: 10px 0;
        }
        body > div {
            padding-top: 50px;
        }
        
    </style>
</head>
    <body>
    <div class="text-center">
        <h1>Inscription</h1>
        <form action="./php/traitement.php" method="POST">
        <div class="formStyle">
            <label for="">Pseudo</label>
            <input name="speudo" placeholder="speudo" type="text">
        </div>
        <div class="formStyle">
            <label for="">Mot de passe</label>
            <input name="password" placeholder="mot de passe" type="password" required> <!-- required force le nav a remplir le champ -->
        </div>
        <div class="formStyle">
            <label for="">Confirmation Mot de passe</label>
            <input name="passwordCheck" placeholder="mot de passe" type="password" required>
        </div> 
        <div class="formStyle">
            <label for="">@mail</label>
            <input name="mail" placeholder="@mail" type="mail" required>
        </div>
            <input type="submit" value="Inscription">
    </form>
    </div>
    
</body>
</html>
