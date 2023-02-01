<?php

 //if statement to ceck if we submitted te contatc form, isset() is a built in function,we use($_POST) to ceck for a post metod called submit(name of te button in d tml)
// Get actual data the user wrote in the input and store in a variable
$name = $_POST['name']; 
$subject = $_POST['subject'];
$clientmail = $_POST['mail'];
$message = $_POST['message'];

$receiver = "daviderivon@gmail.com";
$mailheader = "From: ".$name."<".$clientmail.">\r\n";



// Prepare a php function called mail
// 3 Params
// 1st - Email we want to send a mail to
// 2nd - Subject of the mail
// 3rd - Message of the mail

mail($receiver, $subject, $message, $mailheader)
or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>rivondave.dev | Contact </title>
</head>
<body>
    <main>
       <h1>Thank you for contacting me!</h1>
       <p class="back">Back to <a href="index.html"> page </a></p>
    </main>
</body>
</html>


';
?>