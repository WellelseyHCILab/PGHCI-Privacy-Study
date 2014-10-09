<!--
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
function add_privacyQ_row($userResponse) {
	global $dbh;
	$query = "INSERT INTO privacyQ VALUES (DEFAULT,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	return $result = prepared_query($dbh, $query, $userResponse);
}

// PROCESS DATA
$user = $_SESSION["user"];
$ip = $_SERVER["REMOTE_ADDR"];

//$ipUsed = filter_var($ip, FILTER_VALIDATE_IP) ? ip_exists($ip) : true; 

if (!empty($_POST)) {
  	$privacyResponse = getUserResponse($_POST);
	echo count($privacyResponse);
	array_pop($privacyResponse);//remove submit
	echo count($privacyResponse);
	$privacyResponse = array_merge(array($user), $privacyResponse);

	// Time stuff
	$start_time = $_SESSION["privacy_start_time"];
	$privacy_time = time() - $start_time;
	array_push($privacyResponse, $privacy_time);
	$_SESSION['privacy_time'] = $privacy_time; //for later
	
	//if (!$ipUsed) {
	echo count($privacyResponse);
		add_privacyQ_row($privacyResponse);
		$privacy_id = mysql_insert_id(); //documented php function

		// Populate the user table
		//$get_user = fetch_row(find_user($user)); //why do i need this?
		
		$update_user = "UPDATE users SET privacy_id = ? WHERE id = ?";
		prepared_query($dbh, $update_user, array($privacy_id, $user));
		echo "got to end of if";
		//}
	
	// Redirect user to thank you page
	$header = "Location: http://cs.wellesley.edu/~hcilab/pghci_privacy/PGHCI-Privacy-Study/demographics.php";
   	header($header); //redirects user
	exit();
}
	
?>