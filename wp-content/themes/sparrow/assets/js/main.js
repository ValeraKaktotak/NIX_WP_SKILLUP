
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