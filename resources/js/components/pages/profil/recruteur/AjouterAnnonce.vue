<template>
    <div class="form-container">
      <form @submit="soumettreFormulaire">
        <h1 class="h3 mb-3 fw-normal">Ajouter une annonce d'emploi</h1>
  
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingTitre" name="titre" placeholder="Titre de l'emploi" v-model="formData.titre">
          <label for="floatingTitre">Titre de l'emploi</label>
        </div>
  
        <div class="form-floating">
          <textarea class="form-control" id="floatingDescription" name="description" placeholder="Description de l'emploi" v-model="formData.description"></textarea>
          <label for="floatingDescription">Description de l'emploi</label>
        </div>
  
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingEntreprise" name="entreprise" placeholder="Nom de l'entreprise" v-model="formData.entreprise">
          <label for="floatingEntreprise">Nom de l'entreprise</label>
        </div>
  
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingLieu" name="lieu" placeholder="Lieu de l'emploi" v-model="formData.lieu">
          <label for="floatingLieu">Lieu de l'emploi</label>
        </div>
  
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingSalaire" name="salaire" placeholder="Salaire de l'emploi" v-model="formData.salaire">
          <label for="floatingSalaire">Salaire de l'emploi</label>
        </div>
  
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mb-6" type="submit">Ajouter l'emploi</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
      </form>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        formData: {
          titre: '',
          description: '',
          entreprise: '',
          lieu: '',
          salaire: ''
        }
      };
    },
    methods: {
      soumettreFormulaire() {
        axios.post('/api/ajouter-emploi', this.formData)
          .then(response => {
            alert('Annonce d\'emploi ajoutée avec succès !');
            // this.formData = {};
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
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  /* Styles supplémentaires si nécessaire */
  </style>
  