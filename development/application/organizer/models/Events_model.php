<?php 

class Events_model extends CI_Model
{
	
	public function returnEvents($organizerId="")
	{
		$query = "SELECT * FROM event_data";
		$result = $this->db->query($query)->result();
		
		return $result;
	}
	
	public function returnEventData($eventId)
	{
		$query = "SELECT * FROM event_data WHERE event_id='$eventId'";
		$result = $this->db->query($query)->row();
		
		return $result;
	}
	
	public function returnEventImage($eventId)
	{
		
	}
	
	public function addEventFlyer($eventId, $imageName)
	{
		
	}
	
	public function addEventData()
	{
		$event_data = array();
			
		$event_data["creation_date"] = date("Y-m-d");
		$event_data["modification_date"] = date("Y-m-d H:i:s");
		$event_data["created_by"] = 1;
		$event_data["modified_by"] = 1;
		$event_data["title"] = str_replace("'","''",$_POST["eventInput_name"]);
		$event_data["location"] = str_replace("'","''",$_POST["eventInput_location"]);
		$event_data["description"] = str_replace("'","''",$_POST["eventInput_description"]);
		$event_data["type"] = $_POST["eventInput_type"];
		$event_data["category"] = $_POST["eventInput_category"];
		$event_data["published"] = $_POST["eventInput_published"];
		//$event_data["sub_category"] = $_POST["eventInput_description"];
		
		$date_array = explode("/", $_POST["eventInput_date"]);
		$event_data["date"] = $date_array[2] . "-" . $date_array[1] . "-" . $date_array[0];
		$event_data["start_time"] = date("H:i:s", strtotime($_POST["eventInput_startTime"]));
		$event_data["end_time"] = date("H:i:s", strtotime($_POST["eventInput_endTime"]));
		
		$data_labels = array();
		$data_values = array();
			
		foreach($event_data as $event_data_label=>$event_data_value)
		{
			$data_labels[] = "`" . $event_data_label . "`";
			$data_values[] = "'" . $event_data_value . "'";
		}
			
		$query = "INSERT INTO event_data(" . implode(",", $data_labels) . ") VALUES(" . implode(',',$data_values) . ")";
		$this->db->query($query);
		
		$query = "SELECT event_id FROM event_data WHERE title='$event_data[title]' ORDER BY event_id DESC LIMIT 0,1";
		$event_id = $this->db->query($query)->row()->event_id;
		
		return $event_id;
	}
	
	public function updateEventData($eventId)
	{
		$event_data = array();
			
		$event_data["creation_date"] = date("Y-m-d");
		$event_data["modification_date"] = date("Y-m-d H:i:s");
		$event_data["created_by"] = 1;
		$event_data["modified_by"] = 1;
		$event_data["title"] = str_replace("'","''",$_POST["eventInput_name"]);
		$event_data["location"] = str_replace("'","''",$_POST["eventInput_location"]);
		$event_data["description"] = str_replace("'","''",$_POST["eventInput_description"]);
		$event_data["type"] = $_POST["eventInput_type"];
		$event_data["category"] = $_POST["eventInput_category"];
		$event_data["published"] = $_POST["eventInput_published"];
		//$event_data["sub_category"] = $_POST["eventInput_description"];
		
		$date_array = explode("/", $_POST["eventInput_date"]);
		$event_data["date"] = $date_array[2] . "-" . $date_array[1] . "-" . $date_array[0];
		$event_data["start_time"] = date("H:i:s", strtotime($_POST["eventInput_startTime"]));
		$event_data["end_time"] = date("H:i:s", strtotime($_POST["eventInput_endTime"]));
		
		$data_labels = array();
		$data_values = array();
			
		foreach($event_data as $event_data_label=>$event_data_value)
		{
			$data_labels[] = "`" . $event_data_label . "`";
			$data_values[] = "'" . $event_data_value . "'";
		}
			
		$query = "UPDATE event_data SET";
		
		$param_count = 0;
		foreach($event_data as $event_data_label=>$event_data_value)
		{
			if($param_count > 0) $query .= ",";
			$query .= "`$event_data_label`='$event_data_value'";
			
			$param_count++;
		}
		
		$query .= " WHERE event_id='$eventId'";
		$this->db->query($query);
	}
}

?>