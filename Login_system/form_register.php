<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register form</title>
        <link rel="stylesheet" href="styling/style.css">
    </head>
    <body>
        <!--Start form-->
        <form action="formHandler.php" method="POST" target="_blank">
            <div class="form">
                <p>Name *:</p> <input type="text" name="name" required/>
                <p>Email *:</p> <input type="text" name="email" required/>
                <p>Username:</p> <input type="text" name="username"/>
                <p>Password:</p> <input type="password" name="password"/><br/><br/>
                <?php 
                    //get role (admin of user)
                    $db_handle = DBConnect::getInstance();
                    $rol = new Role($db_handle);
                    $rol->getRole();
                ?>
                <input type="submit"/>
            </div>
        </form>
        <!--End form-->
    </body>
</html>