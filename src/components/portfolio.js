import React from 'react';
import Article from './article';
import portfolioImg from '../images/portfolio.png';
import gmcmScreen from '../images/gmcm-screen.png';
import hmcScreen from '../images/hmc-screen.png';
import oomScreen from '../images/oom-screen.png';
import cpgScreen from '../images/cpg-screen.png';

export default function portfolio() {
  const sites = [
    {
      name: 'GMCM',
      image: gmcmScreen,
      description: "I'm a bit of a nerd at heart and love Dungeons & Dragons. As a Dungeon Master, I wanted to use my skills to create a tool that helped me keep track of complex rules, organize combat scenarios, and create content-rich maps of locations. Thus was born this react-based tool for GatsbyJS - the Game Master's Campaign Manager!",
      link: 'https://rpg.iamgarrett.com',
    },
    {
      name: 'IBM HMC Mobile',
      image: hmcScreen,
      description: "When IBM's HMC platform released a new app meant to help system admins manage their Z machines remotely, we needed to get the word out about all this app could do for them. Here, users can learn that they no longer need to be tied to their desks in order to manage these vast systems.",
      link: 'http://ibm.biz/hmc-mobile',
    },
    {
      name: 'Opinions on Music',
      image: oomScreen,
      description: "I have for most of my life made lists of my favorite records released each year. I don't pretend to be an authority on What Is Good, but with my love of music and penchant for making lists, I built out this nifty little site to keep track of it all. This site uses Last.fm's API to populate album artwork and is built using GitHub's Jekyll static-site builder.",
      link: 'https://music.iamgarrett.com',
    },
    {
      name: 'Container Pricing for IBM Z',
      image: cpgScreen,
      description: "This site is built out as a guide for IBM sales teams trying to set up clients on IBM Z's container pricing products. The process is complex, ever-changing, and resources were spread between several locations, so we created a guide that lists everything out and links to everything their teams would need in order to complete the process as seamlessly as possible! NOTE: This linked version is sanitized of any proprietary content.",
      link: 'https://gvorbeck.github.io/container-pricing/',
    },
  ];
  const siteItems = sites.map((site) =>
    <li key={site.name}>
      <h2>{site.name}</h2>
      <div className='site'>
        <a
          className='pic-link'
          href={site.link}
          title={site.name}
          target='_blank'
          rel='noreferrer'
        >
          <div className='browser-head'>
            <div className='dots' />
            <div className='url' />
          </div>
          <img src={site.image} alt={site.name} />
        </a>
        <div className='desc'>
          <a
            className='text-link'
            href={site.link}
            title={site.name}
            rel='noreferrer'
            target='_blank'
          >
            {site.name}
          </a>
          <p>{site.description}</p>
        </div>
      </div>
    </li>
  );

  return (
    <Article
      id='portfolio'
      className='portfolio'
      title='Portfolio'
      asideTitle='Some of My Work'
      asideImage={portfolioImg}
      asideImageAlt='Binder'
      text="Here is a selection of some of my most awesome work, both personal and professional."
    >
      <ul>
        {siteItems}
      </ul>
    </Article>
  )
}
