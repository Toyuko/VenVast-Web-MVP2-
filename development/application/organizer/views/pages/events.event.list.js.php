<script>

<?php 
	if(isset($returnMessage) && !empty($returnMessage))
	{
		if($returnMessage == "successAddMessage")
		{
			echo "toastr['success']('Successfully created Event')";
		}
		elseif($returnMessage == "successEditMessage")
		{
			echo "toastr['success']('Successfully updated Event')";
			
		}			
	}

?>

</script>