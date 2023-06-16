import Nav from "./Nav";
import styles from "./Header.module.scss";

const siteTitle = "iamgarrett";

export default function Header() {
  return (
    <header className={styles.siteHeader}>
      <h1>{siteTitle}</h1>
      <div>
        <Nav />
      </div>
    </header>
  );
}
