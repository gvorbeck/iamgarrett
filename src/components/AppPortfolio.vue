<script setup lang="ts">
import { ref } from 'vue'
import SectionAside from './SectionAside.vue'
import { asidePortfolio } from '@/data/asides'
import SectionHeader from './SectionHeader.vue'
import AppSection from './AppSection.vue'
import { portfolio } from '@/data/portfolio'

const isOtherProjectsExpanded = ref(false)

const toggleOtherProjects = () => {
  isOtherProjectsExpanded.value = !isOtherProjectsExpanded.value
}
</script>

<template>
  <AppSection id="portfolio" :reverseLayout="true">
    <template #header>
      <SectionHeader title="Portfolio" />
    </template>

    <template #aside>
      <SectionAside :aside="asidePortfolio" colorScheme="purple" />
    </template>

    <section class="featured-projects">
      <h2 class="section-title">Featured Projects</h2>
      <div class="projects-grid">
        <article
          v-for="project in portfolio.filter((p) => p.featured)"
          :key="project.id"
          class="project-card"
        >
          <div class="project-header">
            <div class="title-row">
              <h3>{{ project.title }}</h3>
              <span v-if="project.status" class="status-badge" :class="project.status">
                {{
                  project.status === 'in-development'
                    ? 'In Progress'
                    : project.status === 'live'
                      ? 'Live'
                      : 'Archived'
                }}
              </span>
            </div>
            <div class="project-meta">
              <span class="company">{{ project.company }}</span>
              <span class="year">{{ project.year }}</span>
            </div>
          </div>
          <div v-if="project.image" class="project-image">
            <img :src="project.image" :alt="`Screenshot of ${project.title}`" />
          </div>
          <p class="project-description">{{ project.description }}</p>
          <div class="technologies">
            <span v-for="tech in project.technologies" :key="tech" class="tech-tag">{{
              tech
            }}</span>
          </div>
          <div v-if="project.link" class="project-actions">
            <a :href="project.link" target="_blank" rel="noopener" class="project-link">
              View Project →
            </a>
          </div>
        </article>
      </div>
    </section>

    <section class="other-projects">
      <div class="other-projects-header">
        <h2 class="section-title">Other Projects</h2>
        <button
          @click="toggleOtherProjects"
          class="toggle-button"
          :class="{ expanded: isOtherProjectsExpanded }"
        >
          <span>{{ isOtherProjectsExpanded ? 'Show Less' : 'Show More' }}</span>
          <svg
            width="16"
            height="16"
            viewBox="0 0 16 16"
            fill="currentColor"
            class="toggle-icon"
            :class="{ rotated: isOtherProjectsExpanded }"
          >
            <path d="M8 12l-4-4h8l-4 4z" />
          </svg>
        </button>
      </div>
      <div class="projects-list" :class="{ collapsed: !isOtherProjectsExpanded }">
        <article
          v-for="project in portfolio.filter((p) => !p.featured)"
          :key="project.id"
          class="project-item"
        >
          <div class="project-info">
            <div class="title-status">
              <h3>{{ project.title }}</h3>
              <span v-if="project.status" class="status-indicator" :class="project.status"></span>
            </div>
            <div class="project-details">
              <span class="company">{{ project.company }}</span>
              <span class="separator">•</span>
              <span class="year">{{ project.year }}</span>
              <a
                v-if="project.link"
                :href="project.link"
                target="_blank"
                rel="noopener"
                class="quick-link"
              >
                →
              </a>
            </div>
            <div v-if="project.image" class="project-thumbnail">
              <img :src="project.image" :alt="`Screenshot of ${project.title}`" />
            </div>
            <p class="description">{{ project.description }}</p>
            <div class="tech-list">
              <span v-for="tech in project.technologies" :key="tech" class="tech">{{ tech }}</span>
            </div>
          </div>
        </article>
      </div>
    </section>
  </AppSection>
</template>

<style scoped>
/* Featured Projects Section */
.featured-projects {
  background: var(--white);
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.projects-grid {
  display: grid;
  gap: 2rem;
}

.project-card {
  background: #f8f9fa;
  padding: 2rem;
  border-radius: 8px;
  border-top: 4px solid var(--purple);
  transition:
    transform 0.2s ease,
    box-shadow 0.2s ease;
}

.project-card:nth-child(2) {
  border-top-color: var(--green);
}

.project-card:nth-child(3) {
  border-top-color: var(--orange);
}

.project-card:nth-child(4) {
  border-top-color: var(--red);
}

/* Company styling with matching accent colors */
.project-card .company {
  background: var(--purple);
}

.project-card:nth-child(2) .company {
  background: var(--green);
}

.project-card:nth-child(3) .company {
  background: var(--orange);
}

.project-card:nth-child(4) .company {
  background: var(--red);
}

/* Project image borders with matching accent colors */
.project-card .project-image {
  border: 2px solid var(--purple);
}

.project-card:nth-child(2) .project-image {
  border-color: var(--green);
}

.project-card:nth-child(3) .project-image {
  border-color: var(--orange);
}

.project-card:nth-child(4) .project-image {
  border-color: var(--red);
}

.project-card:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.project-header {
  margin-bottom: 1rem;
}

.title-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 0.5rem;
}

.project-header h3 {
  font-size: 1.4rem;
  font-weight: 700;
  margin: 0;
  color: var(--text-heading);
  text-transform: lowercase;
}

.status-badge {
  font-size: 0.7rem;
  font-weight: 600;
  padding: 0.2rem 0.5rem;
  border-radius: 12px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.status-badge.live {
  background: #d4edda;
  color: #155724;
}

.status-badge.in-development {
  background: #fff3cd;
  color: #856404;
}

.status-badge.archived {
  background: #f8d7da;
  color: #721c24;
}

.project-meta {
  display: flex;
  gap: 1rem;
  margin-bottom: 0.5rem;
}

.company {
  display: inline-block;
  color: white;
  padding: 0.2rem 0.6rem;
  border-radius: 4px;
  font-weight: 600;
  font-size: 0.85rem;
  text-transform: lowercase;
}

.year {
  display: inline-block;
  background: var(--navy-light);
  color: white;
  padding: 0.2rem 0.6rem;
  border-radius: 4px;
  font-size: 0.85rem;
}

.project-image {
  margin: 1.5rem 0;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s ease;
  max-width: 20rem;
}

.project-image:hover {
  transform: scale(1.02);
}

.project-image img {
  width: 100%;
  height: auto;
  display: block;
  border: none;
}

.project-description {
  margin: 0 0 1.5rem 0;
  line-height: 1.6;
  color: var(--text-heading);
}

.technologies {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
}

.tech-tag {
  background: var(--gray-light);
  color: var(--text-heading);
  padding: 0.3rem 0.6rem;
  border-radius: 4px;
  font-size: 0.8rem;
  font-weight: 500;
  border: 1px solid var(--gray-medium);
}

.project-actions {
  margin-top: 1.5rem;
  padding-top: 1rem;
  border-top: 1px solid #e9ecef;
}

.project-link {
  display: inline-flex;
  align-items: center;
  color: var(--purple);
  text-decoration: none;
  font-weight: 600;
  font-size: 0.9rem;
  transition: color 0.2s ease;
}

.project-link:hover {
  color: var(--purple-dark);
}

/* Project link styling with matching accent colors */
.project-card:nth-child(2) .project-link {
  color: var(--green);
}

.project-card:nth-child(2) .project-link:hover {
  color: var(--green-dark);
}

.project-card:nth-child(3) .project-link {
  color: var(--orange);
}

.project-card:nth-child(3) .project-link:hover {
  color: var(--orange-dark);
}

.project-card:nth-child(4) .project-link {
  color: var(--red);
}

.project-card:nth-child(4) .project-link:hover {
  color: var(--red-dark);
}

/* Other Projects Section */
.other-projects {
  background: var(--white);
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.other-projects-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1.5rem;
}

.toggle-button {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  background: var(--purple);
  color: white;
  border: none;
  padding: 0.6rem 1.2rem;
  border-radius: 6px;
  font-weight: 600;
  font-size: 0.9rem;
  cursor: pointer;
  transition: all 0.2s ease;
}

.toggle-button:hover {
  background: var(--purple-dark);
  transform: translateY(-1px);
}

.toggle-icon {
  transition: transform 0.3s ease;
}

.toggle-icon.rotated {
  transform: rotate(180deg);
}

.projects-list {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
  max-height: none;
  overflow: hidden;
  transition: max-height 0.4s ease-in-out;
}

.projects-list.collapsed {
  max-height: 0;
  gap: 0;
}

.project-item {
  background: #f8f9fa;
  padding: 1.5rem;
  border-radius: 8px;
  border-left: 4px solid var(--purple);
  transition: transform 0.2s ease;
}

.project-item:nth-child(2n) {
  border-left-color: var(--green);
}

.project-item:nth-child(3n) {
  border-left-color: var(--orange);
}

.project-item:nth-child(4n) {
  border-left-color: var(--blue);
}

/* Company styling with matching accent colors for Other Projects */
.project-item .company {
  background: var(--purple);
}

.project-item:nth-child(2n) .company {
  background: var(--green);
}

.project-item:nth-child(3n) .company {
  background: var(--orange);
}

.project-item:nth-child(4n) .company {
  background: var(--blue);
}

/* Thumbnail borders with matching accent colors */
.project-item .project-thumbnail {
  border: 2px solid var(--purple);
}

.project-item:nth-child(2n) .project-thumbnail {
  border-color: var(--green);
}

.project-item:nth-child(3n) .project-thumbnail {
  border-color: var(--orange);
}

.project-item:nth-child(4n) .project-thumbnail {
  border-color: var(--blue);
}

.project-item:hover {
  transform: translateX(4px);
}

.project-info h3 {
  font-size: 1.2rem;
  font-weight: 700;
  margin: 0;
  color: var(--text-heading);
  text-transform: lowercase;
}

.title-status {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  margin-bottom: 0.5rem;
}

.status-indicator {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  flex-shrink: 0;
}

.status-indicator.live {
  background: #28a745;
}

.status-indicator.in-development {
  background: #ffc107;
}

.status-indicator.archived {
  background: #6c757d;
}

.project-details {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  margin-bottom: 1rem;
}

.project-details .company {
  font-size: 0.8rem;
}

.separator {
  color: var(--text-muted);
}

.project-details .year {
  background: var(--navy-light);
  font-size: 0.8rem;
}

.quick-link {
  color: var(--purple);
  text-decoration: none;
  font-weight: 600;
  margin-left: 0.5rem;
  transition: color 0.2s ease;
}

.quick-link:hover {
  color: var(--purple-dark);
}

/* Quick link styling with matching accent colors for Other Projects */
.project-item:nth-child(2n) .quick-link {
  color: var(--green);
}

.project-item:nth-child(2n) .quick-link:hover {
  color: var(--green-dark);
}

.project-item:nth-child(3n) .quick-link {
  color: var(--orange);
}

.project-item:nth-child(3n) .quick-link:hover {
  color: var(--orange-dark);
}

.project-item:nth-child(4n) .quick-link {
  color: var(--blue);
}

.project-item:nth-child(4n) .quick-link:hover {
  color: var(--blue-dark);
}

.project-thumbnail {
  margin: 1rem 0;
  border-radius: 6px;
  overflow: hidden;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  max-width: 300px;
}

.project-thumbnail img {
  width: 100%;
  height: auto;
  display: block;
  border: none;
}

.description {
  margin: 0 0 1rem 0;
  line-height: 1.6;
  color: var(--text-heading);
  font-size: 0.95rem;
}

.tech-list {
  display: flex;
  flex-wrap: wrap;
  gap: 0.3rem;
}

.tech {
  background: var(--gray-light);
  color: var(--text-muted);
  padding: 0.2rem 0.5rem;
  border-radius: 3px;
  font-size: 0.75rem;
  font-weight: 500;
}

/* Section titles */
.section-title {
  font-size: 2rem;
  font-weight: 900;
  margin: 0;
  color: var(--text-heading);
  text-transform: lowercase;
  border-bottom: 4px solid var(--purple);
  padding-bottom: 0.5rem;
  display: inline-block;
}

.other-projects-header .section-title {
  margin-bottom: 0;
}

/* Responsive Design */
@media (max-width: 768px) {
  .featured-projects,
  .other-projects {
    padding: 1.5rem;
  }

  .project-card,
  .project-item {
    padding: 1rem;
  }

  .project-header h3,
  .project-info h3 {
    font-size: 1.1rem;
  }

  .project-meta {
    flex-direction: column;
    gap: 0.5rem;
  }

  .section-title {
    font-size: 1.5rem;
  }

  .project-image {
    margin: 1rem 0;
  }

  .project-thumbnail {
    max-width: 100%;
  }

  .other-projects-header {
    flex-direction: column;
    gap: 1rem;
    align-items: stretch;
  }

  .toggle-button {
    justify-content: center;
  }
}

@media (max-width: 480px) {
  .company,
  .year {
    display: block;
    margin-bottom: 0.5rem;
    margin-right: 0;
  }

  .project-details {
    flex-direction: column;
    align-items: flex-start;
    gap: 0.3rem;
  }

  .separator {
    display: none;
  }
}
</style>
