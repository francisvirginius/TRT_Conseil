<template>
   <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="./profil/profil.php">Profil</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="./">TRT Conseil</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
<!--check and display email -->
        <p>NomUser</p>
        <!--<a id ="Btnconnexion" class="btn btn-sm btn-outline-secondary" href="./connection/connecter.php" >Connexion</a>-->
        <Button buttonText="Connexion"/>
      </div>
    </div>
  </template>
  
  <script>
 import Button from './Button.vue';
  
  export default {
    components: {
      Button
    }
  }
  </script>
  
  <style scoped>
  /* Vous pouvez ajouter des styles personnalisés pour le composant ici */
  </style>
  