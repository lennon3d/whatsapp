<?php
class Helpers {
	var $senders;
	
	function Helpers() {
		
	}
	
	/**
	 * Get Senders
	 */
	function getSenders($id = NULL) {
		$senders = array();
		$query = "SELECT * FROM `api_config`";
		if ($id != NULL) {
			$query.=" WHERE id=".$id." ";
		}
		$sql = mysql_query($query);
		while ($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {
			array_push($senders,$row);
		}		
		return $senders;
	}
	
	/**
	 * Print Mysql to HTML
	 */
	function printMysqlDataToHtml($query, $class) {
		// Fetch Record from Database
		
		$output = "<table class='".$class."' >";
		$sql = mysql_query($query);
		$columns_total = mysql_num_fields($sql);
		
		$output .= "<thead><tr>";
		// Get The Field Name
		for ($i = 0; $i < $columns_total; $i++) {
			$heading = mysql_field_name($sql, $i);
			$output .= "<th>".$heading."</th>";
		}
		$output .= "</tr></thead>";
		// Get Records from the table
		while ($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {
			$output .= "<tr><td>".join("</td><td>", $row)."</td></tr>";
		}
		$output .="</table>";
		return $output;
	}
	
	/**
	 * Save Data
	 */
	function saveSenderInList($param) {
		$query = "INSERT INTO `whatsapp`.`api_config`  VALUES (NULL, '".$param[mobile]."', '".$param[smscode]."', '".$param[password]."', 'active', CURRENT_TIMESTAMP);";
		$sql = mysql_query($query);
	}
}
$helpers = new Helpers();