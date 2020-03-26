<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Contact Form Detail</h1>

<?php
    print_r($_POST);    

    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $message = $_POST["message"];

    //save into a file
    $myfile = fopen("$firstname.txt", "w") or die("Unable to open file!");
    $txt = "Firstname :" . $firstname . "\nLastname : " . $lastname . "\nEmail : " . $email . "\nGender : " . $gender . "\nMessage : " . $message;
    fwrite($myfile, $txt);
    echo fread($myfile,filesize("$firstname.txt"));
    fclose($myfile);
?>

</body>
</html>