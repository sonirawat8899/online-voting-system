<html>
    <head>
        <title>Online Voting System - Registration</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <style>
        #address{
            width: 29%;
            
        }
        #imagepart {
        border: 2px solid black;
        border-radius: 5px;
        padding: 10px;
        width: 30%;

    }

    #role {
        border: 2px solid black;
        border-radius: 5px;
        padding: 10px;
        width: 30%;
    }
    #role select{
        border-radius: 5px;
        padding: 10px;

                  
        }
        </style>
    <body>
    <center>
        <h1>Online Voting System</h1>
        <hr>
        
        <h3>Registration</h3>
        <form action="../api/register.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Enter Name">
            <input type="number" name="mobile" placeholder="Enter Mobile"><br><br>
            <input type="password" name="password" placeholder="Password">
            <input type="cpassword" name="cpassword" placeholder="Confirm Password"><br><br>
            <input id="address" type="text" name="address" placeholder="Address"><br><br>
          
                <div id="imagepart">
                    Upload images:<input type="file" name="photo" placeholder="photo"> <br><br>
    
                </div> <br>
                <div id="role">
                    Select your role:<select name="role">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select>
                </div>
          <br>
            <button 
            style= "padding: 10px;
            margin:15px;
            border-radius: 5px;
            background-color:crimson;
            color:white;">
            Register</button><br><br>
            Already user? <a href="../index.php">Login Here</a>
        </form>
    </center>
    </body>
</html>