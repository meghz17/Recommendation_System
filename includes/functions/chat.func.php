<?php

	function get_msg() {
		
		$query = "SELECT `Sender`, `Message` FROM `recommender_sys`.`chat` ORDER BY `Msg_ID` DESC";
		
		$run = mysql_query($query);
		
		$messages = array();
		
		while($message = mysql_fetch_assoc($run)) {
			$messages[] = array('sender'=>$message['Sender'],
								'message'=>$message['Message']);
		}
		
		return $messages;
		
	}
	
	function send_msg($sender, $message) {
		
		if(!empty($sender) && !empty($message)) {
			
			$sender 	= mysql_real_escape_string($sender);
			$message 	= mysql_real_escape_string($message);
			
			$query = "INSERT INTO `recommender_sys`.`chat` VALUES (null, '{$sender}', '$message')";
			
			if($run = mysql_query($query)) {
				return true;
			} else {
				return false;
			}
			
		} else {
			return false;
		}
	}

?>
