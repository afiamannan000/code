<!DOCTYPE html>
<html>
    <head>
        <title>Fly Guys</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="StyleSheetFG.css">
    </head>
    <body>
	    <div class = "header">
            <h1>Log In</h1>
        </div>
		
        <form method="post" action="LogInConnection.php">

            <div class="container">
                <label><b>Email Address:</b></label>
                <br></br>
                <input class="box" type="text" placeholder="Enter Email Address" name="email" required>
                <br></br>

                <label><b>Password:</b></label>
                <br></br>
                <input class="box" type="password" placeholder="Enter Password" name="psw" required>
                <br></br>

                <label>
                    <input type="checkbox" checked="checked"> Remember me
                </label>
                <br></br>

                <input type="submit" name="login" value = "Log In" >
                <br></br>               

                <span class="psw"><a href="https://support.google.com/mail/answer/41078?hl=en">Forgot your password?</a></span>
            </div>
        </form>

        <form action="http://kunet.kingston.ac.uk/k1419859/Home.php">
            <input type="submit" value="Cancel"/>
        </form>

    </body>
</html>
