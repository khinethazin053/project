<!DOCTYPE html>
<html>
    <head>
        <title>
            Login And Registration Form
        </title>
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="bg"></div>
                    <button type="button" class="top" onclick="login()">Login</button>
                    <button type="button" class="top" onclick="register()">Register</button>
                </div>
                <div class="icon">
                    <img src="fb.jpg">
                    <img src="tw.jpg">
                    <img src="ig.jpg">
                </div>
                <form class="input-group" id="login" method="POST" action="login.php">
                    <input  type="email"     class="input-field"  name="email" placeholder="Enter Email" required>
                    <input  type="password" class="input-field"  name="password" placeholder="Enter password" required>
                    <input  type="checkbox" class="check-box"><span>Remember Password</span>
                    <button type="submit"   class="submit-btn">Login</button>
                </form>
                <form class="input-group" id= "register" action="createuser.php" method="POST">
                    <input type="text" name ="name" class="input-field" placeholder="Enter user name" required>   
                    <input type="email" name="email" class="input-field" placeholder="Enter your email"  required>
                    <input type="password"  name="password" class="input-field" placeholder="Enter password" required>
                    <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
                    <button type="submit" name="submit" class="submit-btn">Register</button>
                </form>
            </div>

        </div>
        <script src="js/script.js"></script>
    </body>
    
    
</html>
