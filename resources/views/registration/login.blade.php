<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login Page </title>
<style>
    /* Global styles */
    body {
        font-family: Calibri, Helvetica, sans-serif;
        background-color: pink;
    }

    .global-button {
        background-color: #4CAF50;
        width: 100%;
        color: orange;
        padding: 15px;
        margin: 10px 0px;
        border: none;
        cursor: pointer;
    }

    .global-form {
        border: 3px solid #f1f1f1;
    }

    .global-input {
        width: 100%;
        margin: 8px 0;
        padding: 12px 20px;
        display: inline-block;
        border: 2px solid green;
        box-sizing: border-box;
    }

    .global-button:hover {
        opacity: 0.7;
    }

    .global-cancelbtn {
        width: auto;
        padding: 10px 18px;
        margin: 10px 5px;
    }

    .global-container {
        padding: 25px;
        background-color: lightblue;
    }

    /* Header styles */
    header {
        background-color: orange;
        position: fixed;
        left: 0;
        right: 0;
        top: 5px;
        height: 30px;
        display: flex;
        align-items: center;
        box-shadow: 0 0 25px 0 black;
    }

    header * {
        display: inline;
    }

    header li {
        margin: 20px;
    }

    header li a {
        color: blue;
        text-decoration: none;
    }
</style>

</head>
<body>
    <header style="background-color: orange; position: fixed; left: 0; right: 0; top: 5px; height: 30px; display: flex; align-items: center; box-shadow: 0 0 25px 0 black;">
        <nav>
            <ul style="display: inline;">
                <li style="margin: 20px;"><a href="{{'/'}}" style="color: blue; text-decoration: none;"> Home </a></li>
                <li style="margin: 20px;"><a href="{{'/registration/register'}}" style="color: blue; text-decoration: none;"> Register </a></li>
                <li style="margin: 20px;"><a href="{{'/product/create'}}" style="color: blue; text-decoration: none;"> Create Form </a></li>
                <li style="margin: 20px;"><a href="{{'/registration/login'}}" style="color: blue; text-decoration: none;"> Login </a></li>
                <li style="margin: 20px;"><a href="{{'/viewing'}}" style="color: blue; text-decoration: none;"> View Data </a></li>
            </ul>
        </nav>
    </header>
<br>
    <center> <h1> Student Login Form </h1> </center>
    <form class="global-form">
        <div class="global-container">
            <label>Username : </label>
            <input class="global-input" type="text" placeholder="Enter Username" name="username" required>
            <label>Password : </label>
            <input class="global-input" type="password" placeholder="Enter Password" name="password" required>
            <button class="global-button" type="submit">Login</button>
            <input type="checkbox" checked="checked"> Remember me
            <button class="global-cancelbtn" type="button">Cancel</button>
            Forgot <a href="#">password?</a>
        </div>
    </form>
</body>
</html>
