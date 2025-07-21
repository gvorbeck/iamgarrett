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
  gap: 2rem;
  max-width: 1200px;
  margin: 2rem auto;
  padding: 0 2rem;
  color: var(--text-primary);

  header {
    grid-column: 1 / -1;
  }
}

.app-section.reverse {
  grid-template-columns: 1fr 350px;

  aside {
    order: 2;
  }

  .main-content {
    order: 1;
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
    gap: 1rem;
    margin: 1rem auto;
    padding: 0 1rem;
  }

  .app-section.reverse aside,
  .app-section.reverse .main-content {
    order: unset;
  }
}
</style>
