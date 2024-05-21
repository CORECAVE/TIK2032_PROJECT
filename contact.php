<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" a href="cstyle.css">
    <link rel="icon" type="image/x-icon" href="images/KL.png">
</head>

<style>
    .custom-link{
    color: white;
    font-size: 30px;
    text-decoration-line: none;
    text-shadow: 0 5px 8px rgba(0,0,0,0.7);
}

.social-text{
    text-shadow: 0 5px 8px rgba(255,255,255,0.5);
}
</style>
<body>
    <?php 
    if(!empty($_POST["send"])){
        $userName = $_POST["userName"];
        $userEmail = $_POST["userEmail"];
        $userMessage = $_POST["userMessage"];
        $toEmail = "kevintanjaya026@student.unsrat.ac.id";
        
        $mailHeaders= "Name" . $userName . 
        "\r\n Email: " . $userEmail .  
        "\r\n Message: " . $userMessage .  "\r\n";

        ini_set('SMTP', 'localhost');
        ini_set('smtp_port', 25);
        if(mail($toEmail, $userName, $mailHeaders)){

            $message = "Thank You For Contacting";
        }
    }
    ?>
    <div class="header">
        <a href="index.html" class="logo">HomePage</a>
        <div class="header-right">
            <a href="index.html">Home</a>
            <a href="gallery.html">Gallery</a>
            <a href="blog.html">Blog</a>
            <a href="contact.php" class="active">Contact</a>
        </div>
    </div>
    
    <div class="social-container">
    <p style="text-align:center;"><font size="6" class="social-text" color="#E1306C">Instagram: </font><a href="https://www.instagram.com/kvn_jtan/" class="custom-link" target="_blank" rel="noopener">@Kvn_jtan</a></p>
    <p style="text-align:center;"><font size="6" class="social-text" color="#2c0083">Git</font><font size="6" color="white">Hub:</font><a href="https://github.com/CORECAVE" class="custom-link" target="_blank" rel="noopener">CORECAVE</a></p>
    </div>

    <!--EmailForm-->
    
    <div class="form-container">
        <h1 class="text-with-shadow" style="text-align:center;" color="white">Contact Me</h1>
        <form method="post" name="emailContact">
            <div class="input-row">
                <label class="text-with-shadow">Name<em>*</em></label>
                <input type="text" name="userName" required>
            </div>
            <div class="input-row">
                <label class="text-with-shadow">Email<em>*</em></label>
                <input type="email" name="userEmail" required>
            </div>
            <div class="input-row">
                <label class="text-with-shadow">Message<em>*</em></label>
                <textarea name="userMessage" required></textarea>
            </div>
            <div class="input-row">
                <input type="submit" name="send" value="Submit">
                <?php if(!empty($message)){?>
                <div class="success">
                    <strong><?php echo $message; ?></strong>
                </div>
                <?php }?>
            </div>
        </form>
    </div>
</body>
</html>