
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background-image: url('http://localhost/ass/images/joey-banks-YApiWyp0lqo-unsplash.jpg');
            background-size: cover; 
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #login-container {
            width: 300px;
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 10px;
        }

        #login-container input[type="text"],
        #login-container input[type="password"],
        #login-container input[type="tel"],
        #login-container input[type="date"] {
            width: calc(100% - 20px); 
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: black;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        #login-container input[type="submit"]:hover {
            background-color: gray;
        }

        .shop-name {
            background-color: #333;
            color: white !important; 
            text-align: center;
            padding: 10px 0;
            font-size: 24px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .shop-name a {
    text-decoration: none; 
    color: white !important; 
}

       
        .navbar {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            top: 40px; 
            width: 100%;
            z-index: 999;
            text-align: center; 
        }

        .navbar a {
            display: inline-block; 
            color: white;
            text-decoration: none;
            padding: 14px 16px;
            font-size: 20px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        #login-container a {
    display: block;
    text-align: center;
    margin-top: 10px;
    text-decoration: none;
    color: black; 
}

#login-container a:hover {
    text-decoration: underline;
    color: gray;
}


    </style>
</head>

<body>
    <div class="shop-name">
        <a href="index.php">JBC Auto</a>
    </div>

    <div class="navbar" id="navbar">
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="cars.php">Cars</a>
        <a href="contact.php">Contact Us</a>
    </div>

    <div id="login-container">
        <form action="validate.php" method="POST">
            Username: <input type="text" name="user" placeholder="george" required><br>
            Password: <input type="password" name="pass" placeholder="@1234-" required><br>
            Phone Number: <input type="tel" name="phone" placeholder="123-456-789" required><br>
            Birthday: <input type="date" name="bday" required><br>
            <input type="submit" name="submit4" value="Create Account">
        </form>
        
        <a href="login.php">Go back</a>
   
    </div>
</body>

</html>