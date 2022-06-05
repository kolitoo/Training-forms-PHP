<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>EXERCICE 1 : Formulaire POST</h1>
    <h2>Exercice 1.1</h2>
    <div class="conteneur">
    <form method="POST" action="" enctype="multipart/form-data">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom"><br><br>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom"><br><br>
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" id="adresse"><br><br>
        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville"><br><br>
        <label for="code_postal">Code Postal</label>
        <input type="text" name="code_postal" id="code_postal"><br><br>
        <label for="sexe">Sexe</label>
        <select name="sexe" id="sexe" name="sexe">
            <option value="homme">Homme</option>        
            <option value="femme">Femme</option> 
        </select><br><br>
        <label for="description">Description</label>
        <textarea name="description" id="description"  rows="5" name="description"></textarea><br><br>
        <input type="submit" value="Envoi" id="valider">
        <hr>
    </form>

    <?php
                if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['ville']) && isset($_POST['code_postal']) && isset($_POST['sexe']) && isset($_POST['description'])) {
                    echo 'Le nom est : <strong>' . $_POST['nom'] . '</strong><br>';
                    echo 'Le prenom est : <strong>' . $_POST['prenom'] . '</strong><br>';
                    echo 'La ville est : <strong>' . $_POST['ville'] . '</strong><br>';
                    echo 'L adresse est : <strong>' . $_POST['adresse'] . '</strong><br>';
                    echo 'Le code postal est : <strong>' . $_POST['code_postal'] . '</strong><br>';
                    echo 'Le sexe est : <strong>' . $_POST['sexe'] . '</strong><br>';
                    echo 'La description est : <strong>' . $_POST['description'] . '</strong><br>';
                }
    ?>
    </div>
        <hr>
        <h2>Exercice 1.2</h2>

        <div class="conteneur">
        <h3>Produit</h3>
        <form method="POST" action="" enctype="multipart/form-data">
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre"><br><br>
        <label for="couleur">Couleur</label>
        <input type="text" name="couleur" id="couleur"><br><br>
        <label for="taille">taille</label>
        <input type="text" name="taille" id="taille"><br><br>
        <label for="poids">Poids</label>
        <input type="text" name="poids" id="poids"><br><br>
        <label for="prix">prix</label>
        <input type="text" name="prix" id="prix"><br><br>
        <label for="stock">stock</label>
        <input type="text" name="stock" id="stock"><br><br>
        <label for="fournisseur">fournisseur</label>
        <input type="text" name="fournisseur" id="fournisseur"><br><br>
        <label for="description">Description</label>
        <textarea name="description" id="description"  rows="5" name="description"></textarea><br><br>
        <input type="submit" value="Envoi" id="valider">
        <hr>
    </form>

    <?php
                if(isset($_POST['titre']) && isset($_POST['couleur']) && isset($_POST['taille']) && isset($_POST['poids']) && isset($_POST['prix']) && isset($_POST['stock']) && isset($_POST['fournisseur']) && isset($_POST['description'])) {
                    echo 'Le titre est : <strong>' . $_POST['titre'] . '</strong><br>';
                    echo 'La couleur est : <strong>' . $_POST['couleur'] . '</strong><br>';
                    echo 'La taille est : <strong>' . $_POST['taille'] . '</strong><br>';
                    echo 'Le poids est : <strong>' . $_POST['poids'] . '</strong><br>';
                    echo 'Le prix est : <strong>' . $_POST['prix'] . '</strong><br>';
                    echo 'Le stock est : <strong>' . $_POST['stock'] . '</strong><br>';
                    echo 'Le fournisseur est : <strong>' . $_POST['fournisseur'] . '</strong><br>';
                    echo 'La description est : <strong>' . $_POST['description'] . '</strong><br>';
                }
    ?>
    </div>
    
</body>
</html>