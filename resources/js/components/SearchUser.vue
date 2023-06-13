<template>
    <div>
      <h1>Rechecher un utilisateur</h1>
      <input type="text" v-model="searchQuery" placeholder="Enter a username">
      <button @click="searchUsers">Rechecher</button>
  
      <div v-if="isLoading">Loading...</div>
      <div v-else>
        <div v-if="users.length === 0">No users found.</div>
        <ul v-else>
          <li v-for="user in users" :key="user.id">
            {{ user.name }}
          </li>
        </ul>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        searchQuery: '',
        users: [],
        isLoading: false,
      };
    },
    methods: {
      searchUsers() {
        if (this.searchQuery) {
          this.isLoading = true;
          // Simulating an API call
          setTimeout(() => {
            // Assuming the API returns an array of user objects
            this.users = [
              { id: 1, name: 'John Doe' },
              { id: 2, name: 'Jane Smith' },
              { id: 3, name: 'Bob Johnson' },
            ];
            this.isLoading = false;
          }, 1500);
        }
      },
    },
  };
  </script>
  
  <style scoped>
  /* Add your custom styles here */
  </style>
  