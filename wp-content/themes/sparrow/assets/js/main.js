jQuery(document).ready(function () {
    jQuery('.follow_us').click(function () {
        let data = {
            action: 'random_posts',
        };
        jQuery
            .post( my_ajax_request.ajaxurl, data, function () {
            })
    });

    jQuery('.user_info').click(function () {
        let data = {
            action: 'user_info',
            id: '23',
        };
        jQuery
            .post( my_ajax_request.ajaxurl, data, function (response) {
                if(response){

                    $('.qwerty').append(response);
                }
            })
    });

    jQuery('.security').click(function () {
        let data = {
            action: 'user_security',
            nonce: my_ajax_request.nonce,
            id: '1',
        };
        let result = jQuery
            .post( my_ajax_request.ajaxurl, data, function () {
            });
        result.done( function () {
            alert('vse good!!!');
        });
        result.fail( function () {
            alert('403');
        });
    });
});







jQuery(document).on('gform_confirmation_loaded', function(event, formId){
alert('hello');
});


gform.addFilter( 'gform_chosen_options', function ( options, element ) {
    options.width = '25%!important';
    options.disable_search = true;
    console.log(options);
    return options;
} );

gform.addFilter('gform_spinner_url', 'change_spinner');
function change_spinner(spinnerUrl, formId){
    //do something here
    console.log(spinnerUrl);
    return spinnerUrl;
}