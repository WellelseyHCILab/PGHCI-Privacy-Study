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
function add_pi3_row($userResponse) {
	global $dbh;
	$query = "INSERT INTO privacy_index3 VALUES (DEFAULT,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	return $result = prepared_query($dbh, $query, $userResponse);
}

// PROCESS DATA
$user = $_SESSION["user"];
$ip = $_SERVER["REMOTE_ADDR"];

//$ipUsed = filter_var($ip, FILTER_VALIDATE_IP) ? ip_exists($ip) : true; 

if (!empty($_POST)) {
  	$pi3Response = getUserResponse($_POST);
	$pi3Response = array_merge(array($user), $pi3Response);

	// Time stuff
	$start_time = $_SESSION["pi3_start_time"];
	$pi3_time = time() - $start_time;
	array_push($pi3Response, $pi3_time);
	$_SESSION['pi3_time'] = $pi3_time; //for later
	
	//if (!$ipUsed) {
		add_pi3_row($pi3Response);
		$pi3_id = mysql_insert_id(); //documented php function

		// Populate the user table
		$get_user = fetch_row(find_user($user));
		
		$update_user = "UPDATE users SET pi3_id = ? WHERE id = ?";
		prepared_query($dbh, $update_user, array($pi3_id, $user));
		echo "got to end of if";
		//}
	
	// Redirect user to thank you page
	$header = "Location: http://cs.wellesley.edu/~hcilab/pghci_privacy/PGHCI-Privacy-Study/selfefficacy.php";
   	header($header); //redirects user
	exit();
}
	
?>
