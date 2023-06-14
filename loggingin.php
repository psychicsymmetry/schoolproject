<html>
    <head>
        <style>
            body,html{
                height:100%;
            }
            #container{
                align-items:center;
                justify-content:center;
                display:flex;
                height:100%;
            }
            #login{
                text-align:center;
            }
        </style>
    </head>
    <body>
        <div id = 'container'>
            <div>
                <div id = 'login'>
                    <h1>Log in to me</h1>
                    <form method = 'post' action = 'loginpage.php'>
                        <label for = 'uname'>Username:</label>
                        <input id = 'uname' type = 'text' name = 'unameAuth'><br><br>
                        <label for = 'pword'>Password:</label>
                        <input id = 'pword' type = 'password' name = 'passAuth'><br><br>
                        <input type = 'submit' value = 'submit'>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>