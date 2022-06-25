<!DOCTYPE html>
<html>
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
                        <label class="details" >Username</label><br>
                        <input type="email" name="email" required >
                    </div>
                    <div class="input-box">
                        <label class="details" >Password</label><br>
                        <input type="password"  name="password" required>
                    </div>
                    <div class="input-box">
                        <label class="details" >Confirm Password</label><br>
                        <input type="password"  name="confirmpassword" required>
                    </div>
                </div>
                <div class="button"><br> 
                    <input type="submit" name="btnlogin" value="Sign Up"/> 
                </div>  
             <div>
                 <p>Already have an account?  <a href="login.php">Log in</a></p>
             </div>
            </form>
        </div>
         <?php include 'footer.php'?>
    </body>


</html>