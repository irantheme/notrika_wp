import $ from 'jquery';

class Like {
  constructor() {
    this.likeButton = $('.like-button');
    this.events();
  }

  events() {
    this.likeButton.on('click', (e) => {
      this.ourClickDispatcher(e);
    });
  }

  ourClickDispatcher(e) {
    let currentLikeBox = $(e.target).closest('.like-button');
    if (currentLikeBox.data('exists') == 'yes') {
      this.deleteLike(currentLikeBox);
    } else {
      this.createLike(currentLikeBox);
    }
  }

  createLike(currentLikeBox) {
    $.ajax({
      beforeSend: (xhr) => {
        xhr.setRequestHeader('X-WP-Nonce', wpData.nonce);
      },
      url: wpData.root_url + '/wp-json/irantheme/v1/manageLike',
      type: 'POST',
      data: { postID: currentLikeBox.data('like') },
      success: (response) => {
        console.log(response);
      },
      error: (response) => {
        console.log(response);
      },
    });
  }

  deleteLike(currentLikeBox) {
    $.ajax({
      url: wpData.root_url + '/wp-json/irantheme/v1/manageLike',
      type: 'DELETE',
      success: (response) => {
        console.log(response);
      },
      error: (response) => {
        console.log(response);
      },
    });
  }
}

export default Like;
