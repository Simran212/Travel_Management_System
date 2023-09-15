<?php 
session_start();
include './inc/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <title>Tour & Travel Agengy Website</title>
</head>
<body>
    
    <!-- header section starts -->
<header>

    <div id="menu-bar" class="fa fa-bars"></div>

    <a href="#" class="logo"><span>T</span>ravel</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <i class="fa fa-search" id="search-btn"></i>
        <i class="fa fa-user" id="login-btn"></i>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here....">
        <label for="search-bar" class="fa fa-search"></label>
    </form>

</header>
    <!-- header section ends -->

    <!-- login form container -->

    <div class="login-form-container">

        <i class="fa fa-times" id="form-close"></i>

        <form action="./inc/process.php" method="post">
            <h3>login</h3>
            <input type="text" name="uName" class="box" placeholder="enter your username"> 
            <input type="password" name="password" class="box" placeholder="enter your password"> 
            <input type="submit" value="login now" class="btn"> 
            <p>don't have an account?<a href="./register.php" class="register-link">register now</a></p>
        </form>

    </div>

    <!-- home section starts -->

    <section class="home" id="home">

        <div class="content">
            <h3>adventure is worthwhile</h3>
            <p>discover new places with us, adventure awaits</p>
            <a href="#" class="btn">discover more</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
            <span class="vid-btn" data-src="images/vid-2.mp4"></span>
            <span class="vid-btn" data-src="images/vid-3.mp4"></span>
            <span class="vid-btn" data-src="images/vid-4.mp4"></span>
            <span class="vid-btn" data-src="images/vid-5.mp4"></span>
        </div>

        <div class="video-container">
            <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>


    </section>


    <!-- home section ends -->

    <!-- book section starts -->

    <!-- <section class="book" id="book">
        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/book-img.svg" alt="">
            </div>

            <form action="bookingProcess.php" method="post"> 
                <div class="inputBox">
                    <h3>where to</h3>
                    <input type="text" placeholder="place name" name="place" id="place">
                </div>
                <div class="inputBox">
                    <h3>Name</h3>
                    <input type="text" placeholder="Enter your name" name="uName" id="uName">
                </div>
                <div class="inputBox">
                    <h3>Email</h3>
                    <input type="email" placeholder="Enter your email" name="email" id="email">
                </div>
                <div class="inputBox">
                    <h3>Contact No.</h3>
                    <input type="number" placeholder="Enter your contact number" name="num" id="num">
                </div>
                <div class="inputBox">
                    <h3>how many</h3>
                    <input type="number" placeholder="number of guests" name="members" id="members">
                </div>
                <div class="inputBox">
                    <h3>arrivals</h3>
                    <input type="date" name="arrivals" id="arrivals">
                </div>
                <div class="inputBox">
                    <h3>leaving</h3>
                    <input type="date" name="leaving" id="leaving">
                </div>

                <input type="submit" class="btn" value="book now">
            </form>

        </div>

    </section> -->

    <!-- book section ends -->

    <!-- packages section starts -->

    <section class="packages" id="packages">
        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>
        
        <div class="box-container">
        <?php
            $sql = "select * from packages";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
        
        ?>
            <div class="box">
                <img src="images/<?php echo $row['p_image'];?>" alt="">
                <div class="content">
                    <h3> <i class="fa fa-map-marker"></i> <?php echo $row['pName'];?> </h3>
                    <p><?php echo $row['p_desc'];?></p>
                    
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="price"> <?php echo $row['pCost'];?></div>
                    <a href="login.php?pid=<?php echo $row['pId']; ?>" class="btn">book now</a>
                </div>
            </div>

          
            <?php } }?>
        </div>
    </section>

    <!-- packages section ends -->

    <!-- services section starts -->

    <section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fa fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut porro quas 
                velit. In fuga voluptatem nulla, nihil itaque sunt officiis?</p>
            </div>
            <div class="box">
                <i class="fa fa-cutlery" aria-hidden="true"></i>
                <h3>food and drinks</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut porro quas 
                velit. In fuga voluptatem nulla, nihil itaque sunt officiis?</p>
            </div>
            <div class="box">
                <i class="fa fa-bullhorn"></i>
                <h3>safety guide</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut porro quas 
                velit. In fuga voluptatem nulla, nihil itaque sunt officiis?</p>
            </div>
            <div class="box">
                <i class="fa fa-globe"></i>
                <h3>around the world</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut porro quas 
                velit. In fuga voluptatem nulla, nihil itaque sunt officiis?</p>
            </div>
            <div class="box">
                <i class="fa fa-plane"></i>
                <h3>fastest travel</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut porro quas 
                velit. In fuga voluptatem nulla, nihil itaque sunt officiis?</p>
            </div>
            <div class="box">
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <h3>adventures</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut porro quas 
                velit. In fuga voluptatem nulla, nihil itaque sunt officiis?</p>
            </div>

        </div>


    </section>


    <!-- services section ends -->

    <!-- gallery section starts -->

    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="box-container">
            <div class="box">
                <img src="images/g-1.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, ad.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, ad.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, ad.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, ad.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, ad.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, ad.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, ad.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, ad.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-9.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, ad.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->

    <!-- review section starts -->

    <section class="review" id="review">

        <h1 class="heading">
            <!-- <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span> -->
            <?php 
                $rev = "<span>r</span>
                <span>e</span>
                <span>v</span>
                <span>i</span>
                <span>e</span>
                <span>w</span>";
                echo $rev;
            ?>
        </h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic1.png" alt="">
                        <h3>john deo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum 
                        illo,odit laboriosam praesentium fuga est harum culpa maxime possimus, 
                        quo vel nemo reprehenderit provident inventore. Veritatis totam ad 
                        ea veniam.</p>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic2.png" alt="">
                        <h3>john deo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum 
                        illo,odit laboriosam praesentium fuga est harum culpa maxime possimus, 
                        quo vel nemo reprehenderit provident inventore. Veritatis totam ad 
                        ea veniam.</p>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic3.png" alt="">
                        <h3>john deo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum 
                        illo,odit laboriosam praesentium fuga est harum culpa maxime possimus, 
                        quo vel nemo reprehenderit provident inventore. Veritatis totam ad 
                        ea veniam.</p>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic4.png" alt="">
                        <h3>john deo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum 
                        illo,odit laboriosam praesentium fuga est harum culpa maxime possimus, 
                        quo vel nemo reprehenderit provident inventore. Veritatis totam ad 
                        ea veniam.</p>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts -->

    <section class="contact" id="contact">
        
        <h1 class="heading">
            <!-- <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span> -->
            <?php
                $cont = "<span>C</span>
                        <span>O</span>
                        <span>N</span>
                        <span>T</span>
                        <span>A</span>
                        <span>C</span>
                        <span>T</span>";
                echo $cont;
            ?>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/contact-img.svg" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="text" placeholder="subject">
                </div>
                <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">
            </form>

        </div>


    </section>

    <!-- contact section ends -->

    <!-- brand section -->

    <section class="brand-container">

        <div class="swiper brand-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
            </div>

        </div>

    </section>

    <!-- footer section -->

    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h3>about us</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam autem optio 
                atque quisquam explicabo ratione sed aliquid facere, omnis mollitia.</p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#">india</a>
                <a href="#">USA</a>
                <a href="#">japan</a>
                <a href="#">france</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#home">home</a>
                <a href="#book">book</a>
                <a href="#packages">packages</a>
                <a href="#services">services</a>
                <a href="#gallery">gallery</a>
                <a href="#review">review</a>
                <a href="#contact">contact</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebbok</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a>
            </div>

        </div>c

        <h1 class="credit"> created by <span> ms. web designer </span> ! all rights reserved </h1>

    </section>



            
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="app.js"></script>
</body>
</html>