<script setup lang="ts"></script>

<template>
  <footer>&copy;{{ new Date().getFullYear() }} J. Garrett Vorbeck</footer>
</template>

<style scoped>
footer {
  margin: 2rem 2rem 0;
  padding: 0 2rem;
}
@media (max-width: 768px) {
  footer {
    text-align: center;
    margin: 1rem 1rem;
    padding: 0 1rem;
  }
}
</style>
