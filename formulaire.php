<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Le printemps des super-héros</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="modules/bootstrap-4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="formulaire">
  <div class="container d-flex flex-column align-items-center">
  <img class="img-fluid"src="assets/imgs/le-printemps-des-super-heros.png" alt="">
  <form class="d-flex flex-column align-items-start" action="/resultat-gagne.html">
    <div class="form-block mb-4">
      <h1>Participer</h1>
      <div>
        <select class="custom-select" name="civility" required>
          <option value="">Civilité*</option>
          <option value="Madame">Madame</option>
          <option value="Monsieur">Monsieur</option>
        </select>
      </div>
      <div>
        <input type="text" placeholder="Nom*" required>
        <input type="text" placeholder="Prénom*" required>
      </div>
      <div>
        <input type="email" placeholder="Adresse email*" required>
      </div>
      <div>
        <input class="adresse" type="text" placeholder="Adresse postale*" required>
      </div>
      <div>
        <input type="number" placeholder="CP*" required>
        <input type="text" placeholder="Ville*" required>
      </div>
      <div>
        <input type="tel" placeholder="Numéro de téléphone*" required>
      </div>
      <div>
        <div>
          <span>Télécharger le ticket de caisse**</span>
          <input type="file" placeholder="Télécharger le ticket de caisse*" required>
        </div>
        <div>
          <span>Télécharger une photo du produit*</span>
          <input type="file" placeholder="Télécharger une photo du produit*" required>
        </div>
      </div>
      <div class="checkbox mt-2">
        <input type="checkbox" name="rules" required>
        <label for="scales">J’ai lu et j’accepte le règlement du jeu*</label>
      </div>
      <div class="checkbox mb-2">
        <input type="checkbox" name="data" required>
        <label for="scales">J’accepte que mes données personnelles soient utilisées dans le cadre du jeu*</label>
      </div>
      <p class="mb-1">
        * Mentions obligatoires<br>
        ** Une chance de gagner par ticket de caisse. Conservez votre ticket de caisse il pourrait vous être demandé en cas de gain.
      </p>
      <p class="text-justify">Hasbro met en œuvre des traitements de données à caractère personnel ayant pour ﬁnalités la conservation des preuves d’achat, la gestion et le suivi de l’organisation de l’opération de jeu, la vériﬁcation et le contrôle du respect des dispositions du règlement de jeu, l’analyse de la régularité de la participation, la gestion de la relation avec les participants et gagnants, la désignation des gagnants et la remise des lots, le pilotage, le reporting et les statistiques. Vous disposez d’un droit d’accès, de rectiﬁcation, de portabilité, d’effacement de vos données à caractère personnel et de limitation du traitement de vos données ainsi que d’un droit d’opposition et du droit de déﬁnir des directives relatives à la conservation, à l’effacement et à la communication de vos données à caractère personnel après votre décès. Pour en savoir plus sur la protection de vos données, consultez l’article 13 du règlement.
      </p>
    </div>
    <input type="submit" class="c-btn m-auto" value="Valider">
  </form>
  <?php include 'partials/footer-formulaire.php'; ?>
  </div>
</body>

</html>
