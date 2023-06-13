<template>
  <div class="form">
    <form method="POST" action="./form.php">
      <h1 class="h3 mb-3 fw-normal mt-4 mb-5 text-center">Veuillez vous connecter</h1>

      <div class="form-floating input-container">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
        <label for="floatingInput">Adresse e-mail</label>
      </div>
      <div class="form-floating input-container">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Mot de passe" name="password" required>
        <label for="floatingPassword">Mot de passe</label>
      </div>
      <div class="text-center">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mb-6 mt-6" type="submit">Se connecter</button>
      </div>
      <div class="text-center" id="creeCompte"><a href="/connexions/cree-son-compte">Je n'ai pas de compte !</a></div>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2023</p>
    </form>
  </div>
</template>

<style scoped>
.form {
  max-width: 400px; /* Adjust the max-width value as needed */
  margin: 0 auto;
}

.input-container {
  width: 100%;
}

/* Additional styles if needed */
</style>
