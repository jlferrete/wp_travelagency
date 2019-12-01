(function($, root, undefined) {

    $(function() {

        'use strict';

        jQuery('.gallery a').each(function() {
            jQuery(this).attr({ 'data-lightbox': 'galeria' });
        });

        lightbox.option({
            'showImageNumberLabel': false,
            'wrapAround': true
        });

        jQuery('.single-tours header nav ul li:contains("Tours")').addClass('current_page_item');

    });

})(jQuery, this);