<?php 
//message.php

$message = $_POST['message'];
$encode = array(
    "a" => "u",
    "b" => "z",
    "c" => "y",
    "d" => "x",
    "e" => "v",
    "é" => "v",
    "è" => "v",
    "f" => "t",
    "g" => "s",
    "h" => "r",
    "i" => "a",
    "ï" => "a",
    "j" => "q",
    "k" => "p",
    "l" => "n",
    "m" => "m",
    "n" => "l",
    "o" => "e",
    "ö" => "e",
    "p" => "k",
    "q" => "i",
    "r" => "j",
    "s" => "h",
    "t" => "g",
    "u" => "i",
    "v" => "f",
    "x" => "d",
    "y" => "c",
    "z" => "b"
);

$output = strtr(strtolower($message), $encode);
?>

<html>
<head>
    <title> Your Encrypted Message </title>
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div id="wrapper">
        <h1> HTML Encryptor </h1>
        <p> This HTML encryptor lets you transform your messages, simply by entering the message below. You can then paste in your social media and let your friends decrypt it for fun. </p>
        <hr/>
        <h2> Your encrypted message is: </h2>
        <p> <?php echo $output; ?> </p>
        <hr/>
        
        <form action="message.php" method="post" >
            <h2 for="message"> Want to try again? </h2>
            <textarea rows="10" cols="80" id="message" name="message"></textarea><br/>
            <input type="submit" class="btn green" value="submit" />
        </form>
    </div>
</body>
</html>



