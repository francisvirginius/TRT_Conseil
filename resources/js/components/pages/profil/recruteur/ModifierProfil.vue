<template>
    <div class="form-container">
      <form @submit="submitForm">
        <h1 class="h3 mb-3 fw-normal text-center">Modification du Profil</h1>
  
        <div class="row g-3 mb-3">
          <div class="col-sm-6">
            <label class="form-label" for="prenom" name="prenom">Prénom</label>
            <input class="form-control" type="text" id="prenom" v-model="formData.nom">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="nom" name="nom">Nom</label>
            <input class="form-control" type="text" id="nom" v-model="formData.prenom">
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
        <div class="text-center mt-4">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mb-6" type="submit">Enregistrer</button>
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
          nom: '',
          prenom: '',
          email: '',
          password: '',
          status: 'recruteurs'
        }
      };
    },
    mounted() {
      this.fetchProfile();
    },
    methods: {
      fetchProfile() {
        axios.get('/api/profile')
          .then(response => {
            const profile = response.data;
            this.formData.nom = profile.nom;
            this.formData.prenom = profile.prenom;
            this.formData.email = profile.email;
          })
          .catch(error => {
            console.log(error);
          });
      },
      submitForm() {
        axios.put('/api/profile', this.formData)
          .then(response => {
            alert('Profil mis à jour avec succès !');
          })
          .catch(error => {
            console.log(error);
          });
      }
    }
  }
  </script>
  
  <style scoped>
  .form-container {
    max-width: 400px;
    margin: 0 auto;
  }
  
  /* Additional styles if needed */
  </style>
  