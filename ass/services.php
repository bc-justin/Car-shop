<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>JBC Auto Services</title>
    <style>
        body {
    background-color: #333;
    margin: 0;
    padding-bottom: 0; 
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
            text-decoration: none; 
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
            font-size: 20px; 
            font-family: Arial, sans-serif; 
        }

        .navbar a {
            display: inline-block;
            color: white;
            text-decoration: none;
            padding: 14px 16px;
            vertical-align: middle;
            font-size: inherit; 
            font-family: inherit; 
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .login-btn {
            background-color: #333; 
            display: inline-block;
            margin-left: auto; 
            padding: 14px 16px;
            font-size: 20px; 
            vertical-align: middle; 
        }

        .login-btn form {
            margin: 0; 
        }
        .login-btn input[type="submit"] {
            background-color: transparent;
            color: white; 
            border: none;
            cursor: pointer;
            font-size: 20px;
        }
        .login-btn input[type="submit"]:hover {
            background-color: #ddd;
            color: black;
        }

        section {
            background-color: black;
            text-align: center;
            padding-top: 150px; 
            padding-bottom: 150px; 
            flex-wrap: wrap;
            display: flex;
            align-items: center; 
            justify-content: center; 
            min-height: calc(100vh - 250px); 
        }
        section div {
            width: 30%;
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff; 
            text-align: left; 
        }
        section h2 {
            color: #333; 
            margin-bottom: 10px; 
        }
        section p {
            color: #666; 
            margin-bottom: 20px; 
        }
        section button {
            background-color: #333;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 16px; 
        }
        section button:hover {
            background-color: #555;
        }

        .footer-distributed {
            background: #666;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 55px 50px;
           
            bottom: 0;
            left: 0;
        }
        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: inline-block;
            vertical-align: top;
        }
        .footer-distributed .footer-left {
            width: 40%;
        }
        .footer-distributed .footer-center {
            width: 35%;
        }
        .footer-distributed .footer-right {
            width: 20%;
        }
        .footer-distributed h3 {
            color: #ffffff;
            font: normal 36px 'Open Sans', cursive;
            margin: 0;
        }
        .footer-distributed h3 span {
            color: lightseagreen;
        }
        .footer-distributed .footer-links {
            color: #ffffff;
            margin: 20px 0 12px;
            padding: 0;
        }
        .footer-distributed .footer-links a {
            display: inline-block;
            line-height: 1.8;
            font-weight: 400;
            text-decoration: none;
            color: inherit;
        }
        .footer-distributed .footer-company-name {
            color: #222;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }
        .footer-distributed .footer-center i {
            background-color: #33383b;
            color: #ffffff;
            font-size: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
        }
        .footer-distributed .footer-center p {
            display: inline-block;
            color: #ffffff;
            font-weight: 400;
            vertical-align: middle;
            margin: 0;
        }
        .footer-distributed .footer-center p span {
            display: block;
            font-weight: normal;
            font-size: 14px;
            line-height: 2;
        }
        .footer-distributed .footer-center p a {
            color: lightseagreen;
            text-decoration: none;
        }
        .footer-distributed .footer-links a:before {
            content: "|";
            font-weight: 300;
            font-size: 20px; left: 0;
            color: #fff;
            display: inline-block;
            padding-right: 5px;
        }
        .footer-distributed .footer-links .link-1:before {
            content: none;
        }
        .footer-distributed .footer-company-about {
            line-height: 20px;
            color: #92999f;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }
        .footer-distributed .footer-company-about span {
            display: block;
            color: #ffffff;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .footer-distributed .footer-icons {
            margin-top: 25px;
        }
        .footer-distributed .footer-icons a {
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color: #33383b;
            border-radius: 2px;
            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;
            margin-right: 3px;
            margin-bottom: 5px;
        }

        @media (max-width: 880px) {
            .footer-distributed {
                font: bold 14px sans-serif;
            }
            .footer-distributed .footer-left,
            .footer-distributed .footer-center,
            .footer-distributed .footer-right {
                display: block;
                width: 100%;
                margin-bottom: 40px;
                text-align: center;
            }
            .footer-distributed .footer-center i {
                margin-left: 0;
            }
        }
        .footer-center {
            width: 35%;
        }
        .footer-center .footer-email-form {
            margin-top: 20px;
        }
        .footer-center .footer-email-form form {
            display: flex;
            align-items: center; 
        }
        .footer-center .footer-email-form input[type="email"] {
            width: 70%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px 0 0 4px;
            margin-right: 5px; 
        }
        .footer-center .footer-email-form input[type="submit"] {
            width: 25%; 
            height: 35px;
            background-color: #333; 
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 0 4px 4px 0;
        }
        .footer-center .footer-email-form input[type="submit"]:hover {
            background-color: #555; 
        }
        @media (max-width: 768px) {
            section div {
                width: 90%; 
            }
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
        <div class="login-btn">
            <form action="login.php">
                <input type="submit" name="submit" value="Login">
            </form>
        </div>
    </div>

    <section id="services">
        <?php 
        $matrix = array("","Our experienced technicians meticulously inspect every aspect of your vehicle, from the engine and transmission to the brakes, suspension, and electrical systems. We use state-of-the-art diagnostic equipment to detect any underlying problems and provide you with a detailed report of our findings.<br><br>
        Price: Quote Upon Request", "we are committed to providing top-notch car repair services that prioritize your vehicle's safety, performance, and longevity. Our team of skilled technicians utilizes state-of-the-art diagnostic equipment and genuine replacement parts to deliver precise and reliable repairs. From routine maintenance to complex repairs, trust us to keep your vehicle running smoothly on the road. <br><br>
        Price: Quote Upon Request", "Our comprehensive maintenance services are tailored to meet your vehicle's specific needs, from oil changes and tire rotations to fluid checks and filter replacements. With our skilled technicians and commitment to quality, you can trust us to keep your car running smoothly and reliably mile after mile. Experience peace of mind and superior service with JBC auto. <br><br>
        Price: Quote Upon Request");
        $services = array("","Car Wash", "Car Repair", "Car Maintenance");
        for($i=1;$i<4;$i++){ ?>
<div>
            <h2><?php echo $services[$i] ?></h2>
            <button onclick="toggleInfo('service<?php echo $i ?>')">More Info</button>
            <p id="service<?php echo $i ?>" style="display: none;"> <?php echo $matrix[$i] ?>
            </p>
        </div>
<?php
        }
        ?>
        
        
        
    </section>

    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>Company<span>logo</span></h3>
            <p class="footer-links">
                <a href="index.php" class="link-1">Home</a>
                <a href="services.php">Services</a>
                <a href="cars.php">Cars</a>
                <a href="contact.php">Contact Us</a>
                <a href="login.php">Login</a>
            </p>
            <p class="footer-company-name">JBC auto © 2023</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Beirut</span> Lebanon</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+961 123 456</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">JBC.auto@gmail.com</a></p>
            </div>
            <div class="footer-email-form">
                <form action="validate.php" method="POST">
                    receive news :<input type="email" name="mailsub" placeholder="Email" required>
                    <input type="submit" name="submitdaily" value="Enter">
                </form>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                <p>At JBC Auto, we are more than just a car shop; we're automotive enthusiasts dedicated to providing top-notch service, expertise, and quality products to our valued customers.</p>
            </p>
            <div class="footer-icons">
                <a href="#" class='bx bxl-facebook-circle'></a>
                <a href="#" class='bx bxl-instagram'></a>
                <a href="#" class='bx bxl-linkedin-square'></a>
                <a href="#" class='bx bxl-twitter'></a>
            </div>
        </div>
    </footer>

    <script>
        function toggleInfo(serviceId) {
            var info = document.getElementById(serviceId);
            if (info.style.display === "none") {
                info.style.display = "block";
            } else {
                info.style.display = "none";
            }
        }
    </script>
</body>
</html>