

jQuery(document).ready(function () {
    jQuery('.follow_us').click(function () {
        let data = {
            action: 'random_posts',
        };
        jQuery
            .post( my_rand_post.ajaxurl, data, function () {
            })
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