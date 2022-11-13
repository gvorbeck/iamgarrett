import React from 'react'
import Nav from './nav';
import '../styles/header.scss';

const siteTitle = 'iamgarrett';

export default function header() {
  return (
    <header className='site-header'>
        <h1>{siteTitle}</h1>
        <Nav/>
    </header>
    
  )
}
