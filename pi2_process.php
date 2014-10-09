e<!--
Joanna Bi
Wellesley HCI PGP
SUMMER 2014
-->

<?php
session_start();
error_reporting(E_ERROR);
require_once('pgp_functions.php');
$dbh;
localConn();

/* HELPER FUNCTIONS */

//Insert new user response from pretask page
function add_pi2_row($userResponse) {
	global $dbh;
	$query = "INSERT INTO privacy_index2 VALUES (DEFAULT,?,?,?,?,?,?,?,?)";
	return $result = prepared_query($dbh, $query, $userResponse);
}
/*
// Return demographic id
function find_pi2_row($pi2_id) {
	global $dbh;
	$query = "SELECT * FROM privacy_index2 WHERE dem_id=?";
	return $result = prepared_query($dbh, $query, array($pi2_id));
}
*/
// PROCESS DATA
$user = $_SESSION["user"];
$ip = $_SERVER["REMOTE_ADDR"];

//$ipUsed = filter_var($ip, FILTER_VALIDATE_IP) ? ip_exists($ip) : true; 

if (!empty($_POST)) {
  	$pi2Response = getUserResponse($_POST);
	$pi2Response = array_merge(array($user), $pi2Response);

	// Time stuff
	$start_time = $_SESSION["pi2_start_time"];
	$pi2_time = time() - $start_time;
	array_push($pi2Response, $pi2_time);
	$_SESSION['pi2_time'] = $pi2_time; //for later
	
	//if (!$ipUsed) {
		add_pi2_row($pi2Response);
		$pi2_id = mysql_insert_id(); //documented php function

		// Populate the user table
		$get_user = fetch_row(find_user($user));
		//$get_pi2 = fetch_row(find_pi2_row($user['pi2_id']));
		
		$update_user = "UPDATE users SET pi2_id = ? WHERE id = ?";
		prepared_query($dbh, $update_user, array($pi2_id, $user));
		echo "got to end of if";
		//}
	
	// Redirect user to thank you page
	$header = "Location: http://cs.wellesley.edu/~hcilab/pghci_privacy/PGHCI-Privacy-Study/privacyindex3.php";
   	header($header); //redirects user
	exit();
}
	
?>
