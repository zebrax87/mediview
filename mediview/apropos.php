<?php
session_start();
require_once './scripts_php/check_login.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams">
    <title>Medi View Hub</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
      
  <!---_________________________________HEADER_______
    ==============================================================__________________-->
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

    <!---______________________________FIN___HEADER________
      =====================================================================______________-->

      <!--___________________ CONTENU de la page
  ========================================================================================= ______________-->
      <main>
        <div class="container">
          <div class="row">
            <div class="main col-lg-8">
              <div class="about">
                <h2>MEDI VIEW HUB : PREMIERE AU SENEGAL</h2>
                  <div class="post-img"><img src="./img/3D Text.jpeg" alt=""></div>
                  <h3>La meilleure des plateformes d'imagerie médicale.</h3>
                  <p>Chez MediViewHub, nous sommes passionnés par l'amélioration de la visualisation et de la gestion des images médicales. 
                    Notre plateforme offre un moyen intuitif et efficace de stocker, d'accéder et de visualiser des images médicales, permettant aux professionnels de la santé de prendre des décisions éclairées pour leurs patients.</p>
                    <p>Notre objectif est de simplifier et d'améliorer l'expérience des praticiens en matière d'imagerie médicale. Nous offrons une solution complète et centralisée pour la gestion de toutes les modalités d'imagerie, des radiographies aux échographies, en passant par les scanners et bien plus encore.</p>
                  <h6>Ce qui nous distingue :</h6>
                  <ul class="list-in-text">
                    <li> Interface conviviale : Nous avons conçu une interface utilisateur intuitive et conviviale, offrant une expérience fluide et agréable aux utilisateurs de tous niveaux de compétence technique. 
                      La navigation est simple, les outils de visualisation sont puissants et l'accès aux images médicales est rapide et sécurisé.</li>
                    <li>Support dédié : Notre équipe de support est là pour vous aider à tout moment. 
                      Que vous ayez besoin d'une assistance technique, de conseils d'utilisation ou de réponses à vos questions, nous sommes là pour vous accompagner et vous offrir une assistance personnalisée.</li>
                    <li>Stockage sécurisé : Nous comprenons l'importance de la sécurité et de la confidentialité des données médicales. 
                      C'est pourquoi nous avons mis en place des mesures de sécurité robustes pour protéger vos informations sensibles. 
                      Vos images médicales sont stockées de manière sécurisée et conformément aux normes de confidentialité en vigueur.</li>
                    <li>Intégration transparente : MediViewHub s'intègre facilement aux systèmes existants, ce qui permet une adoption fluide et une compatibilité avec les flux de travail existants. 
                      Vous pouvez tirer parti de toutes les fonctionnalités de notre plateforme sans perturber vos processus de travail actuels.</li>
                      <li>Confidentialité: Nous comprenons l'importance de la confidentialité et de la sécurité des données médicales, en particulier lorsqu'il s'agit de partager des informations sensibles. 
                        C'est pourquoi nous avons mis en place des mesures de sécurité avancées pour garantir que les images partagées sont accessibles uniquement aux professionnels de santé autorisés, tout en respectant les normes de confidentialité en vigueur.
                      </li>
                      
                  </ul>

                  <figure class="quote text-start">
                    <blockquote class="blockquote">
                      <p>La vision d'imagerie médicale 🎇🔬</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Explorez, stockez et visualisez avec <cite title="Source Title">MediViewHub</cite>
                    </figcaption>
                  </figure>

                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ab est repudiandae quasi hic sapiente earum velit fuga odio neque numquam eligendi qui tenetur ipsam, animi atque expedita eaque nesciunt in. Quidem dignissimos totam aperiam inventore quae omnis commodi, modi obcaecati qui culpa dolor, rem dolorum maxime temporibus! Consequatur pariatur quibusdam aspernatur ea, assumenda non, illum, vitae sed temporibus consequuntur quam. Exercitationem ut ad beatae explicabo! Quod fuga culpa, consectetur ipsa assumenda, ut exercitationem fugiat commodi quibusdam quam natus iure impedit recusandae aliquam nihil vitae reprehenderit, facilis deleniti cum eveniet veritatis. Atque ut blanditiis quos excepturi perferendis a, quidem modi.</p>
                  <!-- LES INITIATEURS, EQUIPE : TEAM  -->
                  
                  <div class="team text-center mt-5">
                    <h1>Notre équipe</h1>
                    <p class="front-page">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="team-person">
                      <div class="person">
                        <div class="photo"><img src="./img/profile-pic1.png" alt=""></div>
                        <span class="name">Abdoul Aziz Dabakhe</span>
                        <span>Manager</span>
                      </div>
                      <div class="person">
                        <div class="photo"><img src="./img/profile-pic3.png" alt=""></div>
                        <span class="name">Abdel-aziz Harane</span>
                        <span>SEO</span>
                      </div>
                      <div class="person">
                        <div class="photo"><img src="./img/profile-pic2.png" alt=""></div>
                        <span class="name">Khalifa Diakité</span>
                        <span>CTO</span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </main>
     <!--___________________ FIN CONTENU de la page
  ========================================================================================= ______________-->
      
<!--____             Footer : Pied de la page
  ============================================================= ______________-->
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
        <p>&copy; 2023 Medi View Hub | Created by <a href="https://www.linkedin.com/in/abdel-aziz-harane/" title="Abdel-aziz Harane Abounounou" target="_blank">Abdel-aziz Harane</a></p>
        
      </div>
    </div>
  </footer>
  
  <!--_________________________FIN DE FOOTER____
    ================================================_________________--> 
  
  <div class="fb2022-copy">Medi View Hub 2023 copyright</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </body>
  </html>