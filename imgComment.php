<?php
/***********************************************/
/**   database connection and session start   **/
/***********************************************/

session_start();
include("config/config.php");

// Create connection
$conn = new mysqli(SERVER, USER, PASS, DB); 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Change character set to utf8
mysqli_set_charset($conn,"utf8");
		
		$username = $_SESSION['username'];
		$ok = true;
		$postBody = $_POST['commentImg'];
		$postId = $_POST['postId'];

		$escapeBody = mysqli_real_escape_string($conn, $postBody);
		$escapeId = mysqli_real_escape_string($conn, $postId);
		if ($ok == "true") {
			$postDate = date("Y-m-d H:i:s");
			$userId = $_SESSION['userId'];
			$sql = "INSERT INTO img_com (postId, userId, comBody, comDate) VALUES ('".$escapeId."','".$userId."', '".$escapeBody."','".$postDate."')";
			if ($conn->query($sql) !== true) {
				echo "Error: " . $sql . "<br>" . $conn->error . "<br><br>";
			}
 		}
$conn->close();
?>