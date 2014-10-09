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
function add_efficacy_row($userResponse) {
	global $dbh;
	$query = "INSERT INTO efficacy_scale VALUES (DEFAULT,?,?,?,?,?,?,?,?,?,?,?,?)";
	return $result = prepared_query($dbh, $query, $userResponse);
}

// PROCESS DATA
$user = $_SESSION["user"];
$ip = $_SERVER["REMOTE_ADDR"];

//$ipUsed = filter_var($ip, FILTER_VALIDATE_IP) ? ip_exists($ip) : true; 

if (!empty($_POST)) {
  	$efficacyResponse = getUserResponse($_POST);
	$efficacyResponse = array_merge(array($user), $efficacyResponse);

	// Time stuff
	$start_time = $_SESSION["es_start_time"];
	$es_time = time() - $start_time;
	array_push($efficacyResponse, $es_time);
	$_SESSION['es_time'] = $es_time; //for later
	
	//if (!$ipUsed) {
		add_efficacy_row($efficacyResponse);
		$es_id = mysql_insert_id(); //documented php function

		// Populate the user table
		$get_user = fetch_row(find_user($user));
		
		$update_user = "UPDATE users SET es_id = ? WHERE id = ?";
		prepared_query($dbh, $update_user, array($es_id, $user));
		echo "got to end of if";
		//}
	
	// Redirect user to thank you page
	$header = "Location: http://cs.wellesley.edu/~hcilab/pghci_privacy/PGHCI-Privacy-Study/pretask.php";
   	header($header); //redirects user
	exit();
}
	
?>