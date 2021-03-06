<!--
Joanna Bi
Wellesley HCI PGP
FALL 2014
-->

<!-- Input user visualization response into database -->

<?php
session_start();
error_reporting(E_ERROR);

require_once('pgp_functions.php');
$dbh;
localConn(); //establish connection

/* HELPER FUNCTIONS */

// Add row to NEW_VIS table
function add_vis_row($userResponse) {
	global $dbh;
	$query = "INSERT INTO visQ VALUES (DEFAULT,?,?,?,?,?,?)";
	return $result = prepared_query($dbh, $query, $userResponse);
}
/*
// Return pretask id
function find_vis_row($pre_id) {
	global $dbh;
	$query = "SELECT * FROM NEW_PRETASK WHERE pretask_id=?";
	return $result = prepared_query($dbh, $query, array($pre_id));
}
*/
// PROCESS DATA
$type = $_SESSION["vis"];
$user = $_SESSION["user"];
$ip = $_SERVER["REMOTE_ADDR"];

// Filter out used ip's
//$ipUsed = filter_var($ip, FILTER_VALIDATE_IP) ? ip_exists($ip) : true; //more concise 'if' clause

// Update data
if (!empty($_POST)) {

	// Time stuff
	$start_time = $_SESSION["vis_start_time"];
	$vis_time = time() - $start_time;
	$_SESSION['vis_time'] = $vis_time; //for later

        // Fix array length for prepared query
	$userResponse = array_merge(array($type), getUserResponse($_POST));
	echo count($userResponse) . "<br>";
	array_pop($userResponse); //I DON'T NEED THIS FOR ANYTHING ELSE???? I DON'T UNDERSTAND??????
	$userResponse = array_merge(array($user), $userResponse);
	echo count($userResponse) . "<br>";
	$userResponse = array_merge($userResponse, array($vis_time));
	echo count($userResponse);

	//if(!$ipUsed) {
		add_vis_row($userResponse); //adds new response to vis table

		// Update time spent
		$vis_id = mysql_insert_id(); //documented php function

		// Populate the user table
		//$get_user = fetch_row(find_user($user));
		//$get_pretask = fetch_row(find_pretask_row($user["pretask_id"]));

		//$vis_type = $type . "_id";
		$update_user = "UPDATE users SET vis_id  = ? WHERE id = ?";
		prepared_query($dbh, $update_user, array($vis_id, $user));
		//}

	// Redirect user to demographics page
	$header = "Location: http://cs.wellesley.edu/~hcilab/pghci_privacy/PGHCI-Privacy-Study/pgp_consentTask.php";
   	header($header); //redirects user
	exit();
}

//session_destroy();