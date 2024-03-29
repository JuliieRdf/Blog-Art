<?php
include '../../../header.php';

$thems = sql_select('thematique', '*');
$Mots = sql_select('MOTCLE', '*');
//$files = sql_select('article', '*');

// foreach ($thems as $them)

//                              {
//                                  echo $them['numThem']; 
//                                 echo $them['libThem'];
//                                 }
// exit(print_r($them));

?>

<head>
    <link rel="stylesheet" href="/source/css/textes.css">
</head>

<body>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="titre">Ajouter un nouvel article</h1>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row">
        <div class="col-3">
            <div class="deco-verti-haut">
                <div class="cercle-g"></div>
            </div>
        </div>
        <div class="col-6">
        </div>
        <div class="col-3">
            <div class="deco-verti-haut">
                <div class="cercle-d"></div>
            </div>
        </div>
    </div>

    <?php


    ?>


    <!--Bootstrap form to create a new status-->


    <div class="row">
        <div class="col-1">
            <div class="deco-hori-g-create"></div>
        </div>
        <div class="col-1">
        </div>
        <div class="col-8">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="mb-5">
                        <label for="dtCreArt">
                            <h3 class="nom-form">Date</h3>
                        </label>
                        <input id="dtCreArt" class="form-control form-control-lg" type="date" name="dtCreArt" required> <!--DATE-->
                    </div>
                    <div class="mb-5">
                        <label for="libTitrArt">
                            <h3 class="nom-form">Titre</h3>
                        </label>
                        <input id="libTitrArt" class="form-control form-control-lg" placeholder="Maximum 100 caractères..." type="text" name="libTitrArt" minlength="1" maxlength="100" required>
                    </div>
                    <div class="mb-5">
                        <label for="libChapoArt">
                            <h3 class="nom-form">Chapeau</h3>
                        </label>
                        <textarea cols="30" rows="4" id="libChapoArt" class="form-control" placeholder="Maximum 500 caractères..." type="text" name="libChapoArt" minlength="1" maxlength="500" required></textarea> <!--Chapo 500-->
                    </div>
                    <div class="mb-5">
                        <label for="libAccrochArt">
                            <h3 class="nom-form">Accroche</h3>
                        </label>
                        <input id="libAccrochArt" class="form-control form-control-lg" placeholder="Maximum 100 caractères..." type="text" name="libAccrochArt" minlength="1" maxlength="100" required> <!--Acroche 100-->
                    </div>
                    <div class="mb-5">
                        <label for="parag1Art">
                            <h3 class="nom-form">Paragraphe 1</h3>
                        </label>
                        <textarea cols="30" rows="9" id="parag1Art" class="form-control" placeholder="Minimum 1200 caractères..." type="text" name="parag1Art" minlength="1100" maxlength="3000" required></textarea> <!--paragraphe 1200-->
                    </div>
                    <div class="mb-5">
                        <label for="libSsTitr1Art">
                            <h3 class="nom-form">Sous Titre 1</h3>
                        </label>
                        <input id="libSsTitr1Art" class="form-control form-control-lg" placeholder="Maximum 100 caractères..." type="text" name="libSsTitr1Art" minlength="1" maxlength="100" required> <!--sous-titre 100-->
                    </div>
                    <div class="mb-5">
                        <label for="parag2Art">
                            <h3 class="nom-form">Paragraphe 2</h3>
                        </label>
                        <textarea cols="30" rows="9" placeholder="Minimum 1200 caractères..." id="parag2Art" class="form-control" type="text" name="parag2Art" minlength="1200" maxlength="3000" required></textarea> <!--paragraphe 2 1200-->
                    </div>
                    <div class="mb-5">
                        <label for="libSsTitr2Art">
                            <h3 class="nom-form">Sous Titre 2</h3>
                        </label>
                        <input id="libSsTitr2Art" class="form-control form-control-lg" placeholder="Maximum 100 caractères..." type="text" name="libSsTitr2Art" minlength="1" maxlength="100" required> <!--sous-titre 2 100-->
                    </div>
                    <div class="mb-5">
                        <label for="parag3Art">
                            <h3 class="nom-form">Paragraphe 3</h3>
                        </label>
                        <textarea cols="30" rows="9" id="parag3Art" class="form-control" placeholder="Minimum 1200 caractères..." type="text" name="parag3Art" minlength="1200" maxlength="3000" required></textarea> <!--paragraphe 3 1200-->
                    </div>
                    <div class="mb-5">
                        <label for="libConclArt">
                            <h3 class="nom-form">Conclusion</h3>
                        </label>
                        <textarea cols="30" rows="4" id="libConclArt" class="form-control" placeholder="Minimum 500 caractères..." type="text" name="libConclArt" minlength="1" maxlength="500" required></textarea> <!--conclusion 500-->
                    </div>
                    <div class="mb-5">
                        <label for="urlPhotArt">
                            <h3 class="nom-form">Photo</h3>
                        </label>
                        <input id="file" class="form-control form-control-lg" type="file" accept="image/*" name="file" required> <!--Image-->

                    </div>
                    <div class="mb-5">
                        <label for="numThem">
                            <h3 class="nom-form">Choix de la thématique</h3>
                        </label>
                        <select class="form-control form-control-lg" name="numThem" id="numThem" required>
                            <option>Choisissez une thématique</option>
                            <?php foreach ($thems as $them) { ?>
                                <option value="<?php echo $them['numThem'];  ?>"> <?php
                                                    echo $them['libThem'];
                                                    } ?></option>
                        </select>
                    </div>


                    <div class="mb-5">
                        <fieldset>
                            <legend>
                                <h3 class="nom-form" >Choix des mots clés</h3>
                            </legend><?php foreach ($Mots as $Mot) { ?>
                                <div>
                                    <label > 
                                        <input name="numMotCle[]" value="<?php echo $Mot['numMotCle']; ?>" style="margin-right: 10px;" type="checkbox"><?php echo $Mot['libMotCle'];  ?>
                                    </label>
                                </div>
                            <?php } ?>
                        </fieldset>
                    </div>


                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>
            </form>
        </div>
        <div class="col-1"></div>
        <div class="col-1 ">
            <div class="deco-hori-d-create"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <div class="deco-verti-bas">
                <div class="cercle-g"></div>
            </div>
        </div>
        <div class="col-6"></div>
        <div class="col-3">
            <div class="deco-verti-bas">
                <div class="cercle-d"></div>
            </div>
        </div>
    </div>
</body>