<!--
Joanna Bi
Wellesley HCI PGP
FALL 2014
-->

<?php
session_start();
error_reporting(E_ERROR);
require_once('pgp_functions.php');
$dbh;
localConn();

// HELPER FUNCTION: Insert new user response from pretask page
function add_pi1_row($userResponse) {
	global $dbh;
	$query = "INSERT INTO privacy_index1 VALUES (DEFAULT,?,?,?,?,?,?)";
	return $result = prepared_query($dbh, $query, $userResponse);
}

// PROCESS DATA
$id = $_SESSION["user"];
$ip = $_SERVER["REMOTE_ADDR"]; //documented PHP var

if (!empty($_POST)) {
	$pi1Response = getUserResponse($_POST);
	$pi1Response = array_merge(array($id), $pretaskResponse); //fix array
	
	// Time stuff
	$start_time = $_SESSION["pi1_start_time"];
	$pi1_time = time() - $start_time;
	array_push($pretaskResponse, $pi1_time);
	$_SESSION['pi1_time'] = $pi1_time; //for later

	// Filter out used ip's
	//$ipUsed = filter_var($ip, FILTER_VALIDATE_IP) ? ip_exists($ip) : true; //more concise 'if' clause

	//if (!$ipUsed) {
		add_pi1_row($pi1Response);
		$pi1_id = mysql_insert_id(); //documented php function; grabs just submitted pretask id
		$add_user = "INSERT INTO NEW_USER VALUES (?,?,?,?,?,?,?,?,?,?,?)";
		prepared_query($dbh, $add_user, array($id,$pretask_id,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL));
		//}

	// Redirect user to a random visualization
	$header = "Location: http://cs.wellesley.edu/~hcilab/pghci_privacy/PGHCI-Privacy-Study/privacyindex2.php";
	header($header); //redirects user
	exit();
}
	
?>