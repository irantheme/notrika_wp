import $ from 'jquery';
/* ===============================================================
  Like
=============================================================== */
class Like {
  // Initialize
  constructor() {
    this.likeButton = $('.like-button');
    this.checkStatusLiked();
    this.events();
  }

  // Events
  events() {
    this.likeButton.on('click', (e) => {
      this.ourClickDispatcher(e);
    });
  }

  // Check status liked (Local storage)
  checkStatusLiked(e) {
    if (localStorage.getItem('wpIranthemeLiked')) {
      this.likeButton.attr('data-exists', 'yes');
    } else {
      this.likeButton.attr('data-exists', 'no');
    }
  }

  // Click like button dispatcher
  ourClickDispatcher(e) {
    let currentLikeBox = $(e.target).closest('.like-button');
    if (currentLikeBox.attr('data-exists') == 'yes') {
      this.deleteLike(currentLikeBox);
    } else {
      this.createLike(currentLikeBox);
    }
  }

  // Create like
  createLike(currentLikeBox) {
    $.ajax({
      beforeSend: (xhr) => {
        xhr.setRequestHeader('X-WP-Nonce', wpData.nonce);
      },
      url: wpData.root_url + '/wp-json/irantheme/v1/manageLike',
      type: 'POST',
      data: { postID: currentLikeBox.data('post') },
      success: (response) => {
        currentLikeBox.attr('data-exists', 'yes');
        let likeCount = parseInt(currentLikeBox.find('.like-count').html(), 10);
        likeCount++;
        currentLikeBox.find('.like-count').html(likeCount);
        currentLikeBox.attr('data-like', response);
        localStorage.setItem('wpIranthemeLiked', true);
        console.log(response);
      },
      error: (response) => {
        console.log(response);
      },
    });
  }

  // Delete like
  deleteLike(currentLikeBox) {
    $.ajax({
      beforeSend: (xhr) => {
        xhr.setRequestHeader('X-WP-Nonce', wpData.nonce);
      },
      url: wpData.root_url + '/wp-json/irantheme/v1/manageLike',
      data: { like: currentLikeBox.attr('data-like') },
      type: 'DELETE',
      success: (response) => {
        currentLikeBox.attr('data-exists', 'no');
        let likeCount = parseInt(currentLikeBox.find('.like-count').html(), 10);
        likeCount--;
        currentLikeBox.find('.like-count').html(likeCount);
        currentLikeBox.attr('data-like', '');
        localStorage.removeItem('wpIranthemeLiked');
        console.log(response);
      },
      error: (response) => {
        console.log(response);
      },
    });
  }
}

export default Like;
