<script setup lang="ts">
defineProps<{
  id: string
  reverseLayout?: boolean
}>()
</script>

<template>
  <div :id="id" class="app-section" :class="{ reverse: reverseLayout }">
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
  grid-template-rows: auto auto;
  gap: 2rem;
  max-width: 1200px;
  margin: 2rem auto;
  padding: 0 2rem;
  color: var(--text-primary);

  header {
    grid-column: 1 / -1;
    grid-row: 1;
  }

  aside {
    grid-column: 1;
    grid-row: 2;
  }

  .main-content {
    grid-column: 2;
    grid-row: 2;
  }
}

.app-section.reverse {
  grid-template-columns: 1fr 350px;

  aside {
    grid-column: 2;
    grid-row: 2;
  }

  .main-content {
    grid-column: 1;
    grid-row: 2;
  }
}

.main-content {
  display: flex;
  flex-direction: column;
  gap: 2rem;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
  .app-section,
  .app-section.reverse {
    grid-template-columns: 1fr;
    grid-template-rows: auto auto auto;
    gap: 1rem;
    margin: 1rem auto;
    padding: 0 1rem;
  }

  .app-section aside,
  .app-section .main-content,
  .app-section.reverse aside,
  .app-section.reverse .main-content {
    grid-column: 1;
  }

  .app-section aside,
  .app-section.reverse aside {
    grid-row: 2;
  }

  .app-section .main-content,
  .app-section.reverse .main-content {
    grid-row: 3;
  }
}
</style>
