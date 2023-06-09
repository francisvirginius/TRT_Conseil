<template>
   <div class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">TRT Conseil est une agence de recrutement</h1>
      <p class="lead my-3"> spécialisée dans l’hôtellerie et la restauration, Fondée en 2014.</p>
    </div>
  </div>

  <!-- btn add a post -->
  <div class="text-center ">
  <!-- btn post an ad if the user is a recruiter -->

  <a class="btn btn-dark" href="/voirAnnonce">Voir les annonce</a>
</div>
<!-- recruiters post  -->
<h1 class="text-center">Exemple des annonces</h1>
  <div class="row mb-2">
    <!-- 1 poste-->
    <div class="col-md-6">
    <h1 class="my-0 fw-normal fs-4 text-center">Nom du poste a pourvoir </h1>
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <div class="fs-3 text-center">lieu du poste </div>
          <p class="card-text mb-auto text-center fs-6">Descripion -> ici retrouver plus d'information sur l'annonce comme :  </p>
          <ul id="ul" class="text-center fs-6">
            <li>le profil requis </li>
            <li>le nombres d'heure </li>
            <li>des précisions sur le poste à pourvoir </li>
            <li>et bien plus...</li>
          </ul>
            <div class="text-center">
              <button class="btn btn-primary"> voir les candidats</button>
              <p><small>*vous pourez voir tous les candidats qui on postuler </small></p>
            </div>
        </div>
      </div>
    </div>
    <!-- creation of announcements for candidates to apply -->
    <div class="col-md-6">
    <h1 class="my-0 fw-normal fs-4 text-center">Nom du poste a pourvoir </h1>
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <div class="fs-3 text-center">lieu du poste </div>
          <p class="card-text mb-auto text-center fs-6">Descripion -> ici retrouver plus d'information sur l'annonce comme :  </p>
          <ul id="ul" class="text-center fs-6">
            <li>le profil requis </li>
            <li>le nombres d'heure </li>
            <li>des precision sur le poste a pourvoir  </li>
            <li>et bien plus...</li>
          </ul>
            <div class="text-center">
              <button class="btn btn-primary"> Postuler</button>
              <p><small>*Une fois que vous avez postulé nous examinerons et nous enverrons votre candidature  </small></p>
            </div>
        </div>
      </div>
    </div>


<!-- footer (agency info) -->
  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Notre agence de recrutement
      </h3>

      <article class="blog-post">
          <h2 class="blog-post-title">Pourquoi avoir créé un site ?</h2>

          <p>la société s’est agrandie au fil des ans et possède dorénavant plus de 12 centres dispersés aux
            quatre coins de la France .</p>
          <hr>
          <p>La crise du coronavirus ayant frappée de plein fouet ce secteur, la société souhaite progressivement
            mettre en place un outil permettant à un plus grand nombre de recruteurs et de candidats de trouver leur
            bonheur.</p>
          <p>TRT Conseil désire avoir un produit viable afin de tester si la demande est réellement présente.</p>
      </article>
      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Remonter a l'Accueil</a>
      </nav>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">A propos de nous </h4>
          <p class="mb-0">Nous sommes TRT Conseil , nos agences  de recrutement sont dispersée sur toute la France. 
            cette agence est  spécialisé dans l’hôtellerie et la restauration.</p>
        </div>
        <div class="p-4">
          <h4 class="fst-italic">réseau sociaux</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  </div>
</div> 
</template>
  
  <script>
  </script>
  