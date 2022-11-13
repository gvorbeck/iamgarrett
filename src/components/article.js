import React from 'react'
import Aside from './aside';
import '../styles/article.scss';

export default function article(props) {
  return (
    <article id={props.id} className={`main-article ${props.className}-article`}>
        <h1>{props.title}</h1>
        <div>
          <Aside title={props.asideTitle} image={props.asideImage} imageTitle={props.asideImageAlt} text={props.text} />
          <section className='main'>
              {props.children}
          </section>
        </div>
    </article>
  )
}
