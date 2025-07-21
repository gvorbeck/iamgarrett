<script setup lang="ts">
import SectionAside from './SectionAside.vue'
import { asideResume } from '@/data/asides'
import SectionHeader from './SectionHeader.vue'
import AppSection from './AppSection.vue'
import { resume } from '@/data/resume'
</script>

<template>
  <AppSection id="resume">
    <template #header>
      <SectionHeader title="Resume" />
    </template>

    <template #aside>
      <SectionAside :aside="asideResume" />
    </template>

    <section class="skills-section">
      <h2 class="section-title">Skills</h2>
      <ul class="skills-list">
        <li v-for="skillGroup in resume.skills" :key="skillGroup.title">
          <span class="skill-category">{{ skillGroup.title }}:</span>
          {{ skillGroup.skill.join(', ') }}
        </li>
      </ul>
    </section>

    <section class="work-history-section">
      <h2 class="section-title">Work History</h2>
      <ul class="work-list">
        <li v-for="job in resume.work" :key="job.title + job.company" class="work-item">
          <div class="work-header">
            <h3>{{ job.title }}</h3>
            <span class="company">{{ job.company }}</span>
            <span class="duration">{{ job.duration }}</span>
            <span class="location">{{ job.location }}</span>
          </div>
          <p class="work-description">
            {{ job.description }}
          </p>
        </li>
      </ul>
    </section>

    <section class="education-section">
      <h2 class="section-title">Education</h2>
      <ul class="education-list">
        <li v-for="edu in resume.education" :key="edu.title + edu.school" class="education-item">
          <div class="education-header">
            <h3>{{ edu.title }}</h3>
            <span class="school">{{ edu.school }}</span>
            <span class="duration">{{ edu.duration }}</span>
          </div>
        </li>
      </ul>
    </section>
  </AppSection>
</template>

<style scoped>
/* Skills Section */
.skills-section {
  background: var(--white);
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.skills-list {
  list-style: none;
  margin: 0;
  padding: 0;
  display: grid;
  gap: 1rem;
}

.skills-list li {
  background: #ecf0f1;
  padding: 1rem;
  border-radius: 6px;
  border-left: 4px solid var(--red);
  font-size: 0.95rem;
  line-height: 1.5;
}

.skills-list li:nth-child(2n) {
  border-left-color: var(--orange);
}

.skills-list li:nth-child(3n) {
  border-left-color: var(--green);
}

.skills-list li:nth-child(4n) {
  border-left-color: var(--purple);
}

.skill-category {
  font-weight: 700;
  color: var(--text-heading);
}

/* Work History Section */
.work-history-section {
  background: var(--white);
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.work-list {
  list-style: none;
  margin: 0;
  padding: 0;
  display: grid;
  gap: 2rem;
}

.work-item {
  background: #f8f9fa;
  padding: 1.5rem;
  border-radius: 8px;
  border-top: 4px solid var(--blue);
  transition: transform 0.2s ease;
}

.work-item:nth-child(2) {
  border-top-color: var(--red);
}

.work-item:nth-child(3) {
  border-top-color: var(--orange);
}

.work-item:nth-child(4) {
  border-top-color: var(--green);
}

.work-item:hover {
  transform: translateY(-2px);
}

.work-header {
  margin-bottom: 1rem;
}

.work-header h3 {
  font-size: 1.3rem;
  font-weight: 700;
  margin: 0 0 0.5rem 0;
  color: var(--text-heading);
  text-transform: lowercase;
}

.company {
  display: inline-block;
  background: var(--accent-primary);
  color: var(--bg-header);
  padding: 0.2rem 0.6rem;
  border-radius: 4px;
  font-weight: 600;
  font-size: 0.85rem;
  margin-right: 0.5rem;
  text-transform: lowercase;
}

.duration,
.location {
  display: inline-block;
  background: var(--navy-light);
  color: white;
  padding: 0.2rem 0.6rem;
  border-radius: 4px;
  font-size: 0.85rem;
  margin-right: 0.5rem;
  margin-bottom: 0.25rem;
}

.work-description {
  margin: 0;
  line-height: 1.6;
  color: var(--text-heading);
}

/* Education Section */
.education-section {
  background: var(--white);
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.education-list {
  list-style: none;
  margin: 0;
  padding: 0;
}

.education-item {
  background: linear-gradient(135deg, var(--purple), var(--purple-dark));
  padding: 1.5rem;
  border-radius: 8px;
  color: white;
}

.education-header h3 {
  font-size: 1.3rem;
  font-weight: 700;
  margin: 0 0 0.5rem 0;
  text-transform: lowercase;
}

.school {
  display: inline-block;
  background: rgba(255, 255, 255, 0.2);
  padding: 0.2rem 0.6rem;
  border-radius: 4px;
  font-weight: 600;
  font-size: 0.85rem;
  margin-right: 0.5rem;
  text-transform: lowercase;
}

.education-item .duration {
  background: rgba(255, 255, 255, 0.2);
}

/* Responsive Design */
@media (max-width: 768px) {
  #resume {
    grid-template-columns: 1fr;
    gap: 1rem;
    margin: 1rem auto;
    padding: 0 1rem;
  }

  .sidebar {
    position: static;
    order: 2;
  }

  .main-content {
    order: 1;
  }

  .section-title {
    font-size: 1.5rem;
  }

  .profile-info {
    padding: 1.5rem;
  }

  .profile-info h2 {
    font-size: 1.5rem;
  }

  .skills-section,
  .work-history-section,
  .education-section {
    padding: 1.5rem;
  }

  .work-item {
    padding: 1rem;
  }
}

@media (max-width: 480px) {
  .work-header h3 {
    font-size: 1.1rem;
  }

  .company,
  .duration,
  .location,
  .school {
    display: block;
    margin-bottom: 0.5rem;
    margin-right: 0;
  }
}
</style>
