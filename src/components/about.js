import React from 'react'
import Article from './article';
import aboutImg from '../images/info.png';

export default function about() {
  const title = 'about';
  return (
    <Article
      id={title}
      className={title}
      title={title}
      asideTitle='The Right Tools'
      asideImage={aboutImg}
      asideImageAlt='question'
      text="I make sure each project is built using the right tools for the job. Work smart, not hard!"
    >
      <p>This site has gone through dozens of iterations in the 20 years that I've owned this domain. Beginning as the home of a musical project I worked on as a teenager, it has shifted as my priorities changed and is now my professional homebase. Each time I introduce a new version of this site I hope to leverage new practices and technologies to ensure a modern experience across devices.</p>
      <p>Today, this is is built using React.js. Styles were written leveraging the SASS preprocessor. This site's code is housed in <a href='https://github.com/gvorbeck/iamgarrett-static' title='iamgarrett Repository' rel='noreferrer' target='_blank'>this GitHub repository</a> and uses GitHub page's for hosting.</p>
    </Article>
  )
}
