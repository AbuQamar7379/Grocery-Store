<!DOCTYPE html>
<html lang="en">

<head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="grocery";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "SELECT * FROM product";
$result = $conn->query($sql);


  
    
  


?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Store</title>

    <link rel="shortcut icon" href="png/001-shopping-bag.png" type="image/x-icon">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <!-- header section stars -->

    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> groco </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#features">features</a>
            <a href="#products">products</a>
            <a href="#categories">categories</a>
            <a href="#review">review</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-users" id="login-btn"></div>
        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="shopping-cart">
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-1.png" alt="">
                <div class="content">
                    <h3>watermelon</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-2.png" alt="">
                <div class="content">
                    <h3>onion</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-3.png" alt="">
                <div class="content">
                    <h3>chicken</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="total"> total : $19.69/-</div>
            <a href="#" class="btn">checkout</a>
        </div>

        <form action="" class="login-form">
            <h3>login now</h3>
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">
            <p>forget your password <a href="#">click here</a></p>
            <p>don't have an account <a href="#">create now</a></p>
            <input type="submit" value="login now" class="btn">
        </form>

    </header>

    <!-- header section ends -->


    <!-- home section stars -->

    <section class="home" id="home">

        <div class="content">
            <h3>Natural And <span>organic</span> Health Care Products</h3>
            <p>Grap Grocers Is An Online Groceries Store That Provide 
                Quality Cooking Ingredients At Affordable Price.
            </p>
            <a href="#" class="btn">shop now</a>

        </div>
    </section>

    <!-- home section ends -->


    <!-- features section stars -->

    <section class="features" id="features">
        
        <h1 class="heading"> our <span>features</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/feature-img-1.png" alt="">
                <h3>fresh and organic</h3>
                <p>Fresh and organic products refer to foods that are grown without the use of synthetic fertilizers,
                     pesticides, or genetically modified organisms (GMOs).
                     organic fruits and vegetables tend to contain higher levels of vitamins and minerals,
                      as well as antioxidants.</p>
                <a href="#" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="image/feature-img-2.png" alt="">
                <h3>free delivery</h3>
                <p>Free delivery can be a great way for an online grocery website to attract and retain customers,
                     but it's important to make sure that the cost of delivery is not passed on to the customer in other ways, 
                     such as higher prices for products.</p>
                <a href="#" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="image/feature-img-3.png" alt="">
                <h3>easy payment</h3>
                <p>There are several options for easy payment when it comes to grocery shopping.
                     Many grocery stores and delivery services offer "buy now, pay later" plans
                      that allow customers to break up their bill into smaller payments over time.</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </section>

    <!-- features section ends -->
    
    
    <!-- products section ends -->
    
        <div class="products" id="products">

            <h1 class="heading"> our <span>products</span></h1>

            <div class="swiper product-slider">

                <div class="swiper-wrapper">
                    <?php 
                        while($row = $result->fetch_assoc())
                        {
                            $name=$row["name"];
                            $i=$row["image"];
                    ?>
                    <div class="swiper-slide box">
                        <img src=<?php echo $i?> alt="">
                        <a href="product_details.html"><h3><?php echo $name;?></h3></a>
                        <div class="price"> $4.99/- - 10.99/- </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                    <?php
                        }
                    ?>

                    <div class="swiper-slide box">
                        <img src="image/product-2.png" alt="">
                        <h3>fresh onion</h3>
                        <div class="price"> $4.99/- - 10.99/- </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/product-3.png" alt="">
                        <h3>fresh meat</h3>
                        <div class="price"> $4.99/- - 10.99/- </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/product-4.png" alt="">
                        <h3>Fresh Cabbage</h3>
                        <div class="price"> </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                
                </div>

            </div>

            <div class="swiper product-slider">

                <div class="swiper-wrapper">
                    <div class="swiper-slide box">
                        <img src="image/product-5.png" alt="">
                        <h3>fresh potato</h3>
                        <div class="price"> $4.99/- - 10.99/- </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/product-6.png" alt="">
                        <h3>fresh avocado</h3>
                        <div class="price"> $4.99/- - 10.99/- </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/product-7.png" alt="">
                        <h3>fresh carrot</h3>
                        <div class="price"> $4.99/- - 10.99/- </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/product-8.png" alt="">
                        <h3>green lemon</h3>
                        <div class="price"> $4.99/- - 10.99/- </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
    
                </div>

            </div>

        </div>
    
    <!-- products section ends -->


    <!-- categories section ends -->
    
        <section class="categories" id="categories">

            <h1 class="heading"> product <span>categories</span> </h1>

            <div class="box-container">

                <div class="box">
                    <img src="image/cat-1.png" alt="">
                    <h3>vegetables</h3>
                    <p>upto 45% off</p>
                    <a href="#" class="btn">shop now</a>
                </div>

                <div class="box">
                    <img src="image/cat-2.png" alt="">
                    <h3>fresh fruits</h3>
                    <p>upto 45% off</p>
                    <a href="#" class="btn">shop now</a>
                </div>

                <div class="box">
                    <img src="image/cat-3.png" alt="">
                    <h3>dairy products</h3>
                    <p>upto 45% off</p>
                    <a href="#" class="btn">shop now</a>
                </div>

                <div class="box">
                    <img src="image/cat-4.png" alt="">
                    <h3>fresh meat</h3>
                    <p>upto 45% off</p>
                    <a href="#" class="btn">shop now</a>
                </div>

            </div>

        </section>
    
    <!-- categories section ends -->


    <!-- review section starts -->

        <section class="review" id="review">

            <h1 class="heading"> customer's <span>review</span></h1>

            <div class="swiper review-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide box">
                        <img src="image/pic-1.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia aliquid eos eveniet autem, repellat iusto unde exercitationem, vel libero alias, explicabo atque minus? Accusamus, repudiandae 
                            voluptatum. Labore voluptas ullam voluptate.</p>
                        <h3>john doe</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/pic-2.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia aliquid eos eveniet autem, repellat iusto unde exercitationem, vel libero alias, explicabo atque minus? Accusamus, repudiandae 
                            voluptatum. Labore voluptas ullam voluptate.</p>
                        <h3>john doe</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/pic-3.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia aliquid eos eveniet autem, repellat iusto unde exercitationem, vel libero alias, explicabo atque minus? Accusamus, repudiandae 
                            voluptatum. Labore voluptas ullam voluptate.</p>
                        <h3>john doe</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/pic-4.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia aliquid eos eveniet autem, repellat iusto unde exercitationem, vel libero alias, explicabo atque minus? Accusamus, repudiandae 
                            voluptatum. Labore voluptas ullam voluptate.</p>
                        <h3>john doe</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>

                </div>

            </div>

        </section>

    <!-- review section ends -->


    <!-- blogs section starts -->

        <section class="blogs" id="blogs">
            
            <h1 class="heading"> our <span>blogs</span></h1>

            <div class="box-container">

                <div class="box">
                    <img src="image/blog-1.jpg" alt="">
                    <div class="content">
                        <div class="icons">
                            <a href="#"> <i class="fas fa-user"></i> by user </a>
                            <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                        </div>
                        <h3>fresh and organic vegetables and fruits</h3>
                        <p>There are many different types of vegetables and fruits.
                             Some examples of vegetables include leafy greens, root vegetables, cruciferous vegetables,
                              and nightshade vegetables. Examples of fruits include berries, citrus fruits,
                               tropical fruits, and stone fruits.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="box">
                    <img src="image/blog-2.jpg" alt="">
                    <div class="content">
                        <div class="icons">
                            <a href="#"> <i class="fas fa-user"></i> by user </a>
                            <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                        </div>
                        <h3>fresh and organic vegetables and fruits</h3>
                        <p>Vegetables and fruits are low in calories but high in nutrients.
                             They contain vitamins, minerals, fiber, and antioxidants that help to protect your body from disease
                              and support good health. Eating a variety of vegetables and fruits can help you
                               meet your daily nutritional requirements.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="box">
                    <img src="image/blog-3.jpg" alt="">
                    <div class="content">
                        <div class="icons">
                            <a href="#"> <i class="fas fa-user"></i> by user </a>
                            <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                        </div>
                        <h3>fresh and organic vegetables and fruits</h3>
                        <p>To get the most nutritional value out of your vegetables and fruits, 
                            it's important to store them properly. Keep them in a cool, dry place or in the refrigerator.
                             Avoid storing them near ethylene-producing fruits (such as apples and bananas) 
                             as they can cause other fruits and vegetables to ripen and spoil more quickly.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

            </div>

        </section>

    <!-- blogs section ends -->


    <!-- footer section ends -->

        <section class="footer" id="footer">

            <div class="box-container">

                <div class="box">
                    <h3> groco <i class="fas fa-shopping-basket"></i></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, saepe</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box">
                    <h3>contact info</h3>
                    <a href="#" class="links"> <i class="fas fa-phone"></i> +84-869040236 </a>
                    <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                    <a href="#" class="links"> <i class="fas fa-envelope"></i> anhdungvk01@gmail.com </a>
                    <a href="#" class="links"> <i class="fas fa-map-marked-alt"></i> Bandra (East), BKC, Mumbai </a>
                </div>

                <div class="box">
                    <h3>quick links</h3>
                    <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
                    <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Features </a>
                    <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Products </a>
                    <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Categories </a>
                    <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Review </a>
                    <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Blogs </a>
                </div>

                <div class="box">
                    <h3>newsletter</h3>
                    <p>subscribe for latest updates</p>    
                    <input type="email" placeholder="your email" class="email">
                    <input type="submit" value="subscribe" class="btn">
                    <img src="image/payment.png" alt="" class="payment-img">
                </div>

            </div>


            <div class="credit"> created by <span> Abu Qamar </span> | all rights reseved </div>

        </section>

    <!-- footer section ends -->



    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>
</body>

</html>
