jQuery(document).ready(function($){

	$(document).on('submit', '#rsvpPlugin form', function (event){
		$('.rsvp__find-button').val('Finding...');
        $.ajax({
            type:"POST", // define method post or get
            url: '', // gets the post url from your action attribute
            data: $(this).serialize(),
            success:function(data){
            	$('.dbo--footer__rsvp-wrap').html($(data).find('.dbo--footer__rsvp-wrap').html());
            },
            error:function( xhr, status, errorThrown ) {
            alert( "Sorry, there was a problem!" );
            console.log( "Error: " + errorThrown );
            console.log( "Status: " + status );
            console.dir( xhr );

            },
        });
         event.preventDefault(); // prevents from going to the posting url
    });

	jQuery.validator.addMethod("customNote", function(value, element) {
    if((jQuery("#additionalRsvp").val() > 0) && (jQuery("#note").val() == "")) {
      return false;
    }

    return true;
  }, "<br />" + rsvp_plugin_vars.askEmail);
						
	jQuery("#rsvpForm").validate({
		rules: {
			note: "customNote",
			newAttending1LastName:  "required",
			newAttending1FirstName: "required", 
			newAttending2LastName:  "required",
			newAttending2FirstName: "required",
			newAttending3LastName:  "required",
			newAttending3FirstName: "required", 
      attendeeFirstName:      "required", 
      attendeeLastName:       "required"
		},
		messages: {
			note: "<br />" + rsvp_plugin_vars.customNote,
			newAttending1LastName:  "<br />" + rsvp_plugin_vars.newAttending1LastName,
			newAttending1FirstName: "<br />" + rsvp_plugin_vars.newAttending1FirstName, 
			newAttending2LastName:  "<br />" + rsvp_plugin_vars.newAttending2LastName,
			newAttending2FirstName: "<br />" + rsvp_plugin_vars.newAttending2FirstName,
			newAttending3LastName:  "<br />" + rsvp_plugin_vars.newAttending3LastName,
			newAttending3FirstName: "<br />" + rsvp_plugin_vars.newAttending3FirstName, 
      attendeeFirstName:      "<br />" + rsvp_plugin_vars.attendeeFirstName, 
      attendeeLastName:       "<br />" + rsvp_plugin_vars.attendeeLastName
		}
	});
  
  /* First step, where they search for a name */
  jQuery("#rsvp").validate({
    rules: {
      firstName: "required",
      lastName: "required",
      passcode: "required"
    }, 
    messages: {
      firstName: "<br />" + rsvp_plugin_vars.firstName, 
      lastName: "<br />" + rsvp_plugin_vars.lastName,
      passcode: "<br />" + rsvp_plugin_vars.passcode
    }
  });
  
	jQuery("#addRsvp").click(function() {
		handleAddRsvpClick();
	});
});
