<?php
if(isset($_POST['email'])){
    $server = "localhost";
    $username = "root";
    $password = "";

	$con = mysqli_connect($server, $username, $password);

	if(!$con){
		die("connection to this database failed due to" .mysqli_connect_error());
	}
	// echo "Success connecting DB";

$email = $_POST['email'];


	$sql = "INSERT INTO `justklothing`.`email` (`Email`) VALUES ('$email');";
	// echo $sql;
	

	if($con->query($sql) == true){
	// echo "Successfully inserted";
	}
	else{
		echo "ERROR: $sql <br> $con->error";
		}

	$con->close();

}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>JustKlothing</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
            <section id="header">
                <a href="#"><img src="img/logo.png" width="20%" height="20%" class="logo"></a>

                <div>
                    <ul id="navebar">
                        <li><a class="active" href="index.html">Home</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="cart.html"><i class="bi bi-bag-fill"></i></a></li>
                        <li><a href="login.html"><i class="bi bi-person-circle"></i></a></li>
                    </ul>
                </div>
            </section>

            <section id="hero">
                <h4>Trade-in-offer</h4>
                <h2>Super value deals</h2>
                <h1>On all products</h1>
                <p>Save more with coupons & up to 70% off! </p>
                <button>Shop Now</button>
            </section>

            <section id="feature" class="section-p1">
                <div class="fe-box">
                    <img src="img/features/f1.png" alt="">
                    <h6>Free Shipping</h6>
                </div>
                <div class="fe-box">
                    <img src="img/features/f2.png" alt="">
                    <h6>Online Order</h6>
                </div>
                <div class="fe-box">
                    <img src="img/features/f3.png" alt="">
                    <h6>Save Money</h6>
                </div>
                <div class="fe-box">
                    <img src="img/features/f4.png" alt="">
                    <h6>Promotions</h6>
                </div>
                <div class="fe-box">
                    <img src="img/features/f5.png" alt="">
                    <h6>Happy Sell</h6>
                </div>
                <div class="fe-box">
                    <img src="img/features/f6.png" alt="">
                    <h6>24/7 Support</h6>
                </div>
            </section>

            <section id="product1" class="section-p1">
                <h2>Featured Products</h2>
                <p>Summer Collection New Morden Design</p>
                <div class="pro-container">
                    <div class="pro">
                        <img src="img/products/f1.jpg" alt="">
                        <div class="des">
                            <span>Adidas</span>
                            <h5>Cartoon Astronaut T-Shirt</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹2000</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/products/f2.jpeg" alt="">
                        <div class="des">
                            <span>H&M</span>
                            <h5>Dark Cat</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹2000</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/products/f3.jpg" alt="">
                        <div class="des">
                            <span>Asos</span>
                            <h5>Relaxed Fit Patterned Resort Shirt</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹1300</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/products/f4.jpg" alt="">
                        <div class="des">
                            <span>	Louis Vuitton</span>
                            <h5>Button Front Floral Print</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹2100</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/products/f5.jpg" alt="">
                        <div class="des">
                            <span>Campus</span>
                            <h5>Floral Print</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹1500</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/products/f6.jpg" alt="">
                        <div class="des">
                            <span>H&M</span>
                            <h5>Color Block Waffle Corduroy </h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹1800</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/products/f7.jpg" alt="">
                        <div class="des">
                            <span>Zara</span>
                            <h5>Pleated Wide Trousers</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹1900</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/products/f8.jpeg" alt="">
                        <div class="des">
                            <span>Zara</span>
                            <h5>Cat Three-Quarter Sleeve Tunic</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹1200</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
            </section>

            <section id="banner" class="section-m1">
                <h4>Repair Services</h4>
                <h2>Up to <span> 70% Off </span> - All t-shirts & Accessories</h2>
                <button class="normal">Explore More</button>
            </section>

            <section id="product1" class="section-p1">
                <h2>New Arrivals</h2>
                <p>Summer Collection New Morden Design</p>
                <div class="pro-container">
                    <div class="pro">
                        <img src="img/products/n1.jpg" alt="">
                        <div class="des">
                            <span>Zara</span>
                            <h5>Creased-Effect Shirt</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹2000</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/products/n2.jpg" alt="">
                        <div class="des">
                            <span>H&M</span>
                            <h5>Aero Zero Carbon Neutral Shirt</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹2000</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/products/n3.jpg" alt="">
                        <div class="des">
                            <span>Asos</span>
                            <h5>Relaxed Fit Patterned Shirt</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹1300</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/products/n4.jpg" alt="">
                        <div class="des">
                            <span>	Louis Vuitton</span>
                            <h5>Button Front Floral Print</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹2100</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/products/n5.jpg" alt="">
                        <div class="des">
                            <span>Campus</span>
                            <h5>Blue Denim</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹1500</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/products/n6.jpg" alt="">
                        <div class="des">
                            <span>H&M</span>
                            <h5>Slim Fit Regular Short</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹1800</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/products/n7.jpg" alt="">
                        <div class="des">
                            <span>Zara</span>
                            <h5>Pleated Wide Trousers</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹1900</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/products/n8.jpg" alt="">
                        <div class="des">
                            <span>Zara</span>
                            <h5>Cat Three-Quarter Sleeve Tunic</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹1200</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
            </section>

            <section id="sm-banner" class="section-p1">
                <div class="banner-box">
                    <h4>Crazy deals</h4>
                    <h2>Buy 1 get 1 free</h2>
                    <span>The best classic dress is on sale at Just Klothing  </span>
                    <button class="white">Learn More</button>
                </div>
                <div class="banner-box banner-box2">
                    <h4>Spring/Summer</h4>
                    <h2>Upcomming season</h2>
                    <span>The best classic dress is on sale at Just Klothing </span>
                    <button class="white">Collection</button>
                </div>
            </section>

            <section id="banner3">
                <div class="banner-box">
                    <h2>SEASONAL SALE</h2>
                    <h3>Winter Collection -50% OFF</h3>
                </div>
                <div class="banner-box banner-box2">
                    <h2>NEW COLLECTION COMMING</h2>
                    <h3>Winter 2023</h3>
                </div>
                <div class="banner-box banner-box3">
                    <h2>Ladies Collection comming soon</h2>
                    <h3>12/2023</h3>
                </div>
            </section>

        <form action="sign.php" method="post">
            <section id="newsletter" class="section-p1 section-m1">
                <div class="newstext">
                    <h4>Sign For Newsletters</h4>
                    <p>Get E-mail updates about our latest shop and <span>special offers.</span> </p>
                </div>
                
                <div class="form">
                    
                    <input type="email" placeholder="Your email address" name="email">
                    <button class="normal">Sign Up</button>
                
                </div>
            </section>
        </form>

        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="img/logo.png"  width="20%" height="20%" alt="">
                <h4>Contact</h4>
                <p><strong>Address:</strong> Fergusson College Road, Shivajinagar, Pune</p>
                <p><strong>Phone:</strong> (+91)9893907727</p>
                <p><strong>Hours:</strong> 10:00-18:00. Mon-Sat</p>
                <div class="follow">
                    <h4>Follow us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-pinterest-p"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4>About</h4>
                <a href="#">About us</a>
                <a href="#">Delivery Information</a>
                <a href="#">Privacy Information</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Contact us</a>
            </div>
            <div class="col">
                <h4>My Account</h4>
                <a href="#">Sign In</a>
                <a href="#">View Cart</a>
                <a href="#">My Wishlist</a>
                <a href="#">Track My Order</a>
                <a href="#">Help</a>
            </div>
            <div class="col install">
                <h4>Install App</h4>
                <p>From App Store or Google Play</p>
                <div class="row">
                    <img src="img/pay/app.jpg" alt="">
                    <img src="img/pay/play.jpg" alt="">
                </div>
                <p>Secured Payment Gateways</p>
                <img src="img/pay/pay.png" alt="">
            </div>
            <div class="copyright">
                <p>©️ 2023, JUST KLOTHING</p>
            </div>
        </footer>






        <script src="script.js"></script>
    </body>

</html>