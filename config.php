<!--
Developed by :
######## ##     ## ########    ######## ##     ## #### ########     ###    ##    ##
   ##    ##     ## ##          ##       ##     ##  ##  ##     ##   ## ##   ###   ##
   ##    ##     ## ##          ##       ##     ##  ##  ##     ##  ##   ##  ####  ##
   ##    ######### ######      ######   #########  ##  ##     ## ##     ## ## ## ##
   ##    ##     ## ##          ##       ##     ##  ##  ##     ## ######### ##  ####
   ##    ##     ## ##          ##       ##     ##  ##  ##     ## ##     ## ##   ###
   ##    ##     ## ########    ##       ##     ## #### ########  ##     ## ##    ##
.. The Fhidan ~ me@Fhidan.com ~ Fhidan.com ..
 -->
 <?php
$mysqli = new mysqli("localhost", "root", "", "RUHGVNG");
 if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
if (!mysqli_set_charset($mysqli, "utf8")) {
    printf("Error loading character set utf8: %s\n", mysqli_error($mysqli));
    exit();
}
?>
