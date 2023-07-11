<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Insert_Employer</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/Sign-Up-Form---Gabriela-Carvalho.css"); ?>">
</head>

<body>
    <form action="<?php echo base_url('InfoUserC/insert') ?>">
        <div class="gc004-container">
            <h1 id="titre">Inserer Votre Information</h1>
            <hr>

            <label class="form-label fw-bold" for="name">Age</label><input type="text" placeholder="Vous avez quel Age?"
                name="age" required="">
            <label class="form-label fw-bold" for="name">Taille</label><input type="text"
                placeholder="Combien vous mesurer?" name="taille" required="">
            <label class="form-label fw-bold" for="name">Poids</label><input type="text"
                placeholder="Vous faite combien de kilo?" name="poids" required="">

            <label class="form-label fw-bold" for="name">Genre</label><select class="form-select" requierd=""
                name="genre">
                <optgroup label="Quel est votre genre?">
                    <option value="1" selected="">Homme</option>
                    <option value="2">Femme</option>
                </optgroup>
            </select>


            <div class="gc-clearfix"><a href="#"><button class="gc-cancelbtn"
                        type="button">Retour</button></a>
                <button class="gc-signupbtn" type="submit">Ok</button>
            </div>
        </div>
    </form>
    <script src="<?php echo base_url(assets/bootstrap/js/bootstrap.min.js); ?>"></script>
</body>

</html>