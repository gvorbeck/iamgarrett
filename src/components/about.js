import React from 'react'
import Article from './article';
import aboutImg from '../images/info.png';
import {
  ARTICLE_ABOUT,
  ARTICLE_ABOUT_SUBTITLE,
  ARTICLE_ABOUT_IMG_ALT,
  ARTICLE_ABOUT_DESC,
  ARTICLE_ABOUT_CONTENT,
} from '../strings';

export default function about() {
  return (
    <Article
      id={ARTICLE_ABOUT}
      className={ARTICLE_ABOUT}
      title={ARTICLE_ABOUT}
      asideTitle={ARTICLE_ABOUT_SUBTITLE}
      asideImage={aboutImg}
      asideImageAlt={ARTICLE_ABOUT_IMG_ALT}
      text={ARTICLE_ABOUT_DESC}
    >
      <div dangerouslySetInnerHTML={{ __html: ARTICLE_ABOUT_CONTENT }} />
    </Article>
  )
}
