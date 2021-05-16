<?php   
    $dbc = mysqli_connect('localhost','root', '', 'send_email') 
    or die ('Error connecting to mysql server');

    
    $email = $_POST['email'];
    
    
    $query = "INSERT INTO subscribe (email)". 
    "VALUES('$email')";
    mysqli_query($dbc,$query)
    or die('error querying database');
    echo "You've sucessfully subscribe to our newsletter";

    mysqli_close($dbc);
?>
