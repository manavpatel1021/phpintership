<!-- small form using div and table -->
<html>
    <head>
        <title>registration form</title>
    </head>
    <style>
        body{
            margin-top: 50px;
            text-align: center;
            position: center;
        }
        table{
            margin-left: 480px;
            
        }
        div{
            background: cyan;
            font-size: 25px;
            padding: 16px;
            width: auto;
           
        }
        a{
            color:black;
            margin: 10px;
        }
    </style>
    <body>
        <form>
            <div>
                <a href="#">Home</a>
                <a href="#">Contact us</a>
            </div>
            <h1>Registration form</h1>
            <table>
                <tr>
                    <td>first name :-</td>
                    <td><input type="text" name="fname" placeholder="first name" required></td>
                </tr>
                <tr>
                    <td>last name :-</td>
                    <td><input type="text" name="lname" placeholder="last name" required></td>
                </tr>
                <tr>
                    <td>email :-</td>
                    <td><input type="email" name="mail id" placeholder="abc@xyz.com",required></td>
                </tr>
                <tr>
                    <td>password :-</td>
                    <td><input type="password" name="password" placeholder="password" required></td>
                </tr>
                <tr>
                    <td><button name="submit">submit</button></td>
                    <td><button name="reset">reset</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>