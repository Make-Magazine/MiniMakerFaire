jQuery( ".sponsors-admin .acf-field-repeater .acf-button" ).html( "Add New Sponsor" );

//Add inactive class(grey out) to panels that are set to inactive
jQuery('.activeinactive input[value=hide]:checked').closest('.layout').addClass('acfInactive');
jQuery('.activeinactive input[value=Inactive]:checked').closest('.layout').addClass('acfInactive');