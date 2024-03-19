<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Car Shop</title>
<link rel="stylesheet" href="style.css">
<style>
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
            vertical-align: middle; 
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .login-btn {
            display: inline-block; 
            vertical-align: middle; 
            margin-left: auto; 
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

        .slideshow-container {
            position: relative;
            max-width: 100%;
            overflow: hidden;
        }

        .slides {
            display: flex;
        }

        .slide {
            min-width: 100%;
            position: relative;
        }

        .slide img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            z-index: 1;
        }

        .prev {
            left: 0;
            border-radius: 3px 0 0 3px;
        }

        .next {
            right: 0;
            border-radius: 0 3px 3px 0;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .car-info {
            position: absolute;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            text-align: center;
        }

        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  font-family: Open Sans;
}

section {
  width: 100%;
  display: inline-block;
  background: #333;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}

.footer-distributed{
	background: #666;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

.footer-distributed .footer-left{
	width: 40%;
}

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
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

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  lightseagreen;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
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
    background-color: #333; 
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 0 4px 4px 0;
}

.footer-center .footer-email-form input[type="submit"]:hover {
    background-color: #555; 
}


    </style>
</head>
<body>
<div class="shop-name">
    <a href="index.php">JBC Auto</a>
</div>

<div class="navbar" id="navbar">
    <a href="#index.php">Home</a>
    <a href="services.php">Services</a>
    <a href="cars.php">Cars</a>
    <a href="contact.php">Contact Us</a>
    <div class="login-btn">
        <form action="login.php">
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</div>

<div class="slideshow-container">
    <div class="slides">
        <div class="slide">
            <img src="http://localhost/ass/images/campbell-3ZUsNJhi_Ik-unsplash.jpg" alt="Image 1">
            <div class="car-info">
                <h2>Porsche Panamera Turbo</h2>
                <p>Athletic, streamlined, with clear contours and powerful muscles. The long wheelbase, shorter overhang at the front and longer overhang at the rear already lend visual dynamism. The prominent sculpting of the side profile creates the customary Porsche waistline and sense of lightness. Panamera Executive.</p>
            </div>
        </div>
        <div class="slide">
            <img src="http://localhost/ass/images/joey-banks-YApiWyp0lqo-unsplash.jpg" alt="Image 2">
            <div class="car-info">
                <h2>Mustang</h2>
                <p>As one of the most widely recognized vehicles the world has ever seen, the Ford Mustang is much more than just a car, it's an iconic American brand.</p>
            </div>
        </div>
        <div class="slide">
            <img src="http://localhost/ass/images/evgeny-tchebotarev-aiwuLjLPFnU-unsplash.jpg" alt="Image 3">
            <div class="car-info">
                <h2>Audi R8</h2>
                <p>Inspired by the audacious Audi Le Mans quattro concept car, the Audi R8 merged jaw dropping design and racing pedigree—a guaranteed formula creating an unforgettable legacy.</p>
            </div>
        </div>
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>


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

                    <a href="#"  class='bx bxl-facebook-circle' ></a>
					<a href="#" class='bx bxl-instagram'></a>
                    <a href="#" class='bx bxl-linkedin-square' ></a>
                    <a href="#"class='bx bxl-twitter' ></a>
				</div>

			</div>

		</footer>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slide");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
    }
</script>

</body>
</html>

