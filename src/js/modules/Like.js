import $ from 'jquery';
/* ===============================================================
  Like
=============================================================== */
class Like {
  // Initialize
  constructor() {
    this.likeButton = $('.like-button');
    this.events();
  }

  // Events
  events() {
    this.likeButton.on('click', (e) => {
      this.ourClickDispatcher(e);
    });
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
        console.log(response);
      },
      error: (response) => {
        console.log(response);
      },
    });
  }
}

export default Like;
