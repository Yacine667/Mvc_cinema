<?php ob_start() ?>
<form action="index.php" method="GET">
    <input type="text" class="form-control"  name="action" value="addReal" readonly hidden>
    <div class="form-group">
        <label for="nomInput">Nom du réalisateur</label>
        <input type="text" class="form-control" id="nomInput" placeholder="Entrer Nom" name="nom_personnage" required>
    </div>
    <div class="form-group">
        <label for="prenomInput">prenom de realisateur</label>
        <input type="text" class="form-control" id="prenomInput" placeholder="Entrer Prénom" name='prenom_personnage' required>
    </div>
    <div class="form-group">
        <label for="dateInput">Date de naissance</label>
        <input type="date" class="form-control" id="dateInput" name="date_naissance" required>
    </div>
    <div class="form-group">
        <label for="select">Choix de sexe</label>
        <select id="select" class="custom-select" name="sexe" required>
            <option value="">Choisir</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<?php

$titre = "Ajouter un realisateur";
$titre_secondaire = "Ajouter un realisateur";
$contenu = ob_get_clean();
require "view/template.php";
?>