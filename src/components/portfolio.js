import React from 'react';
import Article from './article';
import portfolioImg from '../images/portfolio.png';
import gmcmScreen from '../images/gmcm-screen.png';
import hmcScreen from '../images/hmc-screen.png';
import oomScreen from '../images/oom-screen.png';
import cpgScreen from '../images/cpg-screen.png';
import kgScreen from '../images/kg-screen.png';
import {
  PORTFOLIO_GMCM,
  PORTFOLIO_HMC,
  PORTFOLIO_OOM,
  PORTFOLIO_CPZ,
  PORTFOLIO_KG,
  SITE_CPZ,
  SITE_GMCM,
  SITE_HMC,
  SITE_OOM,
  SITE_KG,
  ARTICLE_PORTFOLIO,
  ARTICLE_PORTFOLIO_SUBTITLE,
  ARTICLE_PORTFOLIO_DESC,
  ARTICLE_PORTFOLIO_IMG_ALT,
} from '../strings';

export default function portfolio() {
  const sites = [
    {
      name: SITE_GMCM,
      image: gmcmScreen,
      description: PORTFOLIO_GMCM,
      link: 'https://rpg.iamgarrett.com',
      repo: 'https://github.com/gvorbeck/gatsby-theme-dmcm',
    },
    {
      name: SITE_HMC,
      image: hmcScreen,
      description: PORTFOLIO_HMC,
      link: 'http://ibm.biz/hmc-mobile',
    },
    {
      name: SITE_OOM,
      image: oomScreen,
      description: PORTFOLIO_OOM,
      link: 'https://music.iamgarrett.com',
      repo: 'https://github.com/gvorbeck/albums',
    },
    {
      name: SITE_KG,
      image: kgScreen,
      description: PORTFOLIO_KG,
      link: 'https://krishantiandgarrett.com',
      repo: 'https://github.com/gvorbeck/wedding',
    },
    {
      name: SITE_CPZ,
      image: cpgScreen,
      description: PORTFOLIO_CPZ,
      link: 'https://gvorbeck.github.io/container-pricing/',
      repo: 'https://github.com/gvorbeck/container-pricing',
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
          <a
            className='text-link'
            href={site.repo}
            title={site.name}
            rel='noreferrer'
            target='_blank'
          >
            GitHub
          </a>
          <p dangerouslySetInnerHTML={{__html: site.description}} />
        </div>
      </div>
    </li>
  );

  return (
    <Article
      id={ARTICLE_PORTFOLIO}
      className={ARTICLE_PORTFOLIO}
      title={ARTICLE_PORTFOLIO}
      asideTitle={ARTICLE_PORTFOLIO_SUBTITLE}
      asideImage={portfolioImg}
      asideImageAlt={ARTICLE_PORTFOLIO_IMG_ALT}
      text={ARTICLE_PORTFOLIO_DESC}
    >
      <ul>
        {siteItems}
      </ul>
    </Article>
  )
}
