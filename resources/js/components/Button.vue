<template>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
      {{ buttonText }}
    </button>
  </template>
  
  <script>
  export default {
    props: {
      buttonText: {
        type: String,
        required: true
      }
    }
  }
  </script>
  
  <style scoped>
  /* Vous pouvez ajouter des styles personnalisés pour le composant ici */
  </style>
  