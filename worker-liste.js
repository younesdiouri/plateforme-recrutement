$(function () {
    /* BOOTSNIPP FULLSCREEN FIX */
    if (window.location == window.parent.location) {
        $('#back-to-bootsnipp').removeClass('hide');
    }
    
    
    $('[data-toggle="tooltip"]').tooltip();
    
    $('#fullscreen').on('click', function(event) {
        event.preventDefault();
        window.parent.location = "http://bootsnipp.com/iframe/4l0k2";
    });

    $('#curriculum-modal').on('show.bs.modal', function(e) {
    var visualcv = $(e.relatedTarget).data('visualcv');
	var res = visualcv.split("@@@");
    $(e.currentTarget).find('textarea[name="competences"]').val(res[0]);
	$(e.currentTarget).find('textarea[name="formation"]').val(res[1]);
	$(e.currentTarget).find('textarea[name="experiences"]').val(res[2]);
	$(e.currentTarget).find('textarea[name="langues"]').val(res[3]);
	$(e.currentTarget).find('textarea[name="interets"]').val(res[4]);
});
    
    $('[data-command="toggle-search"]').on('click', function(event) {
        event.preventDefault();
        $(this).toggleClass('hide-search');
        
        if ($(this).hasClass('hide-search')) {        
            $('.c-search').closest('.row').slideUp(100);
        }else{   
            $('.c-search').closest('.row').slideDown(100);
        }
    })
    
    $('#contact-list').searchable({
        searchField: '#contact-list-search',
        selector: 'li',
        childSelector: '.col-xs-12',
        show: function( elem ) {
            elem.slideDown(100);
        },
        hide: function( elem ) {
            elem.slideUp( 100 );
        }
    })
});
