import Article from "./Article";
import styles from "./Article.module.scss";
import portfolioImg from "../images/portfolio.png";
import poScreen from "../images/po-screen.png";
import hmcScreen from "../images/hmc-screen.png";
import oomScreen from "../images/oom-screen.png";
import cqScreen from "../images/cq-screen.png";
import kgScreen from "../images/kg-screen.png";
import {
  PORTFOLIO_PO,
  PORTFOLIO_HMC,
  PORTFOLIO_OOM,
  PORTFOLIO_KG,
  PORTFOLIO_CQ,
  SITE_PO,
  SITE_HMC,
  SITE_OOM,
  SITE_KG,
  SITE_CQ,
  ARTICLE_PORTFOLIO,
  ARTICLE_PORTFOLIO_SUBTITLE,
  ARTICLE_PORTFOLIO_DESC,
  ARTICLE_PORTFOLIO_IMG_ALT,
} from "../strings";

export default function Portfolio() {
  const sites = [
    {
      name: SITE_CQ,
      image: cqScreen,
      description: PORTFOLIO_CQ,
      link: "https://codex.quest",
      repo: "https://github.com/gvorbeck/codex-quest",
    },
    {
      name: SITE_PO,
      image: poScreen,
      description: PORTFOLIO_PO,
      // link: "https://game-master-campaign-manager.github.io/",
      // repo: "https://github.com/game-master-campaign-manager/gatsby-theme-gmcm",
    },
    {
      name: SITE_HMC,
      image: hmcScreen,
      description: PORTFOLIO_HMC,
      link: "http://ibm.biz/hmc-mobile",
    },
    {
      name: SITE_OOM,
      image: oomScreen,
      description: PORTFOLIO_OOM,
      link: "https://music.iamgarrett.com",
      repo: "https://github.com/gvorbeck/albums",
    },
    {
      name: SITE_KG,
      image: kgScreen,
      description: PORTFOLIO_KG,
      link: "https://krishantiandgarrett.com",
      repo: "https://github.com/gvorbeck/wedding",
    },
    // {
    //   name: SITE_CPZ,
    //   image: cpgScreen,
    //   description: PORTFOLIO_CPZ,
    //   link: "https://gvorbeck.github.io/container-pricing/",
    //   repo: "https://github.com/gvorbeck/container-pricing",
    // },
  ];
  const siteItems = sites.map((site) => (
    <li key={site.name}>
      <h2>{site.name}</h2>
      <div className={styles.site}>
        <a
          className={styles.picLink}
          href={site.link}
          title={site.name}
          target="_blank"
          rel="noreferrer"
        >
          <div className={styles.browserHead}>
            <div className={styles.dots} />
            <div className={styles.url} />
          </div>
          <img src={site.image} alt={site.name} />
        </a>
        <div className={styles.desc}>
          <a
            className={styles.portfolioLink}
            href={site.link}
            title={site.name}
            rel="noreferrer"
            target="_blank"
          >
            {site.name}
          </a>
          {site.repo && (
            <a
              className={styles.portfolioLink}
              href={site.repo}
              title={site.name}
              rel="noreferrer"
              target="_blank"
            >
              GitHub Repo
            </a>
          )}
          <p dangerouslySetInnerHTML={{ __html: site.description }} />
        </div>
      </div>
    </li>
  ));

  return (
    <Article
      id={ARTICLE_PORTFOLIO}
      className={ARTICLE_PORTFOLIO}
      title={ARTICLE_PORTFOLIO}
      aside={{
        title: ARTICLE_PORTFOLIO_SUBTITLE,
        image: portfolioImg,
        imageAlt: ARTICLE_PORTFOLIO_IMG_ALT,
        text: ARTICLE_PORTFOLIO_DESC,
      }}
    >
      <ul>{siteItems}</ul>
    </Article>
  );
}
