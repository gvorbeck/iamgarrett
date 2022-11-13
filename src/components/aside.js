import React from 'react'

export default function aside(props) {
  return (
    <aside>
        <img src={props.image} alt={props.imageTitle}/>
        <h2>{props.title}</h2>
        <p>{props.text}</p>
    </aside>
  )
}
