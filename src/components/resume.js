import faceImg from "../images/face.png";
import resumePDF from "../files/JOSEPH_GARRETT_VORBECK.pdf";
import Article from "./Article";
import styles from "./Article.module.scss";
import {
  ARTICLE_RESUME,
  ARTICLE_RESUME_SUBTITLE,
  ARTICLE_RESUME_IMG_ALT,
  ARTICLE_RESUME_DESC,
  ARTICLE_RESUME_SECTION_ED,
  ARTICLE_RESUME_SECTION_HIST,
  ARTICLE_RESUME_SECTION_SKILLS,
  JOB_EMPLOYER,
  JOB_TITLE,
  JOB_DURATION,
  JOB_LOCATION,
  LAB_CO,
  LAB_DESC,
  LAB_DURATION,
  LAB_LOCATION,
  LAB_TITLE,
  IBM_CO,
  IBM_DESC,
  IBM_DURATION,
  IBM_LOCATION,
  IBM_TITLE,
  NBC_CO,
  NBC_DESC,
  NBC_DURATION,
  NBC_LOCATION,
  NBC_TITLE,
  SCHOOL,
  SCHOOL_DEGREE,
  SCHOOL_GRAD,
  NJCU_DEGREE,
  NJCU_GRAD,
  NJCU_NAME,
  SKILL_CMS,
  SKILL_CORE,
  SKILL_CSS,
  SKILL_DBS,
  SKILL_DESIGN,
  SKILL_LIB,
  SKILL_METHOD,
  SKILL_TITLE_CMS,
  SKILL_TITLE_CORE,
  SKILL_TITLE_CSS,
  SKILL_TITLE_DBS,
  SKILL_TITLE_DESIGN,
  SKILL_TITLE_LIB,
  SKILL_TITLE_METHOD,
} from "../strings";

export default function Resume() {
  const jobs = [
    {
      employer: LAB_CO,
      title: LAB_TITLE,
      duration: LAB_DURATION,
      location: LAB_LOCATION,
      desc: LAB_DESC,
    },
    {
      employer: IBM_CO,
      title: IBM_TITLE,
      duration: IBM_DURATION,
      location: IBM_LOCATION,
      desc: IBM_DESC,
    },
    {
      employer: NBC_CO,
      title: NBC_TITLE,
      duration: NBC_DURATION,
      location: NBC_LOCATION,
      desc: NBC_DESC,
    },
  ];
  const jobItems = jobs.map((job) => (
    <li key={job.employer}>
      <dl>
        <dt>{JOB_EMPLOYER}</dt>
        <dd>{job.employer}</dd>
        <dt>{JOB_TITLE}</dt>
        <dd>{job.title}</dd>
        <dt>{JOB_DURATION}</dt>
        <dd>{job.duration}</dd>
        <dt>{JOB_LOCATION}</dt>
        <dd>{job.location}</dd>
      </dl>
      <p>{job.desc}</p>
    </li>
  ));
  return (
    <Article
      id={ARTICLE_RESUME}
      className={ARTICLE_RESUME}
      title={ARTICLE_RESUME}
      aside={{
        title: ARTICLE_RESUME_SUBTITLE,
        image: faceImg,
        imageAlt: ARTICLE_RESUME_IMG_ALT,
        text: ARTICLE_RESUME_DESC,
      }}
      fileLink={{
        title: `Download my full resume`,
        file: resumePDF,
      }}
    >
      <section className={styles.skills}>
        <h2>{ARTICLE_RESUME_SECTION_SKILLS}</h2>
        <ul>
          <li>
            <span>{SKILL_TITLE_CORE}</span> {SKILL_CORE}
          </li>
          <li>
            <span>{SKILL_TITLE_LIB}</span> {SKILL_LIB}
          </li>
          <li>
            <span>{SKILL_TITLE_CSS}</span> {SKILL_CSS}
          </li>
          <li>
            <span>{SKILL_TITLE_DESIGN}</span> {SKILL_DESIGN}
          </li>
          <li>
            <span>{SKILL_TITLE_CMS}</span> {SKILL_CMS}
          </li>
          <li>
            <span>{SKILL_TITLE_DBS}</span> {SKILL_DBS}
          </li>
          <li>
            <span>{SKILL_TITLE_METHOD}</span> {SKILL_METHOD}
          </li>
        </ul>
      </section>
      <section className={styles.workHistory}>
        <h2>{ARTICLE_RESUME_SECTION_HIST}</h2>
        <ul>{jobItems}</ul>
      </section>
      <section className={styles.education}>
        <h2>{ARTICLE_RESUME_SECTION_ED}</h2>
        <ul>
          <li>
            <dl>
              <dt>{SCHOOL}</dt>
              <dd>{NJCU_NAME}</dd>
              <dt>{SCHOOL_DEGREE}</dt>
              <dd>{NJCU_DEGREE}</dd>
              <dt>{SCHOOL_GRAD}</dt>
              <dd>{NJCU_GRAD}</dd>
            </dl>
          </li>
        </ul>
      </section>
    </Article>
  );
}
