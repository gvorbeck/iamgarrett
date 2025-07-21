<script setup lang="ts">
import type { Aside } from '@/data/definitions'

defineProps<{
  aside: Aside
  colorScheme?: 'blue' | 'purple' | 'green' | 'orange'
}>()
</script>

<template>
  <aside class="sidebar">
    <div class="card">
      <img class="image" :alt="aside.imageAlt" :src="aside.image" />
      <div class="info" :class="colorScheme || 'blue'">
        <h2>{{ aside.title }}</h2>
        <p>
          {{ aside.content }}
        </p>
      </div>
    </div>
  </aside>
</template>

<style scoped>
.sidebar {
  background: var(--gray-dark);
  border-radius: 8px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  height: fit-content;
  position: sticky;
  top: 100px;
}

.card {
  padding: 0;
}

.image {
  width: 100%;
  height: 250px;
  object-fit: cover;
  display: block;
}

.info {
  padding: 2rem;
  color: white;
}

.info.blue {
  background: linear-gradient(135deg, var(--blue), var(--blue-dark));
}

.info.purple {
  background: linear-gradient(135deg, var(--purple), var(--purple-dark));
}

.info.green {
  background: linear-gradient(135deg, var(--green), #2d5f41);
}

.info.orange {
  background: linear-gradient(135deg, var(--orange), #d4690a);
}

.info h2 {
  font-size: 1.8rem;
  font-weight: 900;
  margin: 0 0 1rem 0;
}

.info p {
  line-height: 1.6;
  margin: 0;
  font-size: 0.95rem;
}
</style>
