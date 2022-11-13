import React from 'react'
import faceImg from '../images/face.png';
import Article from './article';

export default function resume() {
  return (
    <Article
        id='resume'
        className='resume'
        title='Resume'
        asideTitle='Just Garrett'
        asideImage={faceImg}
        asideImageAlt='My Face'
        text="I'm a front-end developer based in the NYC area with 15+ years of experience. I love to draw, eat pizza, and listen to punk music. I have smiled at every dog I have ever seen. My favorite color is brown. I have been to all 50 states."
    >
        <section className='skills'>
            <h2>Skills</h2>
            <ul>
                <li><span>Core:</span> HTML, CSS, JavaScript, Git, JSON, XML, some Python, some PHP</li>
                <li><span>JavaScript Libraries & Frameworks:</span> React.js, jQuery, D3, TypeScript</li>
                <li><span>CSS:</span> Sass, Less</li>
                <li><span>React Component Libraries:</span> Carbon, Material-UI</li>
                <li><span>Content Management Systems:</span> WordPress, Drupal, Moveable Type</li>
                <li><span>Database Structure:</span> MySQL, GraphQL, some SQL</li>
                <li><span>Design:</span> Some visual design, some UX design</li>
                <li><span>Methodologies:</span> Agile, Waterfall</li>
            </ul>
        </section>
        <section className='work-history'>
            <h2>Work History</h2>
            <ul>
                <li>
                    <dl>
                        <dt>Employer</dt>
                        <dd>IBM</dd>
                        <dt>Title</dt>
                        <dd>Advisory Front End Developer / Software Engineer</dd>
                        <dt>Duration</dt>
                        <dd>10/2015 - Current</dd>
                        <dt>Location</dt>
                        <dd>New York, NY & Remote</dd>
                    </dl>
                    <p>As a FED within IBM's Design Team, I work with the IBM's z/OS mainframe platform to bring a modern web experience to some of the most robust systems in the industry. Whether it is updating the look and feel of their legacy systems, working to create new services, or guiding our sales teams through an ever-updating set of processes; I use my skills to ensure a modern and beautiful interraction every time.</p>
                </li>
                <li>
                    <dl>
                        <dt>Employer</dt>
                        <dd>NBCUniversal</dd>
                        <dt>Title</dt>
                        <dd>Web Developer/Software Developer</dd>
                        <dt>Duration</dt>
                        <dd>10/2006 - 10/2015</dd>
                        <dt>Location</dt>
                        <dd>New York, NY</dd>
                    </dl>
                    <p>I worked on dozens of NBCUniversal's properties during my time there. I was fortunate to work with several teams, covering brands such as Telemundo, SyFy, USA, Bravo and more. I worked with a variety of technologies that supported millions of users. Working in a rapidly evolving field, I helped foster NBC's web development community.</p>
                </li>
            </ul>
        </section>
        <section className='education'>
            <h2>Education</h2>
            <ul>
                <li>
                    <dl>
                        <dt>School</dt>
                        <dd>New Jersey City University</dd>
                        <dt>Degree</dt>
                        <dd>Bachelor of Science in Computer Science</dd>
                        <dt>Graduated</dt>
                        <dd>1/2006 - 6/2010</dd>
                    </dl>
                </li>
            </ul>
        </section>
    </Article>
  )
}
