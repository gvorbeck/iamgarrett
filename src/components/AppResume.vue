<script setup lang="ts"></script>

<template>
  <div id="resume">
    <aside class="sidebar">
      <div class="profile-card">
        <img class="profile-image" alt="My Cartoon Face" src="/images/face.webp" />
        <div class="profile-info">
          <h2>Just Garrett</h2>
          <p>
            I'm a web developer based in the NYC area with 15+ years of experience. I love to draw,
            eat pizza, and listen to bad music. I have a dog named Poori. My favorite color is
            brown. I have been to all 50 states.
          </p>
        </div>
      </div>
    </aside>

    <section class="main-content">
      <section class="skills-section">
        <h2 class="section-title">Skills</h2>
        <ul class="skills-list">
          <li>
            <span class="skill-category">Core:</span> HTML, CSS, JavaScript, Git, JSON, XML, some
            PHP
          </li>
          <li>
            <span class="skill-category">JavaScript Libraries &amp; Frameworks:</span> React,
            Vue.js, jQuery, D3, TypeScript, Redux
          </li>
          <li><span class="skill-category">CSS:</span> Sass, Less, Emotion, Tailwind</li>
          <li>
            <span class="skill-category">Design Systems:</span> Carbon, MUI (Material-UI), Ant
            Design
          </li>
          <li><span class="skill-category">Content Management Systems:</span> WordPress, Drupal</li>
          <li>
            <span class="skill-category">Database Structure:</span> GraphQL, some MySQL, some SQL
          </li>
          <li><span class="skill-category">Methodologies:</span> Agile, Waterfall</li>
        </ul>
      </section>

      <section class="work-history-section">
        <h2 class="section-title">Work History</h2>
        <ul class="work-list">
          <li class="work-item">
            <div class="work-header">
              <h3>Lead UI Developer</h3>
              <span class="company">Anywhere Real Estate, Inc.</span>
              <span class="duration">05/2025 - current</span>
              <span class="location">Remote</span>
            </div>
            <p class="work-description">
              As a Lead UI Developer at Anywhere Real Estate, Inc., I am working on their new
              Universal Platform, working to create seamless experiences for agents, brokers, and
              consumers in the real estate industry.
            </p>
          </li>

          <li class="work-item">
            <div class="work-header">
              <h3>Senior Web UI Developer</h3>
              <span class="company">Lab49</span>
              <span class="duration">04/2023 - 05/2025</span>
              <span class="location">New York, NY</span>
            </div>
            <p class="work-description">
              As a Senior Web UI Developer at Lab49, I was responsible for developing and
              implementing user interfaces for our clients in the financial industry. In this role,
              I worked closely with clients, project managers, and other team members to understand
              their requirements and translate them into functional and visually appealing web
              interfaces.
            </p>
          </li>

          <li class="work-item">
            <div class="work-header">
              <h3>Advisory Front End Developer / Software Engineer</h3>
              <span class="company">IBM</span>
              <span class="duration">10/2015 - 01/2023</span>
              <span class="location">New York, NY &amp; Remote</span>
            </div>
            <p class="work-description">
              In this role, I worked as a Front End Developer within IBM's Z Design business unit. I
              worked with the IBM z/OS mainframe platform to bring a modern web experience to some
              of the most robust mainframe systems in the industry. Whether it was updating the look
              and feel of their legacy systems, working to create new services, or guiding teams
              through an ever-updating set of processes; I used my skills to ensure a modern and
              beautiful interaction every time.
            </p>
          </li>

          <li class="work-item">
            <div class="work-header">
              <h3>Web Developer/Software Developer</h3>
              <span class="company">NBCUniversal</span>
              <span class="duration">10/2006 - 10/2015</span>
              <span class="location">New York, NY</span>
            </div>
            <p class="work-description">
              In this role, I worked on dozens of NBCUniversal's properties during my time there. I
              was fortunate to work with several teams, covering brands such as Telemundo, SyFy,
              USA, Bravo and more. I worked with a variety of technologies that supported millions
              of users. Working in a rapidly evolving field, I helped foster NBC's web development
              community.
            </p>
          </li>
        </ul>
      </section>

      <section class="education-section">
        <h2 class="section-title">Education</h2>
        <ul class="education-list">
          <li class="education-item">
            <div class="education-header">
              <h3>Bachelor of Science in Computer Science</h3>
              <span class="school">New Jersey City University</span>
              <span class="duration">1/2006 - 6/2010</span>
            </div>
          </li>
        </ul>
      </section>
    </section>
  </div>
</template>

<style scoped>
#resume {
  display: grid;
  grid-template-columns: 350px 1fr;
  gap: 2rem;
  max-width: 1200px;
  margin: 2rem auto;
  padding: 0 2rem;
  color: var(--color-text);
}

/* Sidebar Styles */
.sidebar {
  background: #ffffff;
  border-radius: 8px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  height: fit-content;
  position: sticky;
  top: 100px;
}

.profile-card {
  padding: 0;
}

.profile-image {
  width: 100%;
  height: 250px;
  object-fit: cover;
  display: block;
}

.profile-info {
  padding: 2rem;
  background: linear-gradient(135deg, #3498db, #2980b9);
  color: white;
}

.profile-info h2 {
  font-size: 1.8rem;
  font-weight: 900;
  margin: 0 0 1rem 0;
  text-transform: lowercase;
}

.profile-info p {
  line-height: 1.6;
  margin: 0;
  font-size: 0.95rem;
}

/* Main Content Styles */
.main-content {
  display: flex;
  flex-direction: column;
  gap: 2rem;
}

.section-title {
  font-size: 2rem;
  font-weight: 900;
  margin: 0 0 1.5rem 0;
  color: #2c3e50;
  text-transform: lowercase;
  border-bottom: 4px solid var(--color-accent);
  padding-bottom: 0.5rem;
  display: inline-block;
}

/* Skills Section */
.skills-section {
  background: #ffffff;
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
  border-left: 4px solid #e74c3c;
  font-size: 0.95rem;
  line-height: 1.5;
}

.skills-list li:nth-child(2n) {
  border-left-color: #f39c12;
}

.skills-list li:nth-child(3n) {
  border-left-color: #27ae60;
}

.skills-list li:nth-child(4n) {
  border-left-color: #9b59b6;
}

.skill-category {
  font-weight: 700;
  color: #2c3e50;
}

/* Work History Section */
.work-history-section {
  background: #ffffff;
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
  border-top: 4px solid #3498db;
  transition: transform 0.2s ease;
}

.work-item:nth-child(2) {
  border-top-color: #e74c3c;
}

.work-item:nth-child(3) {
  border-top-color: #f39c12;
}

.work-item:nth-child(4) {
  border-top-color: #27ae60;
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
  color: #2c3e50;
  text-transform: lowercase;
}

.company {
  display: inline-block;
  background: var(--color-accent);
  color: #2c3e50;
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
  background: #34495e;
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
  color: #2c3e50;
}

/* Education Section */
.education-section {
  background: #ffffff;
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
  background: linear-gradient(135deg, #9b59b6, #8e44ad);
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
