<?php   
    $dbc = mysqli_connect('localhost','root', '', 'send_email') 
    or die ('Error connecting to mysql server');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $query = "INSERT INTO user_details(name,email,subject,message)". 
    "VALUES('$name','$email','$subject', '$message')";
    mysqli_query($dbc,$query)
    or die('error querying database');
    echo 'Message sucessfully sent';

    mysqli_close($dbc);
?>
