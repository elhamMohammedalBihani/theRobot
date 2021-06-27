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


if(isset($_POST['forward'])){

    $my_query = "select * from combine WHERE 1; ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine (forward_dir) VALUES ('forward');";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['right'])){

    $my_query = "select * from combine WHERE 1; ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine (right_dir) VALUES ('right');";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['left'])){

    $my_query = "select * from combine WHERE 1 ;";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine (left_dir) VALUES ('left');";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['stop'])){

    $my_query = "select * from combine WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine (stop_dir) VALUES ('stop');";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['backward'])){

    $my_query = "select * from combine WHERE 1 ;";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine (backward_dir) VALUES ('backward');";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}

?>
