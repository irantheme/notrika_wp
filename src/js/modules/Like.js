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
      this.deleteLike();
    } else {
      this.createLike();
    }
  }

  createLike() {
    console.log('Create like');
  }

  deleteLike() {
    console.log('Delete like');
  }
}

export default Like;
