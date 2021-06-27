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


if(isset($_POST['on'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "SELECT *FROM combine WHERE 1 ; ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO `combine` (on_value) VALUES (1);";
    $result = mysqli_query($connection, $my_query);
	 
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}else if(isset($_POST['off'])) 
{ 
    echo "<br>";

    $my_query = "";

    $my_query = "select * from combine WHERE 1; ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO `combine` (Off_value) VALUES (1);";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
}


$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$v3 = $_POST['v3'];
$v4 = $_POST['v4'];
$v5 = $_POST['v5'];
$v6 = $_POST['v6'];

if(isset($_POST['go'])){

    $my_query = "";

    $my_query = "select * from combine WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO `combine`(`Engine1`, `Engine2`, `Engine3`, `Engine4`, `Engine5`, `Engine6`, `ON`, `OFF`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8]);";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}


if(isset($_POST['left'])){
    $my_query = "select * from combine WHERE 1; ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine (left_dir) VALUES (1);";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
    

}

if(isset($_POST['right'])){
    $my_query = "select * from combine WHERE 1; ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine (right_dir) VALUES (1);";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

    
}


if(isset($_POST['forward'])){

    $my_query = "select * from combine WHERE 1 ;";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine (forward_dir) VALUES (1);";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

    
}

if(isset($_POST['backward'])){
    $my_query = "select * from combine WHERE 1; ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine(backward_dir) VALUES (1);";
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
