<?php $title = "Home Page"; ?>
<?php require_once("layout.php"); ?>


<!-- HERO CARASOUL -->
<section class="hero-carousel mb-4" max-height="400px" id="heroCarousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../images/slider1.jpg" class="d-block w-100" alt="slider-img">
            <div class="carousel-caption d-none d-md-block" style="background: #0000003d;">
                <h1 class="display-4">First slide label</h1>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../images/slider2.jpg" class="d-block w-100" alt="slider-img">
            <div class="carousel-caption d-none d-md-block" style="background: #0000003d;">
                <h1 class="display-4">Second slide label</h1>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../images/slider3.jpg" class="d-block w-100" alt="slider-img">
            <div class="carousel-caption d-none d-md-block" style="background: #0000003d;">
                <h1 class="display-4">Third slide label</h1>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
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
</section>

<!-- Section 1 (Deals of the Day)-->
<section class="section-one container mt-lg-5 mb-4" id="sectionOne">
    <div class="row mt-lg-5 pt-lg-5">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-10">
                    <h3>Deals of the Day <span class="text-danger">06:45:36</span> hours left!</h3>
                </div>
                <div class="col-sm-2 text-right">
                    <a href="#">
                        <button class="btn btn-primary"><i class="fas fa-plus"></i> 15 More!</button>
                    </a>
                </div>
            </div>
            <hr>
            <div class="content mt-4">
                <div class="card-group mt-2 mb-2">
                    <div class="card ml-1 mr-1 border rounded">
                        <a href="#" style="text-decoration: none !important;">
                            <img src="../images/products/img1.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <small class="card-text text-dark">
                                    <p class="card-text font-weight-normal product-title" id="productTitle" style="font-size: 16px">Choose Kookie Jar Outlet
                                        <br>
                                        <small class="text-success ratings" id="productRatings" style="font-size: 14px"> <i class="fas fa-star"></i> 4.5 (316)</small>
                                    </p>
                                    <h6> <i class="fas fa-rupee-sign"></i> 
                                       <span class="product-price" id="productPrice">1,250</span>/- 
                                    </h6>
                                </small>
                            </div>
                        </a>
                    </div>
                    <div class="card ml-1 mr-1 border rounded">
                        <a href="#" style="text-decoration: none !important;">
                            <img src="../images/products/img2.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <small class="card-text text-dark">
                                    <p class="card-text font-weight-normal product-title" id="productTitle" style="font-size: 16px">Choose Kookie Jar Outlet
                                        <br>
                                        <small class="text-success ratings" id="productRatings" style="font-size: 14px"> <i class="fas fa-star"></i> 4.5 (316)</small>
                                    </p>
                                    <h6> <i class="fas fa-rupee-sign"></i> 
                                       <span class="product-price" id="productPrice">1,250</span>/- 
                                    </h6>
                                </small>
                            </div>
                        </a>
                    </div>
                    <div class="card ml-1 mr-1 border rounded">
                        <a href="#" style="text-decoration: none !important;">
                            <img src="../images/products/img3.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <small class="card-text text-dark">
                                    <p class="card-text font-weight-normal product-title" id="productTitle" style="font-size: 16px">Choose Kookie Jar Outlet
                                        <br>
                                        <small class="text-success ratings" id="productRatings" style="font-size: 14px"> <i class="fas fa-star"></i> 4.5 (316)</small>
                                    </p>
                                    <h6> <i class="fas fa-rupee-sign"></i> 
                                       <span class="product-price" id="productPrice">1,250</span>/- 
                                    </h6>
                                </small>
                            </div>
                        </a>
                    </div>
                    <div class="card ml-1 mr-1 border rounded">
                        <a href="#" style="text-decoration: none !important;">
                            <img src="../images/products/img4.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <small class="card-text text-dark">
                                    <p class="card-text font-weight-normal product-title" id="productTitle" style="font-size: 16px">Choose Kookie Jar Outlet
                                        <br>
                                        <small class="text-success ratings" id="productRatings" style="font-size: 14px"> <i class="fas fa-star"></i> 4.5 (316)</small>
                                    </p>
                                    <h6> <i class="fas fa-rupee-sign"></i> 
                                       <span class="product-price" id="productPrice">1,250</span>/- 
                                    </h6>
                                </small>
                            </div>
                        </a>
                    </div>
                    <div class="card ml-1 mr-1 border rounded">
                        <a href="#" style="text-decoration: none !important;">
                            <img src="../images/products/img4.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <small class="card-text text-dark">
                                    <p class="card-text font-weight-normal product-title" id="productTitle" style="font-size: 16px">Choose Kookie Jar Outlet
                                        <br>
                                        <small class="text-success ratings" id="productRatings" style="font-size: 14px"> <i class="fas fa-star"></i> 4.5 (316)</small>
                                    </p>
                                    <h6> <i class="fas fa-rupee-sign"></i> 
                                       <span class="product-price" id="productPrice">1,250</span>/- 
                                    </h6>
                                </small>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="ml-1 mr-1" style="border: none; display: flex; align-items: center; justify-content: center;">
                        <a href="#">
                            <button class="btn btn-outline-primary">+15 More!</button>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section 2 -->
<section class="section-two container mt-lg-5 mb-lg-5" id="sectionTwo">
    <div class="row">
        <div class="col-sm-4" style="max-height:200px; overflow-y: hidden;"><img class="rounded w-100" src="../images/banners/banner1.jpg" alt="..."></div>
        <div class="col-sm-4" style="max-height:200px; overflow-y: hidden;"><img class="rounded w-100" src="../images/banners/banner2.jpg" alt="..."></div>
        <div class="col-sm-4" style="max-height:200px; overflow-y: hidden;"><img class="rounded w-100" src="../images/banners/banner3.jpg" alt="..."></div>
    </div>
</section>

<!-- Section 3 -->
<section class="section-three container mt-lg-5 mb-4" id="sectionThree">
    <div class="row">
        <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-10">
                <h3>Popular Near You!</h3>
            </div>
            <div class="col-sm-2 text-right">
                <a href="#">
                    <button class="btn btn-primary"><i class="fas fa-plus"></i> 15 More!</button>
                </a>
            </div>
        </div>
        <hr>
        <div class="content mt-4">
            <div class="card-group mt-2 mb-2">
                <div class="card ml-1 mr-1 border rounded">
                    <a href="#" style="text-decoration: none !important;">
                        <img src="../images/products/img1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <small class="card-text text-dark">
                                <p class="card-text font-weight-normal product-title" id="productTitle" style="font-size: 16px">Choose Kookie Jar Outlet
                                    <br>
                                    <small class="text-success ratings" id="productRatings" style="font-size: 14px"> <i class="fas fa-star"></i> 4.5 (316)</small>
                                </p>
                                <h6> <i class="fas fa-rupee-sign"></i> 
                                    <span class="product-price" id="productPrice">1,250</span>/- 
                                </h6>
                            </small>
                        </div>
                    </a>
                </div>
                <div class="card ml-1 mr-1 border rounded">
                    <a href="#" style="text-decoration: none !important;">
                        <img src="../images/products/img2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <small class="card-text text-dark">
                                <p class="card-text font-weight-normal product-title" id="productTitle" style="font-size: 16px">Choose Kookie Jar Outlet
                                    <br>
                                    <small class="text-success ratings" id="productRatings" style="font-size: 14px"> <i class="fas fa-star"></i> 4.5 (316)</small>
                                </p>
                                <h6> <i class="fas fa-rupee-sign"></i> 
                                    <span class="product-price" id="productPrice">1,250</span>/- 
                                </h6>
                            </small>
                        </div>
                    </a>
                </div>
                <div class="card ml-1 mr-1 border rounded">
                    <a href="#" style="text-decoration: none !important;">
                        <img src="../images/products/img3.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <small class="card-text text-dark">
                                <p class="card-text font-weight-normal product-title" id="productTitle" style="font-size: 16px">Choose Kookie Jar Outlet
                                    <br>
                                    <small class="text-success ratings" id="productRatings" style="font-size: 14px"> <i class="fas fa-star"></i> 4.5 (316)</small>
                                </p>
                                <h6> <i class="fas fa-rupee-sign"></i> 
                                    <span class="product-price" id="productPrice">1,250</span>/- 
                                </h6>
                            </small>
                        </div>
                    </a>
                </div>
                <div class="card ml-1 mr-1 border rounded">
                    <a href="#" style="text-decoration: none !important;">
                        <img src="../images/products/img4.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <small class="card-text text-dark">
                                <p class="card-text font-weight-normal product-title" id="productTitle" style="font-size: 16px">Choose Kookie Jar Outlet
                                    <br>
                                    <small class="text-success ratings" id="productRatings" style="font-size: 14px"> <i class="fas fa-star"></i> 4.5 (316)</small>
                                </p>
                                <h6> <i class="fas fa-rupee-sign"></i> 
                                    <span class="product-price" id="productPrice">1,250</span>/- 
                                </h6>
                            </small>
                        </div>
                    </a>
                </div>
                <div class="card ml-1 mr-1 border rounded">
                    <a href="#" style="text-decoration: none !important;">
                        <img src="../images/products/img4.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <small class="card-text text-dark">
                                <p class="card-text font-weight-normal product-title" id="productTitle" style="font-size: 16px">Choose Kookie Jar Outlet
                                    <br>
                                    <small class="text-success ratings" id="productRatings" style="font-size: 14px"> <i class="fas fa-star"></i> 4.5 (316)</small>
                                </p>
                                <h6> <i class="fas fa-rupee-sign"></i> 
                                    <span class="product-price" id="productPrice">1,250</span>/- 
                                </h6>
                            </small>
                        </div>
                    </a>
                </div>
                <!-- <div class="ml-1 mr-1" style="border: none; display: flex; align-items: center; justify-content: center;">
                    <a href="#">
                        <button class="btn btn-outline-primary">+15 More!</button>
                    </a>
                </div> -->
            </div>
        </div>
        </div>
    </div>
</section>


<!-- Section 4 -->
<section class="section-four container mt-lg-5 mb-lg-5" id="sectionFour">
    <div class="row">
        <div class="col-sm-4" style="max-height:200px; overflow-y: hidden;"><img class="rounded w-100" src="../images/banners/banner1.jpg" alt="..."></div>
        <div class="col-sm-4" style="max-height:200px; overflow-y: hidden;"><img class="rounded w-100" src="../images/banners/banner2.jpg" alt="..."></div>
        <div class="col-sm-4" style="max-height:200px; overflow-y: hidden;"><img class="rounded w-100" src="../images/banners/banner3.jpg" alt="..."></div>
    </div>
</section>


<?php require_once("footer.php"); ?>

