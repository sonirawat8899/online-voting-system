<html>
    <head>
        <title>Online Voting System</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <center>
        <div id="headersection">
            <h1 id="h1">Online Voting Systems</h1>
        <hr>
        </div>

        <div id="bodySection">
            <form action="api/login.php" method="POST">
                <h3 id="h3" >Login</h3>
                    <input type="text" name="mobile" placeholder="Mobile Number"><br><br>
                    <input type="text" name="password"  placeholder="Password" ><br><br>
              <select name="role" id="dropbox">
              <option value="1">Voter</option><br><br>
              <option value="2">Group</option><br><br>
             </select><br><br>
             <button id="loginbutton" type="submit">Login</button><br><br>
             New User? <a href="routes/register.php">Register Here</a>
            </form>
        </div>
        </center>
    </body>
</html>
