<?php
include("db.php");

function getVotes($political) {
	global $conn;
	$query = "SELECT count(*) as number_votes FROM vote WHERE political = '$political'";
	$result_votes = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result_votes);
	return $row['number_votes'];
}

function getTotalVotes() {
	global $conn;
	$query = "SELECT count(*) as number_votes FROM vote";
	$result_votes = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result_votes);
	return $row['number_votes'];
}

?>

