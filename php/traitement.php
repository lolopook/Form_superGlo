<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    if (($_POST["password"] != $_POST["passwordCheck"])) { 
        echo "<p>mots de passe diférent</p>"; 
    } elseif ((empty($_POST["speudo"])) || (empty($_POST["password"])) || (empty($_POST["mail"]))) {
        echo "<p>Erreur recommencez</p>";
    } else {
        '<div class="form">';
                    echo '<p>Bonjour ' . htmlspecialchars($_POST["speudo"]) . '!</p>';
                    echo '<p>Mots de passe ' . htmlspecialchars($_POST["password"]) . '!</p>';
                    echo '<p>@mail : ' . htmlspecialchars($_POST["mail"]) . '!</p>';
            '</div>';
        } 
    ?>
</body>
</html>