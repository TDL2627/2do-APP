<!-- DATABASE CONNECTION -->
<?php
$DB_SERVER ="localhost:3308";
$DB_USERNAME ="TDL2627";
$DB_PASSWORD ="2627";
$DB_NAME ="demo";

$link =mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if (!$link){
    die("CONNECTION FAILED". mysqli_connect_error());
}else{
    echo "connected successfully";
}

?>