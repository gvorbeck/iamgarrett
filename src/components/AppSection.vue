<script setup lang="ts">
defineProps<{
  id: string
}>()
</script>

<template>
  <div :id="id" class="app-section">
    <header>
      <slot name="header" />
    </header>
    <slot name="aside" />
    <section class="main-content">
      <slot />
    </section>
  </div>
</template>

<style scoped>
.app-section {
  display: grid;
  grid-template-columns: 350px 1fr;
  gap: 2rem;
  max-width: 1200px;
  margin: 2rem auto;
  padding: 0 2rem;
  color: var(--text-primary);

  header {
    grid-column: 1 / -1;
  }
}

.main-content {
  display: flex;
  flex-direction: column;
  gap: 2rem;
}
</style>
