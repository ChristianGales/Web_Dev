<!DOCKTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <title>GoGreen</title>
    <body>
        <?php include 'header.php'?>
        <div class="container">
            <form action="" method="POST">
                <div class="user-details">
                     <div class="input-box">
                        <label class="details" >Email</label><br>
                        <input type="email" name="email" required >
                    </div>
                    <div class="input-box">
                        <label class="details" >Name</label><br>
                        <input type="text"  name="password" required>
                    </div>
                    <div class="input-box">
                        <label class="details" >Message</label><br>
                        <textarea type="text" name="message"></textarea>
                    </div>
                </div>
                <div class="button"><br> 
                    <input type="submit" name="btnlogin" value="Submit"/> 
                </div>  
            </form>
            <div class="image">
                <img src="img/img2.jpg"> 
            </div>
        </div>
       <?php include 'footer.php'?>
    </body>

</html>