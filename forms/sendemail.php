<?php
    $dbc = mysqli_connect('localhost','root', '', 'send_email') 
    or die ('Error connecting to mysql server');

    $from = 'shininglite2012@gmail.com';
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $query = "SELECT * FROM user_details";
    $result = mysqli_query($dbc,$query)
    or die('error querying database');

    // $row = mysqli_fetch_array($result);

    while($row = mysqli_fetch_array($result)) {  
        $full_name = $row['name'];

        $msg = "Dear $full_name,\n $subject\n $message";
        $to = $row ['email'];

        mail($to, $subject, $msg, 'from:' . $from);

        echo('email successfully sent to ' . $to);

    }

    mysqli_close($dbc);
?>