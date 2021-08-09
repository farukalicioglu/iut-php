<?php
	// $database = "uzunetap_fa";
	// $host = "78.40.228.185";
	// $dbuser = "uzunetap_us";
	// $dbpass = "32378630";
	// $baglan = @mysql_connect($host,$dbuser,$dbpass);
	// if(! $baglan) die ("Mysql Baglantisi Yapilamadi");
	// @mysql_select_db($database,$baglan) or die ("Veri Tabanina Baglanti Yapilamadi");
	// mysql_query("SET NAMES 'utf8'");

	//error_reporting(0);

?>

<?php

//class Conn {
//public static $dbhost = "localhost";
//public static $dbuser = "argosyp_argosyp";
//public static $dbpass = "Aa123456";
//public static $dbname = "argosyp_argosyapi";
//}
 $database = "argosatoly_db1";
 	$host = "localhost";
 	$dbuser = "argosatoly_mfauser1";
 	$dbpass = "ArgosAtolyeMfa323";
// 	$baglan = mysql_connect($host, $dbuser, $dbpass);
// 	//if(! $baglan) die ("Mysql Baglantisi Yapilamadi");
// 	//@mysql_select_db($database,$baglan) or die ("Veri Tabanina Baglanti Yapilamadi");
// 	mysql_query("SET NAMES 'utf8'");

	//error_reporting(0);


	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$mysqli = new mysqli($host, $dbuser, $dbpass, $database);
	$mysqli->set_charset('utf8');

	//printf("Success... %s\n", $mysqli->host_info);

	/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
	//phpinfo();
?>
