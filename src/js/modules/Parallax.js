import $ from 'jquery';
/* ===============================================================
  Category Trigger (Toggle of posts)
=============================================================== */
class Parallax {
  constructor() {
    this.events();
  }

  events() {
    $(window).trigger('resize').trigger('scroll');
    // $(window).on('scroll', () => {
    //   console.log('sdljf');
    //   $('.parallax-container').parallax({
    //     parallax: 'scroll',
    //     speed: 0.5,
    //     positionX: 'left',
    //   });
    // });
  }
}

export default Parallax;
