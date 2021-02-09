<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>CEKEDUBONHEUR</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="modules/bootstrap-4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <?php include 'partials/header.php'; ?>
  <main class="home">

    <div class="text-container">
      <p class="hasbro-s-associe">
        Hasbro s’associe à CEKEDUBONHEUR pour apporter<br class="d-none d-sm-block">
        un peu de bonheur aux enfants et leur famille
      </p>
      <img class="" src="assets/imgs/jauge.png" alt="">
      <div class="text-red">
        <p class="aidez-nous">
          AIDEZ NOUS<br>
          À REMPLIR LE COEUR&nbsp;!
        </p>
        <p class="deja">Déjà</p>
        <div class="compteur">
          <span>0</span>
          <span>4</span>
          <span>0</span>
          <span>0</span>
          <span>0</span>
          <p class="mercis">mercis !</p>
        </div>
        <p class="activez-vite">Activez vite votre don&nbsp;!</p>
        <img class="fleche" src="assets/imgs/fleche.png" alt="">
      </div>
    </div>

    <!-- Formulaire -->
    <div class="form-container">
      <form>
        <img class="playdoh-img" src="assets/imgs/playdoh-vert.png" alt="">
        <label>*champs obligatoires</label>
        <input placeholder="*Entrez votre adresse E-mail" type="email" name="email" required>
        <label class="produit-label">Produit 1 :</label>
        <input placeholder="*Entrez votre code barres produits (13 chiffres)" type="text" name="code" required>
        <label class="produit-label">Produit 2 :</label>
        <input placeholder="*Entrez votre code barres produits (13 chiffres)" type="text" name="code" required>
        <div class="checkbox mt-3">
          <input type="checkbox" name="modalites" required>
          J’ai lu et j’accepte les modalités de l’offre.
        </div>
        <div class="checkbox">
          <input type="checkbox" name="data" required>
          J’accepte que mes données personnelles soient utilisées dans le cadre de l’offre.
        </div>
        <div class="g-recaptcha" data-sitekey="6Ld2sf4SAAAAAKSgzs0Q13IZhY02Pyo31S2jgOB5">
          <div style="width: 304px; height: 78px;">
            <div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Ld2sf4SAAAAAKSgzs0Q13IZhY02Pyo31S2jgOB5&amp;co=aHR0cHM6Ly9wYXRyaWNraGxhdWtlLmdpdGh1Yi5pbzo0NDM.&amp;hl=fr&amp;v=UFwvoDBMjc8LiYc1DKXiAomK&amp;size=normal&amp;cb=kse2p0bngku3" width="304" height="78" role="presentation" name="a-c3rju2xw3fld" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
          </div><iframe style="display: none;"></iframe>
        </div>
        <input type="submit" value="Valider">
        <p class="modalites-text">
          Hasbro met en œuvre des traitements de données à caractère personnel ayant pour ﬁnalités la conservation des preuves d’achat, la gestion et le suivi de l’organisation de l’opération de jeu, la vériﬁcation et le contrôle du respect des dispositions du règlement de jeu, l’analyse de la régularité de la participation, la gestion de la relation avec les participants, le pilotage, le reporting et les statistiques. Vous disposez d’un droit d’accès, de rectiﬁcation, de portabilité, d’effacement de vos données à caractère personnel et de limitation du traitement de vos données ainsi que d’un droit d’opposition et du droit de déﬁnir des directives relatives à la conservation, à l’effacement et à la communication de vos données à caractère personnel après votre décès. Pour en savoir plus sur la protection de vos données, consultez l’article 5 des modalités de l’Offre.
        </p>
        <?php include 'partials/footer.php'; ?>
        <img class="playdoh-img" src="assets/imgs/playdoh-orange.png" alt="">
      </form>
    </div>
  </main>
</body>

</html>
