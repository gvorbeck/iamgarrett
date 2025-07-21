<script setup lang="ts">
import { ref, onMounted, onUnmounted } from 'vue'

const isScrolled = ref(false)

const handleScroll = () => {
  isScrolled.value = window.scrollY > 20
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>

<template>
  <header :class="{ scrolled: isScrolled }">
    <div class="header-container">
      <div class="logo">
        <h1>i<span class="highlight">am</span>garrett</h1>
      </div>

      <div class="navigation-wrapper">
        <nav class="main-nav">
          <ul>
            <li><a href="#resume" class="nav-link">Resume</a></li>
            <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
            <li><a href="#about" class="nav-link">About</a></li>
          </ul>
        </nav>

        <nav class="social-nav">
          <ul>
            <li>
              <a
                href="https://linkedin.com/in/garrett-vorbeck"
                target="_blank"
                rel="noopener"
                class="social-link"
                aria-label="LinkedIn"
              >
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                  <path
                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a
                href="https://github.com/garrett-vorbeck"
                target="_blank"
                rel="noopener"
                class="social-link"
                aria-label="GitHub"
              >
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                  <path
                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a href="mailto:garrett@example.com" class="social-link" aria-label="Email">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                  <path
                    d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z"
                  />
                </svg>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
</template>

<style scoped>
header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  background: rgba(15, 15, 15, 0.9);
  backdrop-filter: blur(20px);
  border-bottom: 1px solid rgba(250, 178, 57, 0.1);
  transition: all 0.3s ease;
}

header.scrolled {
  background: rgba(10, 10, 10, 0.95);
  box-shadow: 0 2px 30px rgba(250, 178, 57, 0.1);
  border-bottom-color: rgba(250, 178, 57, 0.2);
}

.header-container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 2rem;
  min-height: 80px;
}

.logo h1 {
  font-size: 1.8rem;
  font-weight: 700;
  margin: 0;
  color: #ffffff;
  letter-spacing: -0.02em;
}

.logo .highlight {
  color: var(--color-accent);
  font-weight: 400;
  text-shadow: 0 0 10px rgba(250, 178, 57, 0.3);
}

.navigation-wrapper {
  display: flex;
  align-items: center;
  gap: 2rem;
}

.main-nav ul,
.social-nav ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
  gap: 2rem;
}

.nav-link {
  text-decoration: none;
  color: var(--color-text);
  font-weight: 500;
  font-size: 0.95rem;
  position: relative;
  transition: all 0.3s ease;
  padding: 0.5rem 0;
}

.nav-link::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-accent-hover));
  transition: width 0.3s ease;
  box-shadow: 0 0 8px rgba(250, 178, 57, 0.4);
}

.nav-link:hover {
  color: var(--color-accent);
  text-shadow: 0 0 8px rgba(250, 178, 57, 0.3);
}

.nav-link:hover::after {
  width: 100%;
}

.social-nav {
  border-left: 1px solid rgba(255, 255, 255, 0.1);
  padding-left: 2rem;
}

.social-nav ul {
  gap: 1rem;
}

.social-link {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: rgba(250, 178, 57, 0.1);
  color: var(--color-accent);
  text-decoration: none;
  transition: all 0.3s ease;
  border: 1px solid rgba(250, 178, 57, 0.2);
}

.social-link:hover {
  background: var(--color-accent);
  color: #0a0a0a;
  transform: translateY(-2px);
  box-shadow: 0 4px 15px rgba(250, 178, 57, 0.4);
}

.social-link svg {
  transition: transform 0.3s ease;
}

.social-link:hover svg {
  transform: scale(1.1);
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
  .header-container {
    padding: 1rem;
    flex-direction: column;
    gap: 1rem;
    min-height: auto;
  }

  .navigation-wrapper {
    flex-direction: column;
    gap: 1rem;
    width: 100%;
  }

  .main-nav ul {
    justify-content: center;
    gap: 1.5rem;
  }

  .social-nav {
    border-left: none;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-left: 0;
    padding-top: 1rem;
  }

  .social-nav ul {
    justify-content: center;
  }

  .logo h1 {
    font-size: 1.5rem;
  }
}

@media (max-width: 480px) {
  .main-nav ul {
    gap: 1rem;
  }

  .nav-link {
    font-size: 0.9rem;
  }

  .social-link {
    width: 36px;
    height: 36px;
  }

  .social-link svg {
    width: 18px;
    height: 18px;
  }
}
</style>
