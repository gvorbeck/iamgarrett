export interface PortfolioItem {
  id: string
  title: string
  company: string
  year: string
  description: string
  technologies: string[]
  link?: string
  image?: string
  featured?: boolean
  status?: 'live' | 'archived' | 'in-development'
}

export const portfolio: PortfolioItem[] = [
  {
    id: 'anywhere-platform',
    title: 'Universal Platform',
    company: 'Anywhere Real Estate',
    year: '2025',
    image: '/images/portfolio-univ-web.webp',
    description:
      "I helped build a unified web platform for Anywhere Realty's franchise network, consolidating multiple real estate brands into a single codebase while enabling extensive brand customization. The solution maintained each brand's visual identity and user experience while significantly reducing development complexity and maintenance costs.",
    technologies: ['React', 'TypeScript', 'Vite', 'Redux', 'Vanilla CSS'],
    featured: true,
    status: 'in-development',
    link: 'https://www.bhgre.com/',
  },
  {
    id: 'lab49-fintech',
    title: 'Portfolio Optimizer',
    company: 'Lab49',
    year: '2023-2024',
    image: '/images/portfolio-portfolio-optimizer.webp',
    description:
      "Developed the frontend for T. Rowe Price's comprehensive portfolio management platform, a year-long greenfield project serving their clients. Created interactive interfaces for asset allocation planning, risk assessment visualization, and automated rebalancing guidance. Transformed complex financial algorithms into an accessible, user-friendly experience that empowers individual clients to make informed investment decisions.",
    technologies: ['React', 'Redux', 'Tailwind', 'TypeScript', 'Beacon', 'Storybook', 'Jest'],
    featured: true,
    status: 'live',
  },
  {
    id: 'ibm-mainframe-ui',
    title: 'Mainframe Modernization',
    company: 'IBM',
    year: '2015-2023',
    image: '/images/portfolio-ibm-z.webp',
    description:
      "Spearheaded a multi-year frontend modernization campaign for IBM's Z mainframe platform, the backbone of global financial infrastructure. Led development across diverse system components—Hardware Management Console, Container Pricing, HMC Mobile, and Trusted Key Entry—transforming legacy interfaces into intuitive, modern experiences. This comprehensive effort bridged decades of technology evolution, enabling next-generation system administrators to efficiently manage mission-critical systems at major financial institutions worldwide.",
    technologies: [
      'React',
      'Carbon Design System',
      'IBM z/OS',
      'Storybook',
      'Sass',
      'Gatsby',
      'Mustache',
    ],
    featured: true,
    status: 'live',
  },
  {
    id: 'nbc-digital-properties',
    title: 'Digital Media Properties',
    company: 'NBCUniversal',
    year: '2006-2015',
    description:
      'Built and maintained web properties for major NBC brands including SyFy, USA, Bravo, and Telemundo. Supported millions of daily users with scalable frontend architecture.',
    technologies: ['JavaScript', 'jQuery', 'PHP', 'CSS', 'WordPress'],
    status: 'archived',
  },
  {
    id: 'personal-vue-portfolio',
    title: 'Personal Portfolio (Vue.js)',
    company: 'Personal Project',
    year: '2024',
    description:
      'Modern portfolio website built with Vue.js, featuring responsive design, smooth animations, and optimized performance. Showcases latest web development best practices.',
    technologies: ['Vue.js', 'TypeScript', 'Vite', 'CSS Grid', 'Modern CSS'],
    status: 'live',
    link: 'https://github.com/garrett-vorbeck',
  },
  {
    id: 'design-system-library',
    title: 'Component Library',
    company: 'Various Projects',
    year: '2020-Present',
    description:
      'Reusable component libraries and design systems built for multiple organizations. Focused on accessibility, consistency, and developer experience.',
    technologies: ['React', 'Storybook', 'Sass', 'TypeScript', 'Jest'],
    status: 'live',
  },
  {
    id: 'codex-quest',
    title: 'Codex Quest',
    company: 'Personal Project',
    year: '2023',
    image: '/images/portfolio-codex-quest.webp',
    description:
      'Created a React-based character management ecosystem for the Basic Fantasy Role-Playing Game, an open-source tabletop RPG system. Engineered both player-facing tools for character creation and progression tracking, and game master utilities including bestiary management and real-time combat tracking. Successfully scaled the platform to serve 800+ users globally, fostering an active community of tabletop gaming enthusiasts.',
    technologies: ['React', 'Tailwind', 'Ant Design', 'Firebase'],
    link: 'https://codex.quest',
    status: 'live',
    featured: true,
  },
  {
    id: 'glyph-quest',
    title: 'Glyph Quest',
    company: 'Personal Project',
    year: '2022',
    image: '/images/portfolio-glyph-quest.webp',
    description:
      'Typography-focused puzzle game exploring the art and science of letterforms and font design.',
    technologies: ['JavaScript', 'Canvas API', 'Web Fonts', 'CSS'],
    status: 'live',
  },
  {
    id: 'opinions-on-music',
    title: 'Opinions on Music',
    company: 'Personal Project',
    year: '2021',
    image: '/images/portfolio-opinions-on-music.webp',
    description:
      'Music review and discovery platform featuring user-generated content and collaborative playlists.',
    technologies: ['React', 'Node.js', 'MongoDB', 'Spotify API'],
    status: 'archived',
  },
  {
    id: 'roll-alone',
    title: 'Roll Alone',
    company: 'Personal Project',
    year: '2019',
    image: '/images/portfolio-roll-alone.webp',
    description:
      'Solo tabletop RPG companion app with dice rolling, character management, and story generation.',
    technologies: ['JavaScript', 'Local Storage', 'Progressive Web App'],
    status: 'live',
  },
]
