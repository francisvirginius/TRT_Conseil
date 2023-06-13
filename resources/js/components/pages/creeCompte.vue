<template>
  <div class="form-container">
    <form @submit="submitForm">
      <h1 class="h3 mb-3 fw-normal text-center">Créer un Compte</h1>

      <div class="row g-3 mb-3">
        <div class="col-sm-6">
          <label class="form-label" for="Prenom" name="prenom">Prenom</label>
          <input class="form-control" type="text" id="prenom" v-model="formData.firstName">
        </div>
        <div class="col-sm-6">
          <label class="form-label" for="Nom" name="nom">Nom</label>
          <input class="form-control" type="text" id="nom" v-model="formData.lastName">
        </div>
      </div>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" v-model="formData.email">
        <label for="floatingInput">Adresse e-mail</label>
      </div>

      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" v-model="formData.password">
        <label for="floatingPassword">Mot de passe</label>
      </div>

      <p class="question text-center mt-4 mb-6">Sélectionnez votre statut</p>
      <div class="text-center">
        <input type="radio" id="recruteurs" name="drone" value="recruteurs" v-model="formData.status" checked>
        <label for="recruteurs">Recruteurs</label>
      </div>
      <div class="text-center mb-2">
        <input type="radio" id="candidats" name="drone" value="candidats" v-model="formData.status">
        <label for="candidats">Candidats</label>
      </div>
      <div class="text-center">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mb-6" type="submit">Créer un Compte</button>
      </div>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2023</p>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      formData: {
        firstName: '',
        lastName: '',
        email: '',
        password: '',
        status: 'recruteurs'
      }
    };
  },
  methods: {
    submitForm() {
      axios.post('/api/cree-utilisateur', this.formData)
        .then(response => {
          alert('Votre compte a bien été créé !');
          //this.formData = {};
        })
        .catch(error => {
          if (error.response) {
            // Erreur de réponse du serveur avec un code d'état HTTP
            alert('Erreur de réponse du serveur. Veuillez réessayer plus tard.');
          } else if (error.request) {
            // Aucune réponse du serveur
            alert('Aucune réponse du serveur. Veuillez vérifier votre connexion internet.');
          } else {
            // Erreur de requête
            alert('Erreur de requête. Veuillez vérifier vos données et réessayer.');
          }
        });
    }
  }
}
</script>

<style scoped>
.form-container {
  max-width: 400px; /* Adjust the max-width value as needed */
  margin: 0 auto;
}

/* Additional styles if needed */
</style>
