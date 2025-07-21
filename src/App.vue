<script setup lang="ts">
import AppAbout from './components/AppAbout.vue'
import AppFooter from './components/AppFooter.vue'
import AppHeader from './components/AppHeader.vue'
import AppPortfolio from './components/AppPortfolio.vue'
import AppResume from './components/AppResume.vue'
</script>

<template>
  <AppHeader />

  <main>
    <AppResume />
    <AppPortfolio />
    <AppAbout />
  </main>

  <AppFooter />
</template>

<style scoped></style>
