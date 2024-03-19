<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('http://localhost/ass/images/zachary-edmundson-YoBx_5o1PbM-unsplash.jpg');
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        .shop-name {
            background-color: #333;
            background-size: cover;
            color: white;
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
            color: white;
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

        #login3 {
            width: 300px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-top: 140px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
        }

        #login3 input[type="text"],
        #login3 input[type="email"],
        #login3 input[type="submit"],
        #login3 textarea {
            width: calc(100% - 40px);
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
            background-color: black; 
            color: white; 
        }

        #login3 textarea {
            resize: vertical;
        }

        #login3 input[type="submit"] {
            background-color: black;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #login3 input[type="submit"]:hover {
            background-color: gray;
        }

        .navbar a:last-child {
            margin-right: 10px;
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
        <a id="login-button" href="login.php">Login</a>
    </div>

    <div id="login3">
        <form action="thank.html" method="POST">
            <input type="text" name="user1" placeholder="Username" required><br>
            <input type="email" name="mail" placeholder="E-mail" required><br>
            <textarea name="msg" placeholder="Message" rows="4" required></textarea><br>
            <input type="submit" name="submit5" value="Send Message">
        </form>
    </div>

</body>

</html>
