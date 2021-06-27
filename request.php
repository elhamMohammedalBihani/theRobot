<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'combine';


$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;

$sql = mysqli_query($connection, "SELECT * FROM combinel ORDER BY id DESC LIMIT 1;");

$print_data = mysqli_fetch_row($sql);


echo "RECORDING THE LAST DATA...";
echo "<br>";
echo "<br>";
echo "id = ".$print_data[0];
echo "<br>";
echo "The Direction is  ";
if($print_data[1]){
    echo $print_data[1];
}else if($print_data[2]){
    echo $print_data[2];
}else if($print_data[3]){
    echo $print_data[3];
}else if($print_data[4]){
    echo $print_data[4];
}else if($print_data[5]){
    echo $print_data[5];
}

?>
