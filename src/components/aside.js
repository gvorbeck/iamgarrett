import styles from "./Article.module.scss";

export default function Aside(props) {
  return (
    <aside>
      <img
        className={styles.articleImg}
        src={props.image}
        alt={props.imageTitle}
      />
      <div>
        <h2>{props.title}</h2>
        <p>{props.text}</p>
      </div>
    </aside>
  );
}
