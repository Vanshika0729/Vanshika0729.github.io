<html>
    <head>
        <title>Response Page</title>
    </head>
    <body>
        <?php
            echo "<p>Responses</p>";
        ?>
        <a href="Register.php"> Click here to Register
		<form action="register.php" method="POST">
           Enter First_name: <input type="text" 
           name="First_name" required="required" /> <br/>
           Enter Second_name: <input type="text" 
           name="Second_name" required="required" /> <br/>
           Enter Email-ID: <input type="text" 
           name="Email-ID" required="required" /> <br/>
		   Enter Subject: <input type="text" 
           name="Subject" required="required" /> <br/>
		   Enter Message: <input type="text" 
           name="Message" required="required" /> <br/>
        </form>
    </body>
</html> 