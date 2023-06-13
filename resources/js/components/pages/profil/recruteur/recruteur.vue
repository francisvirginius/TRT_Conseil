<template>
    <div>
      <!-- Barre supérieure -->
      <div class="profile-bar">
        <div class="profile-info">
          <h2>{{ user.name }}</h2>
          <p>{{ user.email }}</p>
        </div>
        <div class="profile-actions">
          <button @click="editProfile">Modifier</button>
          <button @click="logout">Déconnexion</button>
        </div>
      </div>
  
      <!-- Contenu de la page -->
      <div class="profile-content">
        <!-- Insérez ici le contenu spécifique au profil -->
        <p>Contenu du profil de l'utilisateur...</p>
      </div>
  
      <!-- Barre inférieure -->
      <div class="bottom-bar">
        <ul>
            <li><button>Voir mes annonces validé</button></li>
            <li><a href="chercher-utilisateur">rechercher un utilisateur</a></li>
            <li><button>Ajouter une annonce</button></li>
            <li><button>supprimer mon profil</button></li>


        </ul>
        
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        user: {
          name: "John Doe",
          email: "johndoe@example.com",
          // Autres informations de l'utilisateur
        },
      };
    },
    methods: {
      editProfile() {
        // Logique pour éditer le profil
      },
      logout() {
        // Logique pour la déconnexion
      },
    },
  };
  </script>
  
  <style scoped>
  .profile-bar {
    background-color: #f2f2f2;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .profile-info {
    margin-right: 20px;
  }
  
  .profile-actions button {
    margin-left: 10px;
  }
  
  .profile-content {
    padding: 20px;
  }
  
  .bottom-bar {
    background-color: #f2f2f2;
    padding: 10px;
    display: flex;
    justify-content: center;
  }
  
  .bottom-bar button {
    margin: 0 5px;
  }
  </style>
  