<template>
    <div>
      <h1>Choisissez votre profil :</h1>
      <Button buttonHref="/" buttonText="Je suis un candidat"/>
      <Button buttonHref="/" buttonText="Je suis un recruteur"/>

    </div>
  </template>
  
  <script>
import Button from '../Button.vue';
  
  export default {
    components: {
      Button
    }
  }
  </script>
  