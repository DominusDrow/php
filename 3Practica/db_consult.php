<?php
include("db.php");

function getVotes($party_id){
	global $conn;
	$query = "SELECT count(*) as num FROM votes WHERE party_id = ".$party_id;
	$result_votes = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result_votes);
	return $row['num'];
}

function getTotalVotes() {
	global $conn;
	$query = "SELECT count(*) as number_votes FROM votes";
	$result_votes = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result_votes);
	return $row['number_votes'];
}

?>

