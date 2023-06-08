<template>
      <div class="form">
        <form method="POST" action="./form.php">
          <h1 class="h3 mb-3 fw-normal">Veuillez vous connecter</h1>
      
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
          </div>
      
          <Button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mb-6" type="submit">Se connecter</button>
          <div id="creeCompte"><a href="/cree-son-compte">Je n'ai pas de compte !</a>
          </div>
          <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
        </form>
      </div>
</template>
  
  <script>
 
  </script>
  
  <style scoped>
  /* Vous pouvez ajouter des styles personnalisés pour le composant ici */
  </style>
  