<script src="<?php echo base_url(); ?>assets-organizers/js/ajaxupload.js"></script>
<script>

$('#eventCreate_datepicker').datepicker();
$('#eventCreate_timepickerstart').timepicker();
$('#eventCreate_timepickerend').timepicker();
$('#eventCreate_datepicker2').datepicker();
$('#eventCreate_timepickerstart2').timepicker({showMeridian: false});
$('#eventCreate_timepickerend2').timepicker({showMeridian: false});
//$(".ckeditor").ckeditor();
//$(".summernote").summernote({height: '200px'});
$(".summernote").ckeditor();
$('#eventCreate_datepicker3').datepicker();
$('#eventCreate_datepicker4').datepicker();

new AjaxUpload('eventImageUpload', {
	action: '<?php echo base_url('','page'); ?>events/addEventFlyer/'+$('#eventInput_eventId').val(),
	name: 'image',
	onComplete: function(file, response) {
		$('#uploadLoader').hide();
		$('#eventImage').attr('src', response);
	},
	onSubmit: function(file, extension) {
		$('#uploadLoader').show();
	}
});

function importFromFacebook()
{
	$('#facebookImport_importing').show();
	
	var facebookUrlArray = $('#facebookImport_link').val().split("/");

	if(facebookUrlArray[(facebookUrlArray.length-1)] == "")
	{
		var eventId = facebookUrlArray[(facebookUrlArray.length-2)];
	}
	else
	{
		var eventId = facebookUrlArray[(facebookUrlArray.length-1)];
	}

	var urlValue = "<?php echo base_url('', 'page'); ?>events/parseEventFacebook/"+eventId;
	var oXHR = new XMLHttpRequest();
	oXHR.open("GET",urlValue, true);
	//oXHR.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	oXHR.onreadystatechange = function(oEvent)
	{
		console.log(oXHR.responseText);
		if(oXHR.readyState === 4)
		{
			if(oXHR.status === 200)
			{
				var eventData = $.parseJSON(oXHR.responseText);

				console.log(eventData);

				$('#eventname').val(eventData.title);
				$('#eventlocation').val(eventData.location);
				$('#eventCreate_datepicker2').val(eventData.date);
				$('#eventCreate_timepickerstart2').val(eventData.start_time);
				$('#eventCreate_timepickerend2').val(eventData.end_time);
				$('#eventInput_description').val(eventData.description);
				$('#eventInput_description').html(eventData.description);
				
				$('#facebookImport_importing').hide();

				$('#facebookImport').modal('hide');
			}
		}
	};
	oXHR.send();
}

</script>