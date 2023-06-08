<template>
   <form method="POST" action="./form.php">
    <h1 class="h3 mb-3 fw-normal">Cree un Compte</h1>

    <!-- firstname lastname --> 

    <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label" for="firstName">First name</label>
            <input class="form-control" type="text" id="firstName" name="firstName">
            
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="lastName">Last name</label>
            <input class="form-control" type="text" id="lastName" name="lastName">

          </div>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
    </div>
  
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>
    <P class="question">Sélectionné  votre statut </P>
    <div>
      <input type="radio" id="recruteurs" name="drone" value="recruteurs" checked>
      <label for="huey">recruteurs</label>
    </div>
    <div>
      <input type="radio" id="candidats" name="drone" value="candidats">
      <label for="dewey">candidats</label>
    </div>

    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mb-6" type="submit">Cree un Compte</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>

</template>

<script>

</script>

<style scoped>
/* Vous pouvez ajouter des styles personnalisés pour le composant ici */
</style>
