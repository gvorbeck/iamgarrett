import styles from "./Article.module.scss";

export default function aside(props) {
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
