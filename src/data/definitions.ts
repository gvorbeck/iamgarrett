export interface Aside {
  title: string
  image: string
  imageAlt: string
  content: string
}

export interface PortfolioItem {
  id: string
  title: string
  company: string
  year: string
  description: string
  technologies: string[]
  link?: string
  repo?: string
  image?: string
  featured?: boolean
  status?: 'live' | 'archived' | 'in-development'
}
