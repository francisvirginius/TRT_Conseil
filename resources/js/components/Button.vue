<template>
  <a :href="buttonHref">
    <button
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mb-6"
      @click="handleClick"
    >
      {{ buttonText }}
    </button>
  </a>
</template>

<script>
export default {
  props: {
    buttonText: {
      type: String,
      required: true
    },
    buttonHref: {
      type: String,
      default: '#'
    }
  },
  methods: {
    handleClick() {
      this.$emit('custom-click');
    }
  }
};
</script>

<style scoped>
/* Styles personnalisés pour le composant */
</style>
