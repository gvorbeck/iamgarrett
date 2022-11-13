import React from 'react'

export default function aside(props) {
  return (
    <aside>
        <img
          className='article-img'
          src={props.image}
          alt={props.imageTitle}
        />
        <div>
          <h2>{props.title}</h2>
          <p>{props.text}</p>
        </div>
    </aside>
  )
}
