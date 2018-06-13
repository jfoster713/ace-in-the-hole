<?php
    
    $to = "jeremy.braun@pcc.edu";
    $from = "jeremybraun@jeremybraun.webhostingforstudents.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $comment = $_POST['comment'];
    $subject = "Comment/Question Form Submission";
    $message = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "I'm a/n: " . $role . "\n" . "Message: " . $comment;
    $headers = "From:" . $email;
    
    mail($to,$subject,$message,$headers)


?>

<html>
    
    <head>
        
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8">

    <meta name="author" content="Jeremy Braun">

    <title>Message Sent | Ace in the Hole Multisport Events</title>

    <link href="css/reset.css" rel="stylesheet" type="text/css">

    <link href="css/generic.css" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Muli|Source+Sans+Pro" rel="stylesheet">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="css/grid.css" rel="stylesheet" type="text/css">

    <link href="css/style.css" rel="stylesheet" type="text/css">
        
    </head>
    
    <body>
        
    <main>
        
    <h2>Your message has been sent!</h2>
        
    <p><a class="return" href="index.html">Return to Home</a></p>
        
    </main>
        
    </body>
    
</html>