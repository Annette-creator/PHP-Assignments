<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login form</title>
        <link rel="stylesheet" href="styling/style.css">
    </head>
    <body>
        <!--Start form-->
        <form action="loginHandler.php" method="POST" target="_blank">
            <div class="form">
                <p>Username*:</p> <input type="text" name="username" required />
                <p>Password*:</p> <input type="password" name="password" required /><br/><br/>
                <input type="submit" value="submit"/>
            </div>
        </form>
        <!--End form-->
    </body>
</html>