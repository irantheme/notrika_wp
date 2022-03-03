import $ from 'jquery';
/* ===============================================================
  Category Trigger (Toggle of posts)
=============================================================== */
class Parallax {
  constructor() {
    this.frontHeader();
    this.frontPartners();
    this.blogHeader();
    this.events();
  }

  events() {}

  trigger() {
    $(window).trigger('resize.px.parallax');
  }

  // Front header init
  frontHeader() {
    $('#parallax-front-header').parallax({
      imageSrc: wpData.frontHeaderBg,
      speed: 0.5,
      parallax: 'scroll',
      positionX: 'left',
    });
  }

  // Front partners init
  frontPartners() {
    $('#parallax-front-partners').parallax({
      imageSrc: wpData.frontPartnersBg,
      speed: 0.5,
      parallax: 'scroll',
      positionX: 'left',
      // mirrorContainer: '#wrapper',
      overScrollFix: true,
    });
  }

  // Blog header init
  blogHeader() {
    $('#parallax-blog-header').parallax({
      imageSrc: wpData.BlogHeaderBg,
      speed: 0.5,
      parallax: 'scroll',
      positionX: 'left',
    });
  }
}

export default Parallax;
