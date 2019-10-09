var $=jQuery.noConflict();

/**
 * Mandar email para pedir informes
 * @param element form
 */
function sendContactEmail( form ){

    var data = $( form ).serialize();
    console.log( data );
    $.post(
        'php/contacto.php',
        data,
        function( response ){

            var jsonResponse = $.parseJSON( response );
            console.log( jsonResponse );
            $('.js-form-container').addClass('hidden');
            $('.js-name').text( jsonResponse.name );
            $('.js-thankyou').removeClass('hidden');
            landingAnalytics();

        }
    );

}// sendContactEmail




/*------------------------------------*\
    #TOGGLE FUNCTIONS
\*------------------------------------*/

