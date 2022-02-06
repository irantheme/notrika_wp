import $ from 'jquery';
/* ===============================================================
  Load Posts
=============================================================== */
class LoadPosts {
  constructor() {
    this.btnLoad = $('#projects .button-load');
    this.events();
  }

  events() {
    this.btnLoad.on('click', () => {
      this.activeButton();
    });
  }

  activeButton() {
    this.btnLoad.addClass('active');
  }
}

export default LoadPosts;
