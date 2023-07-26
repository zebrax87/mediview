<?php
session_start();
require_once './scripts_php/check_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams">
    <title>MediViewHub</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<style>
    .navbar-nav {
      display: flex;
      align-items: center;
  }

  .nav-item-right {
      margin-left: 20px;
  }

  .nav-link-username {
      color: gray; /* Couleur du texte */
      font-weight: bold; /* Police en gras */
  }
</style>
     
  <!---_________________________________HEADER_____________________-->
  <nav class="navbar navbar-expand-xl fixed-top">
    <div class="container">
      <a class="navbar-brand" href="./index.php"><img class="w-100" src="./img/MediLogo2.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  active" href="./index.php">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./apropos.php">À propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./service.php">Service</a>
          </li>         
        </ul>
        <ul class="right navbar-nav ms-auto">
          <?php require_once './scripts_php/nav.php'; ?>
          <li class="nav-item-right">
              <a class="nav-link-right btn-fill" href="#">Apprendre plus</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!---______________________________FIN___HEADER_________________________________________________-->

      <main>
        <div class="container">
          <div class="row">
            <div class="main col-lg-8">
              <div class="contact-page">
                <h2 class="underscore mb-5">Laissez-nous savoir si vous avez des questions, s'il vous plaît!</h2>
                <div class="line"></div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum sunt optio consequuntur ducimus odit. Deleniti optio saepe unde omnis. Sapiente aliquam repellendus error id veniam totam dolores recusandae non dolorum?</p>
                <div class="line"></div>
                <form id="contactForm">
                  <!-- Nom input -->
                  <div class="mb-3">
                    <input class="form-control" id="name" type="text" placeholder="Name *" data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="name:required">Nom obligatoire.</div>
                  </div>
                  <!-- Entrer d'addresse email  -->
                  <div class="mb-3">
                    <input class="form-control" id="emailAddress" type="email*" placeholder="Email Address *" data-sb-validations="required, email" />
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">L'addresse est requise.</div>
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Votre Addresse Email est invalide.</div>
                  </div>
                  <!-- Le succès d'envoie de message soumis -->
                  <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">Votre message est envoyé avec succès!</div>
                  </div>
                  <!-- L'erreur d'envoie de message soumi-->
                  <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Erreur, le message n'est pas envoyé !</div>
                  </div>
                  <!-- Message input -->
                  <div class="mb-3">
                    <textarea class="form-control" id="contact" type="text" placeholder="Votre message" style="height: 10rem;" data-sb-validations="required"></textarea>
                    <div class="invalid-feedback" data-sb-feedback="message:required">Ecrire quelque chose.</div>
                  </div>
                  <!-- Boutton de soumission de formulaire -->
                  <div class="d-grid">
                    <button class="btn-fill mt-0 disabled" id="submitButton" type="submit">Envoyez</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </main>

      
<!--___________________ Footer : Pied de la page ______________-->
<footer>
  <div class="container text-center text-md-start py-5">
    <div class="footer-wrap">
      <div class="about">
        <img src="./img/MediLogo2.png" alt="">
        <p class="text-muted py-4">
          Notre plateforme offre un moyen intuitif et efficace de stocker, accéder, visualiser et partager des images médicales entre les professionnels de santé, facilitant ainsi la collaboration et l'échange d'informations critiques.
        </p>
        <div class="social-media">
          <a href="" class="me-2 text-reset"><img src="./img/icon/instagram_icon.svg" alt="Instagram"></a>
          <a href="https://twitter.com/egoustou" class="me-2 text-reset"><img src="./img/icon/twitter_icon.svg" alt="Twitter"></a>
          <a href="https://www.linkedin.com/in/abdel-aziz-harane" class="me-2 text-reset"><img src="./img/icon/linkedin_icon.svg" alt="linkedin"></a>
        </div>
      </div>
      <div class="company">
        <h6 class="fw-bold">MediViewHub</h6>
        <p><a href="">A propos</a></p>
        <p><a href="">Services</a></p>
        <p><a href="">Équipe</a></p>
      </div>
      <div class="useful-links">
        <h6 class="fw-bold">Liens utiles</h6>
        <p><a href="">Services</a></p>
        <p><a href="">Politique de confidentialité</a></p>
        <p><a href="">Documentation</a></p>
      </div>
      <div class="newsletter">
        <h6 class="fw-bold">Newsletter</h6>
        <p class="text-muted">Inscrivez-vous et recevez les nouvelles par e-mail.</p>
          <form id="subscribe" action="">
            <label for="email">Votre-mail:</label>
            <input type="email" placeholder="e-mail:" name="email" required>
            <button type="submit" class="btn-fill">Inscrivez-vous</button>
          </form>
      </div>
    </div>
    <div class="copyright">
      <p>&copy; 2023 Medi View Hub | Created by <a href="https://www.linkedin.com/in/abdel-aziz-harane/" title="Abdel-aziz Harane" target="_blank">Abdel-aziz Harane</a></p>
      
    </div>
  </div>
</footer>
  
  <!--_________________________FIN DE FOOTER________________________________________________--> 
  
  <div class="fb2022-copy">Medi View Hub 2023 copyright</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>