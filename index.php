<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Mart - HTML5 Resoponsive onepage e-commerce template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png">

    <link rel="stylesheet" href="css/style.css">


    <style>
    /* .carousel {
  width:640px;
  height:360px;
} */
    </style>

    <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
</head>

<body>

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="preloader-area">
            <div class="preloader-box">
                <div class="preloader"></div>
            </div>
        </div>
    </div>


    <?php
    include 'header.php';
    ?>



    <!-- <section class="search-section">
            <div class="container">
                <div class="row subscribe-from">
                    <div class="col-md-12">
                        <form class="form-inline col-md-12 wow fadeInDown animated">
                            <div class="form-group">
                                <input type="email" class="form-control subscribe" id="email" placeholder="Search...">
                                <button class="suscribe-btn" ><i class="pe-7s-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->

    <section class="slider-section">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!-- <ol class="carousel-indicators slider-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol> -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <video id="snowflake-hero-content-mobile-video" style="height: auto; width: 100%; object-fit: fill;"
                        autoplay="autoplay" loop="loop" muted="" width="100%" height="240px" playsinline="">
                        <source
                            src="https://cdn.shopify.com/s/files/1/2568/9396/t/3/assets/Videohomepage1920x1080-1560262095716.mp4"
                            type="video/mp4">
                        <source
                            src="https://cdn.shopify.com/s/files/1/2568/9396/t/3/assets/Videohomepage1920x1080-1560262116227.ogv"
                            type="video/ogg">
                        <source
                            src="https://cdn.shopify.com/s/files/1/2568/9396/t/3/assets/Videohomepage1920x1080-1560262142770.mov"
                            type="video/mov">Your browser does not support the video tag.</video>
                    <!-- <img src="images/best.png" style='width: 100%; height:800px' alt=""> -->
                    <div class="carousel-caption">
                        <!-- <p class='h3 text-left'>Product that make life a little easier</p> -->
                    </div>
                </div>
                <!-- <div class="item">
                    <img src="images/pad.jpg" style='width: 100%; height:800px' alt="">
                    <div class="carousel-caption">
                        <h2>DRESSES <b>&</b> JEANS</h2>
                        <h3>FROM OURFAMOUS BRANDS <Span>SALE</Span></h3>
                        <a href="#">Buy Now</a>
                    </div>
                </div> -->
                <!-- <div class="item ">
                    <img src="images/slider.jpg" width="1648" height="600" alt="">
                    <div class="carousel-caption">
                        <h2>DRESSES <b>&</b> JEANS</h2>
                        <h3>FROM OURFAMOUS BRANDS <Span>SALE</Span></h3>
                        <a href="#">Buy Now</a>
                    </div>
                </div> -->
            </div>

            <!-- Controls -->
            <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="pe-7s-angle-left glyphicon-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="pe-7s-angle-right glyphicon-chevron-right" aria-hidden="true"></span>
            </a> -->
        </div>
    </section>

    <!-- <section class="service-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.1s">
                        <div class="service-item">
                            <i class="pe-7s-settings"></i>
                            <h3>SETTING</h3>
                            <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.2s">
                        <div class="service-item">
                            <i class="pe-7s-safe"></i>
                            <h3>MONEY BACK</h3>
                            <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.3s">
                        <div class="service-item">
                            <i class="pe-7s-global"></i>
                            <h3>WORLDWIDE SHIPPING</h3>
                            <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.4s">
                        <div class="service-item">
                            <i class="pe-7s-headphones"></i>
                            <h3>Online support</h3>
                            <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


    <div class="container" style='margin-top: 50px'>
        <h1 style="font-size: 40px; text-align: center">About us</h1>

        <div class="row" style='margin-top: 50px'>
            <div class="col-md-6">
                <p style="font-size: 18px; font-weight: bold; font-style: italic">
                    "We started Rael to empower women with healthy alternatives to conventional feminine care products
                    that are full of toxic chemicals. We hope to educate and impact women around the world by creating
                    products that don't sacrifice comfort or performance."

                    <!-- Disposable absorbent products for feminine hygiene during menstruation are an important part of life
                    for millions of women. During her lifetime the average woman will have approximately 13 cycles each
                    year for about 37 years, and will spend more than 6 years of that period menstruating. Menstrual
                    flow varies with age, number of children, and use of hormones or intrauterine devices, and typically
                    is heaviest during the second and third days of each period. Many types of products, such as
                    tampons, panty liners, and pads, are used during this period.
                    In recent years disposable absorbent feminine hygiene products have largely replaced older methods
                    of managing menses in women. These products include internal tampons, full-sized sanitary napkins or
                    towels, and panty shields, which may be used to protect undergarments from light menstrual flow or
                    vaginal discharge to maintain cleanliness. In terms of their physical design and basic components,
                    the most advanced sanitary napkins and panty shields make use of many of the same technologies
                    developed for use in baby diapers, including SAPs and nonwoven topsheets that keep skin feeling dry.
                    The requirements for all these products are that they absorb and retain fluid, stay in place,
                    prevent odor, and are comfortable to wear. In Western Europe sanitary towels make up approximately
                    45% of feminine hygiene products sold, while panty shields make up about 37% and tampons about 18%. -->
                </p>
                <p style="font-size: 17px; font-weight: bold; margin-top: 30px; font-style: italic">
                    Launched in 2017, Rael was founded by three female co-founders: Aness An, a journalist and
                    bestselling author; Binna Won, an architect-turned-art-director; and Yanghee Paik, a former movie
                    distributor at The Walt Disney Studios with a Harvard MBA. Frustrated by the lack of healthy,
                    comfortable and high-performing period care products on the market, the trio set out to create their
                    own solution.
                </p>
                <button style='margin-top: 20px' type='button' class='btn btn-primary'><a style='color: white'
                        href='about.php'>Read
                        More..</a></button>
            </div>
            <div class="col-md-6" style='margin-top: 20px'>
                <img style="width: 100%; height: 250px" class="img-fluid" alt="shop" src="images/best.png" />
            </div>
        </div>
    </div>

    <section class="new-section" style='margin-top: 50px '>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titie-section wow fadeInDown animated ">
                        <h1>Products</h1>
                    </div>
                </div>
            </div>
            <div class="row" style='margin-top: 50px'>
                <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.2s">
                    <div class="product-item" style=' height: 352px; width: 255px'>
                        <img src="images/product1.jpeg" class="img-responsive img-fluid" alt="anion sanitary napkins">
                        <!-- <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div> -->
                        <div class="product-title">
                            <a href="#">
                                <h3>Anion Sanitary napkins</h3>
                                <!-- <span>$26</span> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.4s">
                    <div class="product-item" style='height: 352px; width: 255px'>
                        <img src="images/product2.jpeg" class="img-responsive img-fluid" alt="">
                        <!-- <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div> -->
                        <div class="product-title">
                            <a href="#">
                                <h3>Panty Liner</h3>
                                <!-- <span>$31</span> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.6s">
                    <div class="product-item" style='height: 352px; width: 255px'>
                        <img src="images/product1.jpeg" class="img-responsive img-fluid" alt="">
                        <!-- <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div> -->
                        <div class="product-title">
                            <a href="#">
                                <h3 class='text-center'>Anion Sanitary Napkin</h3>
                                <!-- <span>$21</span> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.8s">
                    <div class="product-item" style='height: 352px; width: 255px'>
                        <img src="images/product2.jpeg" class="img-responsive img-fluid" alt="">
                        <!-- <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div> -->
                        <div class="product-title">
                            <a href="#">
                                <h3>Panty Liner</h3>
                                <!-- <span>$56</span> -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titie-section wow fadeInDown animated ">
                        <h1>Best Selling PRODUCTS</h1>
                    </div>
                </div>
            </div>
            <div class="row featured isotope" style='margin-top: 50px'>
                <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item">
                    <div class="product-item" style='height: 352px; width: 255px'>
                        <img src="images/product1.jpeg" class="img-responsive img-fluid" alt="">
                        <!-- <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div> -->
                        <div class="product-title">
                            <a href="#">
                                <h3 class='text-center'>Anion Sanitary Napkin</h3>
                                <!-- <span>$21</span> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 cat-2 featured-items isotope-item">
                    <div class="product-item" style='height: 352px; width: 255px'>
                        <img src="images/product2.jpeg" class="img-responsive img-fluid" alt="">
                        <!-- <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div> -->
                        <div class="product-title">
                            <a href="#">
                                <h3 class='text-center'>Anion Sanitary Napkin</h3>
                                <!-- <span>$21</span> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 cat-1 featured-items isotope-item">
                    <div class="product-item" style='height: 352px; width: 255px'>
                        <img src="images/product1.jpeg" class="img-responsive img-fluid" alt="">
                        <!-- <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div> -->
                        <div class="product-title">
                            <a href="#">
                                <h3 class='text-center'>Anion Sanitary Napkin</h3>
                                <!-- <span>$21</span> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item">
                    <div class="product-item" style='height: 352px; width: 255px'>
                        <img src="images/product2.jpeg" class="img-responsive img-fluid" alt="">
                        <!-- <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div> -->
                        <div class="product-title">
                            <a href="#">
                                <h3 class='text-center'>Anion Sanitary Napkin</h3>
                                <!-- <span>$21</span> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 cat-2 featured-items isotope-item">
                    <div class="product-item" style='height: 352px; width: 255px'>
                        <img src="images/product1.jpeg" class="img-responsive img-fluid" alt="">
                        <!-- <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div> -->
                        <div class="product-title">
                            <a href="#">
                                <h3 class='text-center'>Anion Sanitary Napkin</h3>
                                <!-- <span>$21</span> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item">
                    <div class="product-item" style='height: 352px; width: 255px'>
                        <img src="images/product2.jpeg" class="img-responsive img-fluid" alt="">
                        <!-- <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div> -->
                        <div class="product-title">
                            <a href="#">
                                <h3 class='text-center'>Anion Sanitary Napkin</h3>
                                <!-- <span>$21</span> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 cat-1 featured-items isotope-item">
                    <div class="product-item" style='height: 352px; width: 255px'>
                        <img src="images/product1.jpeg" class="img-responsive img-fluid" alt="">
                        <!-- <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div> -->
                        <div class="product-title">
                            <a href="#">
                                <h3 class='text-center'>Anion Sanitary Napkin</h3>
                                <!-- <span>$21</span> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item">
                    <div class="product-item" style='height: 352px; width: 255px'>
                        <img src="images/product2.jpeg" class="img-responsive img-fluid" alt="">
                        <!-- <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div> -->
                        <div class="product-title">
                            <a href="#">
                                <h3 class='text-center'>Anion Sanitary Napkin</h3>
                                <!-- <span>$21</span> -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="offer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow fadeInDown animated ">
                        <h1>END OF SEASON SALE</h1>
                        <h2>Up to 35% off Women's Denim</h2>
                    </div>
                </div>
            </div>
        </section> -->

    <!-- <section class="best-seller-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>BEST SELLERS</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.2s">
                        <div class="product-item">
                            <img src="images/1.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Blue Tshirt</h3>
                                    <span>$26</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.4s">
                        <div class="product-item">
                            <img src="images/2.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>WOMAN shirt</h3>
                                    <span>$31</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.6s">
                        <div class="product-item">
                            <img src="images/3.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>YELLOW Tshirt</h3>
                                    <span>$21</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.8s">
                        <div class="product-item">
                            <img src="images/4.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Cool lingerie</h3>
                                    <span>$56</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

    <section class="review-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titie-section wow fadeInDown animated ">
                        <h1>customer review</h1>
                    </div>
                </div>
            </div>
            <div class="row" style='margin-top: 50px'>
                <div id="feedback" class="carousel slide feedback" data-ride="feedback">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/member1.png" width="320" height="439" alt="">
                            <div class="carousel-caption">
                                <p>
                                    As women, we take care of everyone — our spouses, children, parents, other family
                                    members, and even friends. However, we tend to neglect ourselves, especially when it
                                    concerns our health. This community event is FREE to the women of Durham, North
                                    Carolina and surrounding counties. It provides health awareness, education,
                                    information, resources, and on-site health screenings.
                                </p>
                                <h3>- Olivia -</h3>
                                <span>Melbour, Aus</span>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/member3.png" width="320" height="439" alt="">
                            <div class="carousel-caption">
                                <p>
                                    As women, we take care of everyone — our spouses, children, parents, other family
                                    members, and even friends. However, we tend to neglect ourselves, especially when it
                                    concerns our health. This community event is FREE to the women of Durham, North
                                    Carolina and surrounding counties. It provides health awareness, education,
                                    information, resources, and on-site health screenings.
                                </p>
                                <h3>- Raneas -</h3>
                                <span>Melbour, Aus</span>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/member3.png" width="320" height="439" alt="">
                            <div class="carousel-caption">
                                <p>
                                    As women, we take care of everyone — our spouses, children, parents, other family
                                    members, and even friends. However, we tend to neglect ourselves, especially when it
                                    concerns our health. This community event is FREE to the women of Durham, North
                                    Carolina and surrounding counties. It provides health awareness, education,
                                    information, resources, and on-site health screenings.
                                </p>
                                <h3>- Angeilna -</h3>
                                <span>Melbour, Aus</span>
                            </div>
                        </div>
                    </div>
                    <!-- Indicators -->
                    <ol class="carousel-indicators review-controlar">
                        <li data-target="#feedback" data-slide-to="0" class="active">
                            <img src="images/member1.png" width="320" height="439" alt="">
                        </li>
                        <li data-target="#feedback" data-slide-to="1">
                            <img src="images/member3.png" width="320" height="439" alt="">
                        </li>
                        <li data-target="#feedback" data-slide-to="2">
                            <img src="images/member3.png" width="320" height="439" alt="">
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="news-letter-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="titie-section white wow fadeInDown animated ">
                        <h1>NEWSLETTER</h1>
                    </div>
                    <p>Follow a collection of news & promotions</p>
                </div>
            </div>
            <div class="row subscribe-from">
                <form class="form-inline col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1  wow fadeInDown animated">
                    <div class="form-group">
                        <input type="email" class="form-control subscribe" id="email" placeholder="Enter your email">
                        <button class="suscribe-btn"><i class="pe-7s-next"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->

    <!-- <section class="client-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>our partner</h1>
                        </div>
                    </div>
                </div>
                <div id="client" class="row owl-carousel owl-theme client-area">
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_01.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_02.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_03.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_04.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_01.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_02.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_03.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_04.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                </div>
                <div class="customNavigation works-navigation">
                    <a class="btn-work works-prev"><i class="pe-7s-angle-left"></i></a>
                    <a class="btn-work works-next"><i class="pe-7s-angle-right"></i></a>
                </div>
            </div>
        </section> -->

    <!-- <section class="news-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>Latest News</h1>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <a href="#"><img src="images/blog1.jpg" width="350" height="262" alt=""></a>
                            <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                            <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.4s">
                        <div class="blog-item">
                            <a href="#"><img src="images/blog2.jpg" width="350" height="262" alt=""></a>
                            <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                            <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                            <a href="#">Read More</a>

                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.6s">
                        <div class="blog-item">
                            <a href="#"><img src="images/blog3.jpg" width="350" height="262" alt=""></a>
                            <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                            <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="titie-section wow fadeInDown animated ">
                        <h1>GET IN TOUCH</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 wow fadeInLeft animated">
                    <div class="left-content">
                        <h1><span>M</span>art</h1>
                        <h3>We'd love To Meet You In Person Or Via The Web!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel nulla sapien. Class aptent
                            tacitiaptent taciti sociosqu ad lit himenaeos. Suspendisse massa urna, luctus ut vestibulum
                            necs et, vulputate quis urna. Donec at commodo erat.</p>
                        <div class="contact-info">
                            <p><b>Main Office:</b> 123 Elm St. New York City, NY</p>
                            <p><b>Phone:</b> 1.555.555.5555</p>
                            <p><b>Email:</b> info@yourdomain.com</p>
                        </div>
                        <div class="social-media">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight animated">
                    <form action="" method="" class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="name" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="name" placeholder="Website URL">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <textarea name="" id="" class="form-control" cols="30" rows="5"
                                        placeholder="Your Message..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input type="submit" class="contact-submit" value="Send" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    include 'footer.php'
    ?>

    <!-- JQUERY -->
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>