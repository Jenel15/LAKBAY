<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LAKBAY</title>

   
    <link rel="stylesheet" href="../css/style.css">
    </head>
<body>

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo"><span>LAKBAY</span></a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#products">Places</a>
        <a href="#review">Review</a>

        <?php
            echo "<a href='profile.php'>Hello, " . $_SESSION['usersuid'] . "!</a>";
            echo '<a href="./home.php">Logout</a>';
        ?>
    </nav>


</header>

<section class="home" id="home">

    <div class="content">
        <h3></h3>
        <span> LAKBAY </span>
        <p>Where Every Place make people happy </p>
        <a href="#products" class="btn">Travel Now</a>
    </div>

</section>


<section class="about" id="about">

    <h1 class="heading"> <span> about </span> us </h1>

    <div class="row">

        <div class="video-container">
            <video src="../images/about-vid.mp4" loop autoplay muted></video>
            <h3>Best Places</h3>
        </div>

        <div class="content">
            <h3>Why choose us?</h3>
<p> What truly sets us apart is our unwavering commitment to your satisfaction. Our 24/7 customer support is always ready to assist you, and we offer competitive prices and exclusive deals to save you money while you explore the world. Choose our travel website, and you're not just a traveler; you're part of a community that values your journey and strives to make it enjoyable and hassle-free. Join us today for unforgettable adventures, where your travel needs take center stage.</p>
            <a href="#review" class="btn">learn more</a>
        </div>

    </div>

</section> 

<section class="icons-container">

    <div class="icons">
        <img src="../images/icon-1.png" alt="">
        <div class="info">
            <h3>free booking</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="../images/icon-2.png" alt="">
        <div class="info">
            <h3>30 days returns</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="../images/icon-3.png" alt="">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="../images/icon-4.png" alt="">
        <div class="info">
            <h3>secure paymens</h3>
            <span>protected by Gcash</span>
        </div>
    </div>

</section>



<section class="products" id="products">

    <h1 class="heading"> Popular <span>Places</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="../imahe/poctoy.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="../cities.php" class="cart-btn">Visit Us</a>
                    <a href="../cities.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Poctoy White Beach</h3>
                
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../imahe/maniwaya.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="../cities.php" class="cart-btn">Visit Us</a>
                    <a href="../cities.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Maniwaya Island</h3>
                
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../imahe/tres.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="../cities.php" class="cart-btn">Visit Us</a>
                    <a href="../cities.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Tres Reyes Island</h3>
                
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../imahe/malbog.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="../cities.php" class="cart-btn">Visit Us</a>
                    <a href="../cities.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Malbog Hotspring</h3>
                
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../imahe/luzon.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="../cities.php" class="cart-btn">Visit Us</a>
                    <a href="../cities.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>luzon Datum</h3>
                
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../imahe/paadjao.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="../cities.php" class="cart-btn">Visit Us</a>
                    <a href="../cities.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Paadjao Falls</h3>
                
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../imahe/ungab.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="../cities.php" class="cart-btn">Visit Us</a>
                    <a href="../cities.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Ungab Rock Formation</h3>
                
            </div>
        </div>

</section>



<section class="review" id="review">

<h1 class="heading"> customer's <span>review</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Excellent destinations! </p>
        <div class="user">
            <img src="../imahe/lebron.james.jpg" alt="atharva pfp">
            <div class="user-info">
                <h3>Lebron</h3>
                <span>James</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Thanks to LAKBAY!</p>
        <div class="user">
            <img src="../imahe/kobe.jpg" alt="Yash pfp">
            <div class="user-info">
                <h3>Kobe</h3>
                <span>Bryant</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Fantastic destinations, Thanks a lot LAKBAY!</p>
        <div class="user">
            <img src="../imahe/michael.jpg" alt="Tejas pfp">
            <div class="user-info">
                <h3>Michael</h3>
                <span>Jordan</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

</div>

</section>


<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="../imahe/airplane3.jpg" alt="">
        </div>

    </div>

</section>


<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#">Home</a>
            <a href="#">About </a>
            <a href="#">Places</a>
            <a href="#">Review</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">My account</a>
            <a href="#">My List</a>
            <a href="#">My favorite</a>
        </div>

        <div class="box">
            <h3>Popular Travel Locations</h3>
            <a href="#">Torrijos White Beach</a>
            <a href="#">Maniwaya Island</a>
            <a href="#">Malbog Hot Spring</a>
            <a href="#">Tres Reyes Island</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
    
        </div>


    </div>

</section>



</body>
</html>