<!doctype html>
<html>
<head>
    <title> HTML Encryptor </title>
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="style.css" />
    
</head>
<body>
    <div id="wrapper">
        <h1> HTML Encryptor </h1>
        <p> This HTML encryptor lets you transform your messages, simply by entering the message below. You can then paste in your social media and let your friends decrypt it for fun. </p>
        <hr/>

        <form action="message.php" method="post" >
            <h2 for="message"> Type your message to be encrypted below </h2>
            <textarea rows="10" cols="80" id="message" name="message"></textarea><br/>
            <input type="submit" class="btn green" value="submit" />
        </form>
    </div>
</body>
</html>