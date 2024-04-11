<?php
session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .category-item {
            width: 200px; 
            height: 200px; 
            position: relative;
            margin: 10px;
        }
    
        .category-item img {
            width: 100%; 
            height: 100%;
            border-radius: 10px; 
            transition: opacity 0.3s; 
        }
    
        .cuisine-type {
            position: absolute; 
            top: 0; /* Adjusted to top */
            left: 50%; 
            transform: translateX(-50%); 
            background-color: rgba(0, 0, 0, 0.7); 
            color: white; 
            padding: 5px; 
            border-radius: 5px; 
            opacity: 0; 
            transition: opacity 0.3s; 
        }
    
        .category-item:hover .cuisine-type {
            opacity: 1; 
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Food Fantasy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/welcome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <!-- Check if the user is logged in -->
            <?php if(isset($_SESSION['username'])): ?>
                <!-- Display username in navbar -->
                <li class="nav-item">
                    <span class="navbar-text" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif"><?php echo $_SESSION['username']; ?></span>
                </li>
                <!-- Add logout button -->
                <li class="nav-item">
                    <a class="nav-link" href="/index.html">Logout</a>
                </li>
            <?php else: ?>
                <!-- Add login and registration links if user is not logged in -->
                <li class="nav-item">
                    <a class="nav-link" href="/login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/signup.php">Register</a>
                </li>
            <?php endif; ?>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/image1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/image2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/image3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--welcome space-->
    <div class="jumbotron text-center">
        <h1>Welcome to Food Fantasy!</h1>
        <p>Order your favorite food online and get it delivered to your doorstep.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Order Now</a>
    </div>

    <!--what do we offer section-->
    <div class="jumbotron black-jumbotron">
        <div class="container">
            <div class="row">
                <h1>What Do We Offer For You ?</h1>
            </div>
            <div class="row">
                <span style="color: #aaaaaa; font-size: 18px;" data-ori-style="color: #aaaaaa; font-size: 18px;">
                    Food Fantasy caters to the taste buds of Luminaries as well as Food Lovers.
                </span>
            </div>
            <div class="row">
                <div class="col-md-6 offer-item">
                    <img src="https://elchico.in/wp-content/uploads/2018/05/tea-cup.png" alt="Offer 1">
                    <div>
                        <h3>Tasty Food</h3>
                        <p>Delicious Deliveries</p>
                    </div>
                </div>
                <div class="col-md-6 offer-item">
                    <img src="https://elchico.in/wp-content/uploads/2018/05/coffee-machine.png" alt="Offer 2">
                    <div>
                        <h3>Range of Bevarages</h3>
                        <p>Comforatable and Faster</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offer-item">
                    <img src="https://elchico.in/wp-content/uploads/2018/05/coffee-beans.png" alt="Offer 3">
                    <div>
                        <h3>Culinary Expertise</h3>
                        <p>Skills and Inventive</p>
                    </div>
                </div>
                <div class="col-md-6 offer-item">
                    <img src="https://elchico.in/wp-content/uploads/2018/05/coffee-beans-1.png" alt="Offer 4">
                    <div>
                        <h3>Hygiene and Cleanliness</h3>
                        <p>No primary defects</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offer-item">
                    <img src="https://elchico.in/wp-content/uploads/2018/05/cake.png" alt="Offer 5">
                    <div>
                        <h3>Cake services</h3>
                        <p>For all your celebrations</p>
                    </div>
                </div>
                <div class="col-md-6 offer-item">
                    <img src="https://elchico.in/wp-content/uploads/2018/05/chocolate.png" alt="Offer 6">
                    <div>
                        <h3>Coffee and Tea</h3>
                        <p>Solution for every craving</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--text-->
    <div class="jumbotron text-center">
        <h1>Quick Deliveries with seamless real-time tracking</h1>
        <p>Track your oders every minute until it reaches your door step.</p>
    </div>




    <!--what's on your mind section-->
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>What's on your mind ?</h1>
                <p>
                    Explore our star-studded line up of culinary delight.
                </p>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="images/biryani.jpg.jpg" class="card-img-top" alt="Food Item 1">
                    <div class="card-body">
                        <h5 class="card-title">Hyderabadi Biryani</h5>
                        <p class="card-text">Savor the rich flavors and aromatic spices of our authentic Hyderabadi
                            Biryani - everyone's favourite.</p>
                        <a href="#" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card paneer">
                    <img src="https://media.istockphoto.com/id/1372980784/photo/tomato-pasta.jpg?s=612x612&w=0&k=20&c=53uJNDM90mrHnh5TQInxiB-Zzp3yQg2wryMdSX6ZWPk="
                        class="card-img-top" alt="Food Item 1">
                    <div class="card-body">
                        <h5 class="card-title">Alfredo</h5>
                        <p class="card-text">Indulge in creamy decadence with our Alfredo pasta, a timeless classic
                            perfected for your palate.</p>
                        <a href="#" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://images.pexels.com/photos/1633525/pexels-photo-1633525.jpeg?auto=compress&cs=tinysrgb&w=600"
                        class="card-img-top" alt="Food Item 1">
                    <div class="card-body">
                        <h5 class="card-title">Special Sandwich</h5>
                        <p class="card-text">Savor the perfect harmony of flavors in our delectable sandwiches, crafted
                            to delight with every bite.</p>
                        <a href="#" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://media.istockphoto.com/id/1474367242/photo/paneer-lababdar.jpg?s=612x612&w=0&k=20&c=GbbcbWHw9hodGcRzXL1tYzEF4SnIRmaijNjFDiPNli0="
                        class="card-img-top" alt="Food Item 1">
                    <div class="card-body">
                        <h5 class="card-title">Kadhai Paneer</h5>
                        <p class="card-text"> tantalizing blend of spices in our Kadhai Paneer, a savory delight sure to
                            captivate your taste buds.</p>
                        <a href="#" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--explore categories-->
    <div class="container explore">
        <h2 class="mt-5 text-center">Available Cuisines</h2>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-around align-items-center">
                        <div class="category-item">
                            <img src="https://media.istockphoto.com/id/1443601641/photo/assorted-south-indian-food-mutton-brain-masala-chicken-tangdi-chicken-reshmi-tikka-chicken.jpg?s=612x612&w=0&k=20&c=zCa01Uqy5WFDCBb345mXzp4o2_JTIrc8NNAWST0FOfY="
                                alt="">
                            <div class="cuisine-type">North Indian</div>
                        </div>
                        <div class="category-item">
                            <img src="https://media.istockphoto.com/id/1292563627/photo/assorted-south-indian-breakfast-foods-on-wooden-background-ghee-dosa-uttappam-medhu-vada.jpg?s=612x612&w=0&k=20&c=HvuYT3RiWj5YsvP2_pJrSWIcZUXhnTKqjKhdN3j_SgY="
                                alt="">
                            <div class="cuisine-type">South Indian</div>
                        </div>
                        <div class="category-item">
                            <img src="https://media.istockphoto.com/id/1262880166/photo/world-famous-freshly-stir-fried-cooked-thai-recipe-of-prawn-pad-thai-noodles-on-a-round.jpg?s=612x612&w=0&k=20&c=-cgqFKc1dcbRFaB4ggAZL5RKALOLlYORV-DfHc44Bpg="
                                alt="">
                            <div class="cuisine-type">Thai</div>
                        </div>
                        <div class="category-item">
                            <img src="https://media.istockphoto.com/id/1366602955/photo/chicken-chowmin-and-chilli-chicken-and-spring-roll-in-a-chinese-restaurant.jpg?s=612x612&w=0&k=20&c=0sQgpPYuylJz0briAsRtGmVxjF6IkqtwiAv-rUDZ82g="
                                alt="">
                            <div class="cuisine-type">Chinese</div>
                        </div>
                        <div class="category-item">
                            <img src="https://media.istockphoto.com/id/847043282/photo/japanese-dining-healthy-food.jpg?s=612x612&w=0&k=20&c=VdK1FFqaJQik2CdMxI30ilk4581XHpEeaOQEUMAbujc="
                                alt="">
                            <div class="cuisine-type">Japanese</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









    <!--footer-->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Food Delivery. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>