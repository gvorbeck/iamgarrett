<script setup lang="ts">
import { ref, onMounted, onUnmounted } from 'vue'

const isScrolled = ref(false)

const handleScroll = () => {
  isScrolled.value = window.scrollY > 20
}

const smoothScrollTo = (elementId: string, event: Event) => {
  event.preventDefault()

  const targetElement = document.getElementById(elementId)
  if (!targetElement) return

  const headerHeight = 120 // Adjust this based on your header height
  const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset
  const offsetPosition = elementPosition - headerHeight

  window.scrollTo({
    top: offsetPosition,
    behavior: 'smooth',
  })
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
        <h1>iamgarrett</h1>
      </div>

      <div class="navigation-wrapper">
        <nav class="main-nav">
          <ul>
            <li>
              <a href="#resume" class="nav-link" @click="smoothScrollTo('resume', $event)"
                >Resume</a
              >
            </li>
            <li>
              <a href="#portfolio" class="nav-link" @click="smoothScrollTo('portfolio', $event)"
                >Portfolio</a
              >
            </li>
            <li>
              <a href="#about" class="nav-link" @click="smoothScrollTo('about', $event)">About</a>
            </li>
          </ul>
        </nav>

        <nav class="social-nav">
          <ul>
            <li>
              <a
                href="https://linkedin.com/in/garrett-vorbeck"
                target="_blank"
                rel="noopener"
                class="social-link linkedin"
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
                class="social-link github"
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
              <a href="mailto:garrett@example.com" class="social-link email" aria-label="Email">
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
  background: var(--bg-header);
  border-bottom: 4px solid var(--accent-primary);
  transition: all 0.3s ease;
}

header.scrolled {
  background: var(--bg-header-scrolled);
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
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

.logo {
  color: var(--text-inverse);
  font-family: 'Merriweather', serif;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 120px;
  height: 60px;

  h1 {
    font-weight: bold;
    font-size: clamp(1.5rem, 4vw, 3rem);
    line-height: 1;
    margin: 0;
    position: relative;
    z-index: 1;
    text-align: center;

    &::after {
      background-color: #fab239;
      border-radius: 50%;
      box-shadow:
        0 3px 6px #00000029,
        0 3px 6px #0000003b;
      content: '';
      width: clamp(60px, 8vw, 100px);
      height: clamp(60px, 8vw, 100px);
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: -1;
    }
  }
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
  gap: 1.5rem;
}

.nav-link {
  text-decoration: none;
  color: var(--text-inverse);
  font-weight: 600;
  font-size: 1rem;
  text-transform: lowercase;
  padding: 0.6rem 1.2rem;
  background: var(--navy-light);
  border-radius: 4px;
  transition: all 0.2s ease;
  border: 2px solid transparent;
}

.nav-link:hover {
  background: var(--accent-primary);
  color: var(--bg-header);
  border-color: var(--accent-primary);
  transform: translateY(-2px);
}

.social-nav ul {
  gap: 1rem;
}

.social-link {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 44px;
  height: 44px;
  border-radius: 4px;
  color: var(--text-inverse);
  text-decoration: none;
  transition: all 0.2s ease;
  border: none;
}

.social-link.linkedin {
  background: #0077b5;
}

.social-link.github {
  background: #333333;
}

.social-link.email {
  background: var(--red);
}

.social-link:hover {
  transform: translateY(-3px) scale(1.05);
}

.social-link svg {
  transition: transform 0.3s ease;
}

.social-link:hover svg {
  transform: scale(1.1);
}

/* Mobile Responsiveness */
@media (max-width: 1024px) {
  .header-container {
    padding: 1rem 1.5rem;
  }

  .logo h1 {
    font-size: clamp(2rem, 4vw, 3rem);
  }
}

@media (max-width: 768px) {
  .header-container {
    padding: 1rem;
    flex-direction: column;
    gap: 1rem;
    min-height: auto;
  }

  .logo {
    min-width: auto;
    height: 50px;

    h1 {
      font-size: clamp(1.2rem, 5vw, 1.8rem);
    }
  }

  .navigation-wrapper {
    flex-direction: column;
    gap: 1rem;
    width: 100%;
  }

  .main-nav ul {
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
  }

  .nav-link {
    padding: 0.5rem 1rem;
    font-size: 0.9rem;
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
}

@media (max-width: 480px) {
  .header-container {
    padding: 0.75rem;
  }

  .logo {
    height: 40px;

    h1 {
      font-size: clamp(1rem, 4vw, 1.4rem);

      &::after {
        width: clamp(40px, 6vw, 60px);
        height: clamp(40px, 6vw, 60px);
      }
    }
  }

  .main-nav ul {
    gap: 0.5rem;
  }

  .nav-link {
    font-size: 0.8rem;
    padding: 0.4rem 0.8rem;
  }

  .social-link {
    width: 36px;
    height: 36px;
  }

  .social-link svg {
    width: 16px;
    height: 16px;
  }
}
</style>
