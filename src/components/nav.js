import styles from "./Nav.module.scss";
import { ReactComponent as GithubImg } from "../images/github.svg";
import { ReactComponent as LastfmImg } from "../images/lastfm.svg";
import { ReactComponent as LinkedinImg } from "../images/linkedin.svg";
import { ReactComponent as MailImg } from "../images/mail.svg";

export default function Nav() {
  // Give site navigation a smooth scroll
  const handleClick = function (event, section) {
    event.preventDefault();
    document.getElementById(section).scrollIntoView({
      behavior: "smooth",
      block: "start",
    });
  };
  const sections = ["resume", "portfolio", "about"];
  const sectionItems = sections.map((section) => (
    <li key={section}>
      <a
        href={`#${section}`}
        title={section}
        onClick={(e) => handleClick(e, section)}
      >
        {section}
      </a>
    </li>
  ));
  const externals = [
    {
      name: "LinkedIn",
      url: "https://www.linkedin.com/in/gvorbeck/",
      image: <LinkedinImg />,
    },
    {
      name: "GitHub",
      url: "https://github.com/gvorbeck",
      image: <GithubImg />,
    },
    {
      name: "Email",
      url: "mailto:me@iamgarrett.com",
      image: <MailImg />,
    },
    {
      name: "Last.fm",
      url: "https://www.last.fm/user/im_calm",
      image: <LastfmImg />,
    },
  ];
  const externalItems = externals.map((external) => (
    <li key={external.name}>
      <a
        href={external.url}
        title={external.name}
        target="_blank"
        rel="noreferrer"
      >
        {external.image}
      </a>
    </li>
  ));
  return (
    <>
      <nav className={styles.siteNav}>
        <ul>{sectionItems}</ul>
      </nav>
      <nav className={styles.externalNav}>
        <ul>{externalItems}</ul>
      </nav>
    </>
  );
}
