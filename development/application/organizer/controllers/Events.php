<?php 

class Events extends CI_Controller
{
	
	public function parseEventFacebook($eventId)
	{
		//$checkAccessRights = checkAccessRights();
		require_once 'assets-organizers/sdk/facebook-sdk/facebook.php';
		
		$facebook = new Facebook(array(
	       'appId'  => '171281293058586',
	       'secret' => 'f1c8d293ea643cfbd61b38cb2401a20c',
	       'cookie' => true,
		));	
		
		$fql = "SELECT name, ticket_uri, venue, location, description, pic_cover, start_time, end_time, host from event where eid= '" . $eventId . "'";

		 $response = $facebook->api(array(
		     'method' => 'fql.query',
		     'query' =>$fql,
		 ));
		 
		 //var_dump($response);
		 //echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_HEX_QUOT);
		 
		 echo "{";
		 echo "\"title\":\"" . substr(str_replace('"',"",$response[0]['name']),0,60) . "\"";
		 echo ",\"ticket_uri\":\"" . $response[0]['ticket_uri'] . "\"";
		 echo ",\"location\":\"" . str_replace('"',"",$response[0]['location']) . "\"";
		 echo ",\"description\":\"" . str_replace("\n", "<br />",htmlentities($response[0]['description'], ENT_QUOTES, "UTF-8")) . "\"";
		 echo ",\"image\":\"" . $response[0]['pic_cover']['source'] . "\"";
		 echo ",\"date\":\"" . date("d/m/Y", strtotime($response[0]['start_time'])) . "\"";
		 echo ",\"start_time\":\"" . date("H:i", strtotime(substr($response[0]['start_time'], 0, -5))) . "\"";
		 
		 if(!empty($response[0]['end_time']))
		 {
		 	echo ",\"end_time\":\"" . date("H:i", strtotime(substr($response[0]['end_time'], 0, -5))) . "\"";
		 }
		 else
		 echo ",\"end_time\":\"\"";
		 
		 echo ",\"organizer\":\"" . htmlentities($response[0]['host'], ENT_QUOTES, "UTF-8") . "\"";
		 echo "}";
	}
	
	public function viewEvents()
	{
		//$checkAccessRights = checkAccessRights();
			
		$this->load->model('events_model','',TRUE);
		//$this->load->model('common_model','',TRUE);
		$this->load->library('session');
	
		$data_header = array();
		$data_header["page_header"] = "Events";
			
		$data = array();
		$data["events"] = $this->events_model->returnEvents();
		$data["returnMessage"] = $this->session->flashdata('returnMessage');
			
		$this->load->view('templates/header', $data_header);
		$this->load->view('templates/sidebar_left');
		$this->load->view('templates/sidebar_right');
		//$this->load->view('templates/menu');
		$this->load->view('pages/events.event.list.php', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
		$this->load->view('pages/events.event.list.js.php', $data);
		$this->load->view('templates/end');
	}
	
	public function addEvent()
	{			
		$this->load->model('events_model','',TRUE);
		
		$data_header = array();
		$data_header["page_header"] = "Event Create";
		
		$data = array();
		//$data["locations"] = $this->events_model->returnLocations();
			
		$this->load->view('templates/header', $data_header);
		$this->load->view('templates/sidebar_left');
		$this->load->view('templates/sidebar_right');
		//$this->load->view('templates/menu');
		$this->load->view('pages/events.event.form.php', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
		$this->load->view('pages/events.event.form.js.php');
		$this->load->view('templates/end');
	}
	
	public function editEvent($eventId)
	{
		//$checkAccessRights = checkAccessRights();
			
		$this->load->model('events_model','',TRUE);
		$this->load->library('session');
			
		$data_header = array();
		$data_header["page_header"] = "Edit Event";
		
		$data = array();
		$data["event_data"] = $this->events_model->returnEventData($eventId);
		//$data["locations"] = $this->events_model->returnLocations();
		$data["returnMessage"] = $this->session->flashdata('returnMessage');
			
		$this->load->view('templates/header', $data_header);
		$this->load->view('templates/sidebar_left');
		$this->load->view('templates/sidebar_right');
		//$this->load->view('templates/menu', $data_menu);
		$this->load->view('pages/events.event.form.php', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
		$this->load->view('pages/events.event.form.js.php');
		$this->load->view('templates/end');
	}
	
	public function addEventFlyer($eventId)
	{
		set_time_limit(0);
		ini_set('post_max_size', '128M');
		ini_set('upload_max_filesize', '128M');
			
		//$checkAccessRights = checkAccessRights("ajax");
			
		$this->load->model('events_model','',TRUE);
		$this->load->library('SimpleImage');
			
		//$this->load->library('aws_sdk');
			
			
		//$old_image_path = $this->events_model->returnEventImage($eventId);
			
		/*if($old_image_path != false)
		{
			unlink("media/events/$eventId/$old_image_path");
		}*/
			
		$temp_name = "event_image.jpg";
			
		if(!file_exists("media/events/$eventId"))
		{
			mkdir("media/events/$eventId");
		}
		
		move_uploaded_file($_FILES["image"]["tmp_name"],"media/events/$eventId/$temp_name");
			
		$this->simpleimage->load("media/events/$eventId/$temp_name")->fit_to_height(800)->save("media/events/$eventId/$temp_name");
		//$this->aws_sdk->saveS3Object("assets/temp/event/$temp_name", $new_path . $temp_name);
		//unlink("assets/temp/event/$temp_name");
				
		//$this->events_model->addEventFlyer($eventId, "$temp_name");
			
		echo base_url() . "media/events/$eventId/$temp_name?t=" . time();
	}
	
	public function cropEventFlyer($eventId)
	{
		//$checkAccessRights = checkAccessRights("ajax");
			
		$this->load->model('events_model','',TRUE);
			
		//$this->load->library('aws_sdk');
	
			
		$temp_name = str_replace(".jpg","",$this->events_model->returnEventImage($eventId));
	
		//$this->aws_sdk->downloadS3Object("events/$eventId/$temp_name.jpg", "assets/temp/event/$temp_name.jpg");
			
		list($width, $height) = getimagesize("media/temp/events/$temp_name.jpg");
			
		$multiplier = ($height/330);
	
		$coord_thumb_grid = array();
	
		$coord_thumb_grid["x"] = ($_POST["thumbGrid_x"]*$multiplier);
		$coord_thumb_grid["y"] = ($_POST["thumbGrid_y"]*$multiplier);
		$coord_thumb_grid["width"] = ($_POST["thumbGrid_w"]*$multiplier);
		$coord_thumb_grid["height"] = ($_POST["thumbGrid_h"]*$multiplier);
			
		if($coord_thumb_grid["width"] > 0)
		{
			$old_image_path_grid = $this->events_model->returnEventImageGrid($eventId);
	
			if($old_image_path_grid != false)
			{
				//$this->aws_sdk->deleteS3Object("events/$eventId/" . str_replace(".jpg", "_thumb_grid.jpg", $old_image_path_grid));
				//$this->aws_sdk->deleteS3Object("events/$eventId/" . str_replace(".jpg", "_thumb_grid_small.jpg", $old_image_path_grid));
			}
				
			$image_grid_name = md5($eventId . time());
				
			$thumb_data = array("width"=>"225","height"=>"321");
	
			$image_src = imagecreatefromjpeg("media/temp/events/$temp_name.jpg");
	
			$image_dest = imagecreatetruecolor($thumb_data["width"],$thumb_data["height"]);
			imagecopyresampled($image_dest, $image_src, 0, 0, $coord_thumb_grid["x"], $coord_thumb_grid["y"], $thumb_data["width"], $thumb_data["height"], $coord_thumb_grid["width"], $coord_thumb_grid["height"]);
	
			imagejpeg($image_dest,"assets/temp/event/$image_grid_name". "_thumb_grid.jpg",90);
	
			$this->aws_sdk->saveS3Object("assets/temp/event/$image_grid_name". "_thumb_grid.jpg", "events/$eventId/$image_grid_name". "_thumb_grid.jpg");
			unlink("assets/temp/event/$image_grid_name". "_thumb_grid.jpg");
			unlink("assets/temp/event/$temp_name.jpg");
				
			$this->aws_sdk->setS3Meta("events/$eventId/$image_grid_name". "_thumb_grid.jpg");
	
	
			$this->events_model->addEventFlyerGrid($eventId, $image_grid_name . ".jpg");
	
			imagedestroy($image_src);
			imagedestroy($image_dest);
		}
			
			
		echo "{";
			
		if($coord_thumb_grid["width"] > 0)
		{
			echo "\"thumb_grid\":\"http://media01-siam2nite-com.s3.amazonaws.com/events/$eventId/$image_grid_name" . "_thumb_grid.jpg?t=" . time() . "\"";
		}
			
		echo "}";
			
	}
	
	public function saveEventData($eventId="", $saveClose="")
	{
		//$checkAccessRights = checkAccessRights();
			
		$this->load->model('events_model','',TRUE);
		$this->load->library('session');
			
		if(empty($eventId))
		{
			$eventId = $this->events_model->addEventData();
	
			if(file_exists("media/events/" . $_POST["eventInput_eventId"]))
			{
				rename("media/events/" . $_POST["eventInput_eventId"], "media/events/" . $eventId);
			}
			
			//$eventId = $this->events_model->returnLatestEventId();
			$this->session->set_flashdata('returnMessage', 'successAddMessage');
	
			//if(!empty($saveClose))
			//{
				header("Location: " . base_url('', 'page') . "events");
			//}
			/*else
			{
				header("Location: " . base_url('', 'page') . "events/overview/edit/$eventId");
			}*/
		}
		else
		{
			$this->events_model->updateEventData($eventId);
			$this->session->set_flashdata('returnMessage', 'successEditMessage');
	
			//if(!empty($saveClose))
			//{
				header("Location: " . base_url('', 'page') . "events");
			/*}
			else
			{
				header("Location: " . base_url('', 'page') . "events/overview/edit/$eventId");
			}*/
		}
	}
	
	public function returnLocationList($cityId)
	{
		$checkAccessRights = checkAccessRights("ajax");
			
		$this->load->model('events_model','',TRUE);
			
		$location_name = $_GET["term"];
			
		$data = array();
		$data["locations"] = $this->events_model->returnLocationList($cityId, $location_name);
			
		$this->load->view('pages/events.location.list.ajax.php', $data);
	}
	
	public function removeEvent($eventId)
	{
		$checkAccessRights = checkAccessRights();
			
		$this->load->model('events_model','',TRUE);
			
		$this->events_model->deleteEvent($eventId);
	}
	
}

?>