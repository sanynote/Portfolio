<?php

	# 01) 초기화 링크 설정

	include "00_conn.php";


	$userid = $_POST['userid'];
	$userpass = $_POST['userpass'];
	$username = $_POST['username'];
	$useremail = $_POST['useremail'];

	// echo "넘어오는 정보 확인하기 : ".$userid." / ".$userpass." / ".$username." / ".$useremail."<br/>";

	
	if( !empty($userid) && !empty($userpass) && !empty($username) && !empty($useremail)){
		
		$sql = "INSERT INTO lushmems (userid, userpass, username, useremail) 
		VALUES
		('$userid', '$userpass', '$username', '$useremail')";
		
		mysqli_query($conn, $sql);

		echo "<p style='text-align:center; color:blue;'>회원가입에 성공했습니다.</p>";
		echo "<meta http-equiv='Refresh' content='1; url=index.php'/>";
		
	}

	else{
		echo "<p style='text-align:center; color:red;'>회원가입에 실패했습니다.</p>";
	}

?>