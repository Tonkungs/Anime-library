<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?php

	ini_set('display_errors', 1);
	error_reporting(~0);

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "animery";
   $DateResultNow=date("Y-m-d H:i:s", mktime(date("H")+6));
   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  //mysqli_query("SET collation_connection = utf8_general_ci");
   mysqli_query($conn,"SET NAMES UTF8");
	if (mysqli_connect_errno())
	{
		echo "Database Connect Failed : " . mysqli_connect_error();
	}
	else
	{
		//echo "Database Connected.";
	}
	//mysqli_close($conn);
	$salt = "aB1cD2eF3G";
?>
