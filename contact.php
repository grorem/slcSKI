<?php
    $name = $_POST['name'];
    $email = $_POST['email'];

    $message = $_POST['message'];

    $username = $_POST['username'];

    $from = 'From: UCG-SLC-SKI website';


    $to = 'gmrorem@gmail.com';
    $subject = 'Question from UCG-SLC-SKI website';

    $body = "From: $name\n\n E-Mail: $email\n\n Message:\n\n $message";

    $SpamErrorMessage = "No Websites or URLs permitted";



    if (preg_match("/http/i", "$name")) {echo "$SpamErrorMessage"; exit();}
     if (preg_match("/http/i", "$email")) {echo "$SpamErrorMessage"; exit();}

    		if (preg_match("/http/i", "$message")) {echo "$SpamErrorMessage"; exit();}


    if ($_POST['submit'])  {

    if (( mail ($body, $from)) && ($to, $subject, $username == "")) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
}




?>
