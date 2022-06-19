<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Sign Up</title>
</head>
<body>
	<div class="signup-container">
            <div class="signup">
                <h2 class="heading">Sign Up</h2>
            <form action="process.php" method="post">
                <input type="text" name="username" placeholder="Full Name" class="username-container">
                <br>
                <input type="email" name="email" placeholder="Email" class="email-container">
                <br>
                <input type="password" name="password" placeholder="Password" class="password-container">
                <br>
                <input type="password" name="conpassword" placeholder="Confirm Password" class="password-container">
                <br>
                
                <div class="submit-container">
                    <a href=""><input type="submit" name="submit" value="Sign Up" class="submit-btn"></a>
                </div>
                
                
            </form>
            </div>
            
        </div>
</body>
</html>