<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background-image: url('http://localhost/ass/images/evgeny-tchebotarev-aiwuLjLPFnU-unsplash.jpg');
            background-size: cover; 
            margin: 0; 
            padding: 0; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        

        #login1 {
            position: relative; 
            left: 10%;
            backdrop-filter: blur(1px);
            width: 400px;
            height: 400px;
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 10px;
            text-align: center; 
            position: absolute; 
        }

        #login1 form {
    margin-top: 50px; 
    margin-bottom: 20px; 
}

#login1 label {
    margin-bottom: 10px; 
}

#login1 input[type="text"],
#login1 input[type="password"] {
    width: calc(100% - 20px); 
    height: 50px;
    margin-bottom: 10px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#login1 input[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    margin-top: 20px;
    background-color: black;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

        #login1 input[type="submit"]:hover {
            background-color: gray;
        }

        #login1 a {
            text-decoration: none; 
            color: black; 
            font-weight: bold;
        }

        #login1 a:hover {
            color: gray; 
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

<div id="login1">
    <form action="validate.php" method="POST">
        Username: <input type="text" name="user" placeholder="george" required><br>
        Password: <input type="password" name="pass" placeholder="@1234-" required>
        <br>
        <input type="submit" name="submit3" value="Enter">
    </form>
    <a href="signup.php">Sign-up now!</a>
</div>


</body>

</html>
