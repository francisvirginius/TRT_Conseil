<template>
    <div>
      <h1>Liste des annonces du recruteur {{ recruteur }}</h1>
      <ul>
        <li v-for="annonce in annonces" :key="annonce.id">
          <h2>{{ annonce.titre }}</h2>
          <p>{{ annonce.description }}</p>
          <p>{{ annonce.entreprise }}</p>
          <p>{{ annonce.lieu }}</p>
          <p>{{ annonce.salaire }}</p>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        recruteur: '',
        annonces: []
      };
    },
    mounted() {
      this.recruteur = 'Nom du recruteur'; // Remplacez par le nom du recruteur souhaité
  
      this.fetchAnnonces();
    },
    methods: {
      fetchAnnonces() {
        axios.get(`/api/annonces?recruteur=${this.recruteur}`)
          .then(response => {
            this.annonces = response.data;
          })
          .catch(error => {
            console.log(error);
          });
      }
    }
  }
  </script>
  
  <style scoped>
  /* Styles personnalisés si nécessaire */
  </style>
  