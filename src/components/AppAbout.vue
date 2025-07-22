<script setup lang="ts">
import SectionAside from './SectionAside.vue'
import SectionHeader from './SectionHeader.vue'
import AppSection from './AppSection.vue'
import { asideAbout } from '@/data/asides'
</script>

<template>
  <AppSection id="about">
    <template #header>
      <SectionHeader title="About" />
    </template>

    <template #aside>
      <SectionAside :aside="asideAbout" colorScheme="green" />
    </template>

    <section class="about-content">
      <div class="story">
        <p>
          This site has gone through dozens of iterations in the 20 years that I've owned this
          domain. Beginning as the home of a musical project I worked on as a teenager, it has
          shifted as my priorities changed and is now my professional homebase. Each time I
          introduce a new version of this site I hope to leverage new practices and technologies to
          ensure a modern experience across devices.
        </p>

        <p>
          Today, this site is built using <strong>Vue.js 3</strong> with the
          <strong>Composition API</strong>, embracing modern reactive patterns and TypeScript for
          type safety. The build system leverages <strong>Vite</strong> for lightning-fast
          development and optimized production builds. The entire codebase is written in
          <strong>TypeScript</strong>, providing enhanced developer experience with intelligent
          autocomplete and compile-time error checking.
        </p>

        <p>
          The styling approach uses modern <strong>CSS</strong> features including CSS Grid,
          Flexbox, and custom properties (CSS variables) for consistent theming. The design
          implements responsive layouts that adapt seamlessly across devices, from mobile phones to
          desktop displays.
        </p>

        <p>
          The development workflow incorporates <strong>ESLint</strong> for code quality and
          <strong>Prettier</strong> for consistent formatting. The component architecture follows
          Vue.js best practices with clear separation of concerns, reusable components, and
          maintainable code patterns.
        </p>

        <p>
          Each iteration of this site serves as both a portfolio piece and a learning laboratory—a
          place where I can experiment with emerging technologies while maintaining a professional
          presence that accurately represents my skills and experience.
        </p>
      </div>
    </section>
  </AppSection>
</template>

<style scoped>
.about-content {
  background: var(--white);
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.story p {
  line-height: 1.7;
  margin-bottom: 1.5rem;
  color: var(--text-heading);
  font-size: 1rem;
}

.story p:last-child {
  margin-bottom: 0;
}

.story strong {
  color: var(--green);
  font-weight: 600;
}

/* Responsive Design */
@media (max-width: 768px) {
  .about-content {
    padding: 1.5rem;
  }

  .story p {
    font-size: 0.95rem;
    margin-bottom: 1.25rem;
  }
}
</style>
