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
    year: '2024-Present',
    description:
      'Leading the development of a comprehensive real estate platform that unifies agent, broker, and consumer experiences. Built with modern React architecture and scalable design systems.',
    technologies: ['React', 'TypeScript', 'Node.js', 'GraphQL', 'Design Systems'],
    featured: true,
    status: 'in-development',
  },
  {
    id: 'lab49-fintech',
    title: 'Financial Trading Interfaces',
    company: 'Lab49',
    year: '2023-2025',
    description:
      'Developed sophisticated trading interfaces and financial dashboards for tier-1 investment banks. Focused on real-time data visualization and ultra-low latency user interactions.',
    technologies: ['React', 'D3.js', 'WebSockets', 'TypeScript', 'Material-UI'],
    featured: true,
    status: 'live',
  },
  {
    id: 'ibm-mainframe-ui',
    title: 'Mainframe Modernization',
    company: 'IBM',
    year: '2015-2023',
    description:
      "Transformed legacy z/OS mainframe interfaces into modern web experiences. Created design systems and component libraries used across IBM's enterprise mainframe portfolio.",
    technologies: ['React', 'Carbon Design System', 'IBM z/OS', 'Node.js', 'Sass'],
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
    featured: true,
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
]
