import Aside from "./Aside";
import styles from "./Article.module.scss";

export default function Article(props) {
  return (
    <article
      id={props.id}
      className={`${styles.mainArticle} ${styles[`${props.className}Article`]}`}
    >
      <h1>{props.title}</h1>
      {props.fileLink && (
        <a
          className={styles.resumeLink}
          href={props.fileLink.file}
          title={props.fileLink.title}
          target="_blank"
          rel="noreferrer"
        >
          ({props.fileLink.title})
        </a>
      )}
      <div>
        <Aside
          title={props.aside.title}
          image={props.aside.image}
          imageTitle={props.aside.imageAlt}
          text={props.aside.text}
        />
        <section className={styles.main}>{props.children}</section>
      </div>
    </article>
  );
}
