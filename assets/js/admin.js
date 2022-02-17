jQuery(document).ready(function ($) {
  /***** Colour picker *****/

  $('.colorpicker').hide();
  $('.colorpicker').each(function () {
    $(this).farbtastic($(this).closest('.color-picker').find('.color'));
  });

  $('.color').click(function () {
    $(this).closest('.color-picker').find('.colorpicker').fadeIn();
  });

  $(document).mousedown(function () {
    $('.colorpicker').each(function () {
      var display = $(this).css('display');
      if (display == 'block') $(this).fadeOut();
    });
  });

  /***** Uploading images *****/

  jQuery.fn.uploadMediaFile = function (button, preview_media) {
    let button_id = button.attr('id');
    let field_id = button_id.replace('_button', '');
    let preview_id = button_id.replace('_button', '_preview');

    // Create the media frame.
    let file_frame = (wp.media.frames.file_frame = wp.media({
      title: jQuery(this).data('uploader_title'),
      button: {
        text: jQuery(this).data('uploader_button_text'),
      },
      multiple: false,
    }));

    // When an image is selected, run a callback.
    file_frame.on('select', function () {
      attachment = file_frame.state().get('selection').first().toJSON();
      jQuery('#' + field_id).val(attachment.id);
      if (preview_media) {
        jQuery('#' + preview_id).attr('src', attachment.sizes.thumbnail.url);
      }
    });

    // Finally, open the modal
    file_frame.open();
  };

  jQuery('.image_upload_button').click(function () {
    jQuery.fn.uploadMediaFile(jQuery(this), true);
  });

  jQuery('.image_delete_button').click(function () {
    jQuery(this).parent().find('.image_data_field').val('');
    jQuery(this).parent().find('.image_preview').remove();
    return false;
  });

  /***** Navigation for settings page *****/

  // Make sure each heading has a unique ID.
  jQuery('ul#settings-sections.subsubsub')
    .find('a')
    .each(function (i) {
      console.log(this);
      var id_value = jQuery(this).attr('href').replace('#', '');
      jQuery('h2:contains("' + jQuery(this).text() + '")')
        .attr('id', id_value)
        .addClass('section-heading');
    });

  // Create nav links for settings page
  jQuery('#plugin_settings .subsubsub a.tab').click(function (e) {
    // Move the "current" CSS class.
    jQuery(this).parents('.subsubsub').find('.current').removeClass('current');
    jQuery(this).addClass('current');

    // If "All" is clicked, show all.
    if (jQuery(this).hasClass('all')) {
      jQuery(
        '#plugin_settings h2, #plugin_settings form p, #plugin_settings table.form-table, p.submit'
      ).show();

      return false;
    }

    // If the link is a tab, show only the specified tab.
    var toShow = jQuery(this).attr('href');

    // Remove the first occurance of # from the selected string (will be added manually below).
    toShow = toShow.replace('#', '', toShow);

    jQuery(
      '#plugin_settings form h2, #plugin_settings form > p:not(".submit"), #plugin_settings table'
    ).hide();
    jQuery('h2#' + toShow)
      .show()
      .nextUntil('h2.section-heading', 'p, table, table p')
      .show();

    return false;
  });
});
