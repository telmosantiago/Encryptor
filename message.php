<?php 
//message.php

$message = $_POST['message'];
$encode = array(
    "a" => "u",
    "b" => "z",
    "c" => "x",
    "ç" => "x",
    "d" => "v",
    "e" => "o",
    "é" => "o",
    "è" => "o",
    "f" => "t",
    "g" => "s",
    "h" => "r",
    "i" => "a",
    "ï" => "a",
    "j" => "q",
    "k" => "p",
    "l" => "m",
    "m" => "n",
    "n" => "l",
    "o" => "e",
    "ö" => "e",
    "p" => "k",
    "q" => "j",
    "r" => "h",
    "s" => "g",
    "t" => "f",
    "ü" => "i",
    "u" => "i",
    "v" => "e",
    "x" => "d",
    "y" => "c",
    "z" => "b",
    "A" => "U",
    "B" => "Z",
    "C" => "X",
    "D" => "V",
    "E" => "O",
    "F" => "T",
    "G" => "S",
    "H" => "R",
    "I" => "A",
    "J" => "Q",
    "K" => "P",
    "L" => "M",
    "M" => "N",
    "N" => "L",
    "O" => "E",
    "P" => "K",
    "Q" => "J",
    "R" => "H",
    "S" => "G",
    "T" => "F",
    "U" => "I",
    "V" => "E",
    "X" => "D",
    "Y" => "C",
    "Z" => "B",
);

$output = strtr($message, $encode);
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
        <h2> Your original message </h2>
        <p class="justify"> 
        <?php
        if (!empty($message)){ 
            echo $message;
        } else{
            header('Location: index.php');
        }
        ?> 
        </p>
        
        <h2> Was converted to: </h2>
        <p class="justify"> <?php echo $output; ?> </p>
        <hr/>
        
        <form action="message.php" method="post" >
            <h2 for="message"> Want to try again? </h2>
            <textarea rows="10" cols="80" id="message" name="message"></textarea><br/>
            <input type="submit" class="btn green" value="submit" />
        </form>
    </div>
</body>
</html>



