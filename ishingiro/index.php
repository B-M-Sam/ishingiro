<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ishingiro Bakery Rwanda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> Ishingiro Bakery </a>
    
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#popular">popular</a>
        <a href="#menu">menu</a>
        <!--<a href="#order">order</a>
        <a href="#blogs">blogs</a>-->
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <div id="cart-btn" class="fas fa-shopping-cart"></div>
        <div id="login-btn" class="fas fa-user"></div>
    </div>
    
</header>

<!-- header section ends  -->

<!-- search-form  -->

<section class="search-form-container">

    <form action="">
        <input type="search" name="" placeholder="Search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</section>

<!-- shopping-cart section  -->

<section class="shopping-cart-container">

    <div class="products-container">

        <h3 class="title">Your Cart</h3>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="image/menu-1.png" alt="">
                <div class="content">
                    <h3>delicious food</h3>
                    <span> quantity : </span>
                    <input type="text" name="" value="1" id="">
                    <br>
                    <span> price : </span>
                    <span class="price"> $40.00 </span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="image/menu-2.png" alt="">
                <div class="content">
                    <h3>delicious food</h3>
                    <span> quantity : </span>
                    <input type="text" name="" value="1" id="">
                    <br>
                    <span> price : </span>
                    <span class="price"> $40.00 </span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="image/menu-3.png" alt="">
                <div class="content">
                    <h3>delicious food</h3>
                    <span> quantity : </span>
                    <input type="text" name="" value="1" id="">
                    <br>
                    <span> price : </span>
                    <span class="price"> $40.00 </span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="image/menu-4.png" alt="">
                <div class="content">
                    <h3>delicious food</h3>
                    <span> quantity : </span>
                    <input type="text" name="" value="1" id="">
                    <br>
                    <span> price : </span>
                    <span class="price"> $40.00 </span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="image/menu-5.png" alt="">
                <div class="content">
                    <h3>delicious food</h3>
                    <span> quantity : </span>
                    <input type="text" name="" value="1" id="">
                    <br>
                    <span> price : </span>
                    <span class="price"> $40.00 </span>
                </div>
            </div>

        </div>

    </div>

    <div class="cart-total">

        <h3 class="title"> Cart Total </h3>

        <div class="box">

            <h3 class="subtotal"> Subtotal : <span>$200</span> </h3>
            <h3 class="total"> Total : <span>$200</span> </h3>

            <a href="#" class="btn">proceed to checkout</a>

        </div>

    </div>

</section>

<!-- login-form  -->

<div class="login-form-container">

    <form action="">
        <h3>login form</h3>
        <input type="email" name="" placeholder="Enter your email" id="" class="box">
        <input type="password" name="" placeholder="Enter your password" id="" class="box">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" value="login now" class="btn">
        <p>forget password? <span id="forgot-btn">click here</span></p>
        <p>don't have an account? <span id="signup-btn">create one</span></p>
    </form>

</div>


<!-- signup form -->

<div class="signup-form-container">

    <form action="">
        <h3>signup form</h3>
        <input type="text" name="names" placeholder="Enter your Name" id="" class="box">
        <input type="text" name="username" placeholder="Enter your username" id="" class="box">
        <input type="email" name="" placeholder="Enter your email" id="" class="box">
        <input type="password" name="" placeholder="Enter your password" id="" class="box">
        
        <input type="submit" value="Sign Up" class="btn">
        <p>have an account? <span id="return-btn">enter yours</span></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span>welcome foodies</span>
        <h3>different spices for the different tastes 😋</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis unde dolores temporibus hic quam debitis tenetur harum nemo.</p>
        <a href="#popular" class="btn">order now</a>
    </div>

    <div class="image">
        <img src="image/home-img.png" alt="" class="home-img">
        <img src="image/home-parallax-img.png" alt="" class="home-parallax-img">
    </div>

</section>

<!-- home section ends  -->

<!-- category section starts  -->

<section class="category">

    <a href="#" class="box">
        <img src="image/cat-1.png" alt="">
        <h3>combo</h3>
    </a>

    <a href="#" class="box">
        <img src="image/cat-2.png" alt="">
        <h3>pizza</h3>
    </a>

    <a href="#" class="box">
        <img src="image/cat-3.png" alt="">
        <h3>burger</h3>
    </a>

    <a href="#" class="box">
        <img src="image/cat-4.png" alt="">
        <h3>chicken</h3>
    </a>

    <a href="#" class="box">
        <img src="image/cat-5.png" alt="">
        <h3>dinner</h3>
    </a>

    <a href="#" class="box">
        <img src="image/cat-6.png" alt="">
        <h3>coffee</h3>
    </a>

</section>

<!-- category section ends -->


<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="image/about-img.png" alt="">
    </div>

    <div class="content">
        <span>why choose us?</span>
        <h3 class="title">what's make our food delicious!</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ut explicabo, numquam iusto est a ipsum assumenda tempore esse corporis?</p>
        <a href="#" class="btn">read more</a>
        <div class="icons-container">
            <div class="icons">
                <img src="image/serv-1.png" alt="">
                <h3>fast delivery</h3>
            </div>  
            <div class="icons">
                <img src="image/serv-2.png" alt="">
                <h3>fresh food</h3>
            </div>   
            <div class="icons">
                <img src="image/serv-3.png" alt="">
                <h3>best quality</h3>
            </div>  
            <div class="icons">
                <img src="image/serv-4.png" alt="">
                <h3>24/7 support</h3>
            </div>           
        </div>
    </div>

</section>

<!-- about section ends -->

<!-- popular section starts  -->

<section class="popular" id="popular">

    <div class="heading">
        <span>popular food</span>
        <h3>our special dishes</h3>
    </div>

    <div class="box-container">

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-1.png" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-2.png" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-3.png" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-4.png" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-5.png" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-6.png" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-7.png" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-8.png" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

    </div>

</section>

<!-- popular section ends -->

<!-- banner section starts  -->

<section class="banner">

    <div class="row-banner">
        <div class="content">
            <span>double cheese</span>
            <h3>burger</h3>
            <p>with cococola and fries</p>
            <a href="#" class="btn">order now</a>
        </div>
    </div>

    <div class="grid-banner">
        <div class="grid">
            <img src="image/banner-1.png" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">order now</a>
            </div>
        </div>
        <div class="grid">
            <img src="image/banner-2.png" alt="">
            <div class="content center">
                <span>special offer</span>
                <h3>upto 25% extra</h3>
                <a href="#" class="btn">order now</a>
            </div>
        </div>
        <div class="grid">        
            <img src="image/banner-3.png" alt="">
            <div class="content">
                <span>limited offer</span>
                <h3>100% cashback</h3>
                <a href="#" class="btn">order now</a>
            </div>
        </div>
    </div>

</section>

<!-- banner section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <div class="heading">
        <span>our menu</span>
        <h3>our top dishes</h3>
    </div>

    <div class="box-container">

        <a href="#" class="box">
            <img src="image/menu-1.png" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="image/menu-2.png" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="image/menu-3.png" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="image/menu-4.png" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="image/menu-5.png" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="image/menu-6.png" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

    </div>

</section>

<!-- menu section ends -->

<!-- order section starts  

<section class="order" id="order">

    <div class="heading">
        <span>order now</span>
        <h3>fastest home delivery</h3>
    </div>

    <div class="icons-container">

        <div class="icons">
            <img src="image/icon-1.png" alt="">
            <h3>7:00am to 10:30pm</h3>
        </div>

        <div class="icons">
            <img src="image/icon-2.png" alt="">
            <h3>+123-456-7890</h3>
        </div>

        <div class="icons">
            <img src="image/icon-3.png" alt="">
            <h3>mumbai, india - 400104</h3>
        </div>

    </div>

    <form action="">

        <div class="flex">
            <div class="inputBox">
                <span>your name</span>
                <input type="text" placeholder="customer's name" name="" id="">
            </div>
            <div class="inputBox">
                <span>your number</span>
                <input type="number" placeholder="customer's number" name="" id="">
            </div>
        </div>

        <div class="flex">
            <div class="inputBox">
                <span>your order</span>
                <input type="text" placeholder="food you want" name="" id="">
            </div>
            <div class="inputBox">
                <span>how much</span>
                <input type="number" placeholder="number or orders" name="" id="">
            </div>
        </div>

        <div class="flex">
            <div class="inputBox">
                <span>your details</span>
                <input type="text" placeholder="your message" name="" id="">
            </div>
            <div class="inputBox">
                <span>pick up time</span>
                <input type="datetime-local">
            </div>
        </div>

        <div class="flex">
            <div class="inputBox">
                <textarea placeholder="your address" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="inputBox">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1634657187694!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <input type="submit" value="proceed to order" class="btn">

    </form>

</section>

 order section ends -->

<!-- blogs section starts 

<section class="blogs" id="blogs">

    <div class="heading">
        <span>our blogs</span>
        <h3>our daily stories</h3>
    </div>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <h3> <i class="fas fa-calendar"></i> 21st may, 2021 </h3>
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="tags">
                    <a href="#"> <i class="fas fa-tag"></i> food / </a>
                    <a href="#"> <i class="fas fa-tag"></i> burger / </a>
                    <a href="#"> <i class="fas fa-tag"></i> pizza  </a>
                </div>
                <h3>blog title goes here...</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, earum.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <h3> <i class="fas fa-calendar"></i> 21st may, 2021 </h3>
                <img src="image/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="tags">
                    <a href="#"> <i class="fas fa-tag"></i> food / </a>
                    <a href="#"> <i class="fas fa-tag"></i> burger / </a>
                    <a href="#"> <i class="fas fa-tag"></i> pizza  </a>
                </div>
                <h3>blog title goes here...</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, earum.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <h3> <i class="fas fa-calendar"></i> 21st may, 2021 </h3>
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="tags">
                    <a href="#"> <i class="fas fa-tag"></i> food / </a>
                    <a href="#"> <i class="fas fa-tag"></i> burger / </a>
                    <a href="#"> <i class="fas fa-tag"></i> pizza  </a>
                </div>
                <h3>blog title goes here...</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, earum.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="newsletter">
        <h3>newsletter</h3>
        <form action="">
            <input type="email" name="" placeholder="Enter your email" id="">
            <input type="submit" value="subscribe">
        </form>
    </div>

    <div class="box-container">

        <div class="box">
            <h3>our menu</h3>
            <a href="#"><i class="fas fa-arrow-right"></i> pizza</a>
            <a href="#"><i class="fas fa-arrow-right"></i> burger</a>
            <a href="#"><i class="fas fa-arrow-right"></i> chicken</a>
            <a href="#"><i class="fas fa-arrow-right"></i> pasta</a>
            <a href="#"><i class="fas fa-arrow-right"></i> and more...</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> home</a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> about</a>
            <a href="#popular"> <i class="fas fa-arrow-right"></i> popular</a>
            <a href="#menu"> <i class="fas fa-arrow-right"></i> menu</a>
            <a href="#order"> <i class="fas fa-arrow-right"></i> order</a>
            <a href="#blogs"> <i class="fas fa-arrow-right"></i> blogs</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> my order</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> my account</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> my favorite</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> terms of use</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> privary policy</a>
        </div>

        <div class="box">
            <h3>opening hours</h3>
            <p>monday : 7:00am to 10:00pm</p>
            <p>tuesday : 7:00am to 10:00pm</p>
            <p>wednesday : 7:00am to 10:00pm</p>
            <p>friday : 7:00am to 10:00pm</p>
            <p>saturday and sunday closed</p>
        </div>

    </div>

    <div class="bottom">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="credit"> &copy; 2022 - 23 all rights reserved. Powered by <span>Lunar Tights Group</span></div>
        
    </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>