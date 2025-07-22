# iamgarrett-vue

A modern Vue.js portfolio website built with TypeScript, showcasing professional projects and experience.

## Tech Stack

- **Vue.js 3** with Composition API
- **TypeScript** for type safety
- **Vite** for fast development and optimized builds
- **Modern CSS** with Grid, Flexbox, and CSS Variables
- **GitHub Actions** for automated deployment

## Recommended IDE Setup

[VSCode](https://code.visualstudio.com/) + [Volar](https://marketplace.visualstudio.com/items?itemName=Vue.volar) (and disable Vetur).

## Type Support for `.vue` Imports in TS

TypeScript cannot handle type information for `.vue` imports by default, so we replace the `tsc` CLI with `vue-tsc` for type checking. In editors, we need [Volar](https://marketplace.visualstudio.com/items?itemName=Vue.volar) to make the TypeScript language service aware of `.vue` types.

## Project Setup

```sh
npm install
```

### Compile and Hot-Reload for Development

```sh
npm run dev
```

### Type-Check, Compile and Minify for Production

```sh
npm run build
```

### Run Unit Tests with [Vitest](https://vitest.dev/)

```sh
npm run test:unit
```

### Lint with [ESLint](https://eslint.org/)

```sh
npm run lint
```

## Deployment

This site is automatically deployed to GitHub Pages using GitHub Actions. The workflow is triggered on every push to the `master` branch.

### Manual Deployment Setup

1. Ensure your repository settings have Pages configured to use "GitHub Actions" as the source
2. Push your changes to the `master` branch
3. The GitHub Action will automatically build and deploy your site

### Local Preview of Production Build

```sh
npm run build
npm run preview
```
