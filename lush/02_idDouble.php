<?php
	
	include "00_conn.php";

	$q = $_REQUEST['q'];
	
	# echo "넘어온 정보 확인하기 : ".$q;
	
	
	$sql = "SELECT * FROM lushmems WHERE userid='$q' ";
	$result = mysqli_query($conn, $sql);

	
	# 한줄씩 읽어주기!
	$row = mysqli_fetch_array($result);
	

	$row['userid'] = isset($row['userid']) ? $row['userid'] : 'no';

	if($row['userid'] == $q){
		echo "<strong style='color:red;'>중복된 아이디, 사용 불가능</strong>";
	}
	else{
		echo "<strong style='color:blue'>사용 가능한 아이디</strong>";
	}

?>