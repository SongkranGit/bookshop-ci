<?php $this->load->view("includes/frontend/header"); ?>

<!-- Wrapper -->
<div class="wrapper push-wrapper">

    <!-- Header -->
    <header id="header">

        <!-- Top Bar -->
        <div class="topbar">
            <div class="container">

                <!-- Online Option -->
<!--                <div class="online-option">-->
<!--                    <ul>-->
<!--                        <li><a href="#">online store</a></li>-->
<!--                        <li><a href="#">Payment</a></li>-->
<!--                        <li><a href="#">shipping</a></li>-->
<!--                        <li><a href="#">Return</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
                <!-- Online Option -->

                <!-- Social Icons -->
                <div class="social-icons pull-right">
                    <ul>
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                        <li><a class="fa fa-pinterest-p" href="#"></a></li>
                    </ul>
                </div>
                <!-- Social Icons -->

                <!-- Cart Option -->
                <div class="cart-option">
                    <ul>
                        <li class="add-cart"><a href="#"><i class="fa fa-shopping-bag"></i><span>3</span></a></li>
<!--                        <li><a href="#"><i class="fa fa-heart-o"></i>wish List 0 items</a></li>-->
                        <li><a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-user"></i>Login / Register</a></li>
                    </ul>
                </div>
                <!-- Cart Option -->

            </div>
        </div>
        <!-- Top Bar -->

        <!-- Nav -->
        <?php $this->load->view("includes/frontend/navbar"); ?>
        <!-- Nav -->

        <!--BANNER-->
        <div id="main-slider" class="main-slider">

            <!-- Item -->
            <div class="item">
                <img src="<?= base_url("assets/frontend/images/banner/bg-1.jpg") ?>" alt="">
                <div class="banner-overlay">
                    <div class="container p-relative">

                        <!-- Layer Img -->
                        <div class="layer-img">
                            <img src="<?= base_url("assets/frontend/images/banner/layer-1.png") ?>" alt="">
                        </div>
                        <!-- Layer Img -->

                        <!-- caption -->
                        <div class="caption style-1 position-center-x">
                            <h1>I love this idea!</h1>
                            <b>Cover up front of book and leave summary</b>
                            <p>Booking is Australia’s number-one source of news about the book industry, keeping subscribers</p>
                            <a href="#" class="btn-1">Learn more<i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                        <!-- caption -->

                    </div>
                </div>
            </div>
            <!-- Item -->

            <!-- Item -->
            <div class="item">
                <img src="<?= base_url("assets/frontend/images/banner/bg-2.jpg") ?>" alt="">
                <div class="banner-overlay">
                    <div class="container position-center-center">

                        <!-- caption -->
                        <div class="caption style-2">
                            <h1>Reading a book is like <span>Re Writing it for yourself</span></h1>
                            <p>A Cambridge academic claims to have found the first use of a ‘brilliant innovation’ that has endured as a mark of incomplete speech</p>
                        </div>
                        <!-- caption -->

                    </div>
                </div>
            </div>
            <!-- Item -->

        </div>
        <!--BANNER-->

    </header>
    <!-- Header -->

    <!-- Main Content -->
    <main class="main-content">

        <!-- Upcoming Release -->
        <section class="upcoming-release">

            <!-- Heading -->
            <div class="container-fluid p-0">
                <div class="release-heading pull-right h-white">
                    <h5>New and Upcoming Release</h5>
                </div>
            </div>
            <!-- Heading -->

            <!-- Upcoming Release Slider -->
            <div class="upcoming-slider">
                <div class="container">

                    <!-- Release Book Detail -->
                    <div class="release-book-detail h-white p-white">
                        <div class="release-book-slider">
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="book-detail.html">Summer Festival</a></h5>
                                    <p>A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.</p>
                                    <span>$25.<sup>00</sup></span>
                                    <i class="fa fa-angle-double-right"></i>
                                </div>
                                <div class="detail-img">
                                    <img src="<?= base_url("assets/frontend/images/upcoming-release/img-01.jpg") ?>" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="book-detail.html">Ramdan Kareem</a></h5>
                                    <p>A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.</p>
                                    <span>$25.<sup>00</sup></span>
                                    <i class="fa fa-angle-double-right"></i>
                                </div>
                                <div class="detail-img">
                                    <img src="<?= base_url("assets/frontend/images/upcoming-release/img-02.jpg") ?>" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="book-detail.html">Rcok Fastival</a></h5>
                                    <p>A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.</p>
                                    <span>$25.<sup>00</sup></span>
                                    <i class="fa fa-angle-double-right"></i>
                                </div>
                                <div class="detail-img">
                                    <img src="<?= base_url("assets/frontend/images/upcoming-release/img-03.jpg") ?>" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="book-detail.html">Cover Design</a></h5>
                                    <p>A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.</p>
                                    <span>$25.<sup>00</sup></span>
                                    <i class="fa fa-angle-double-right"></i>
                                </div>
                                <div class="detail-img">
                                    <img src="<?= base_url("assets/frontend/images/upcoming-release/img-04.jpg") ?>" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="book-detail.html">Festa Junnia</a></h5>
                                    <p>A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.</p>
                                    <span>$25.<sup>00</sup></span>
                                    <i class="fa fa-angle-double-right"></i>
                                </div>
                                <div class="detail-img">
                                    <img src="<?= base_url("assets/frontend/images/upcoming-release/img-05.jpg") ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Release Book Detail -->

                    <!-- Thumbs -->
                    <div class="release-thumb-holder">
                        <ul id="release-thumb" class="release-thumb">
                            <li>
                                <a data-slide-index="0" href="">
                                    <span>Summer</span>
                                    <img src="<?= base_url("assets/frontend/images/upcoming-release/thumb/img-01.jpg") ?>" alt="">
                                    <img class="b-shadow" src="<?= base_url("assets/frontend/images/upcoming-release/b-shadow.png") ?>" alt="">
                                    <span data-toggle="modal" data-target="#quick-view" class="plus-icon">+</span>
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="1" href="" class="active">
                                    <span>Ramdan</span>
                                    <img src="<?= base_url("assets/frontend/images/upcoming-release/thumb/img-02.jpg") ?>" alt="">
                                    <img class="b-shadow" src="<?= base_url("assets/frontend/images/upcoming-release/b-shadow.png") ?>" alt="">
                                    <span data-toggle="modal" data-target="#quick-view" class="plus-icon">+</span>
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="2" href="">
                                    <span>Rcok</span>
                                    <img src="<?= base_url("assets/frontend/images/upcoming-release/thumb/img-03.jpg") ?>" alt="">
                                    <img class="b-shadow" src="<?= base_url("assets/frontend/images/upcoming-release/b-shadow.png") ?>" alt="">
                                    <span data-toggle="modal" data-target="#quick-view" class="plus-icon">+</span>
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="3" href="">
                                    <span>Cover</span>
                                    <img src="<?= base_url("assets/frontend/images/upcoming-release/thumb/img-04.jpg") ?>" alt="">
                                    <img class="b-shadow" src="<?= base_url("assets/frontend/images/upcoming-release/b-shadow.png") ?>" alt="">
                                    <span data-toggle="modal" data-target="#quick-view" class="plus-icon">+</span>
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="4" href="">
                                    <span>Festa</span>
                                    <img src="<?= base_url("assets/frontend/images/upcoming-release/thumb/img-05.jpg") ?>" alt="">
                                    <img class="b-shadow" src="<?= base_url("assets/frontend/images/upcoming-release/b-shadow.png") ?>" alt="">
                                    <span data-toggle="modal" data-target="#quick-view" class="plus-icon">+</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Thumbs -->

                </div>
            </div>
            <!-- Upcoming Release Slider -->

        </section>
        <!-- Upcoming Release -->

        <!-- Best Seller Products -->
        <section class="best-seller tc-padding">
            <div class="container">

                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading style-1">
                        <h2>Best <span class="theme-color">Seller</span> Books</h2>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Best sellers Tabs -->
                <div id="best-sellers-tabs" class="best-sellers-tabs">

                    <!-- Nav tabs -->
                    <div class="tabs-nav-holder">
                        <ul class="tabs-nav">
                            <li><a href="#tab-1">Novel</a></li>
                            <li><a href="#tab-2">Leadership</a></li>
                            <li><a href="#tab-3">Peotry</a></li>
                            <li><a href="#tab-4">Mathmatics</a></li>
                            <li><a href="#tab-5">Kids Books</a></li>
                        </ul>
                    </div>
                    <!-- Nav tabs -->

                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!-- Best Seller Slider -->
                        <div id="tab-1">
                            <div class="best-seller-slider">

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/best-seller/img-01.jpg") ?>" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <span class="sale-bacth">sale</span>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Mars Club</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-01.jpg") ?>" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/best-seller/img-02.jpg") ?>" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Beer Fastival</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-02.jpg") ?>" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/best-seller/img-03.jpg") ?>" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Cover Design</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-03.jpg") ?>" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/best-seller/img-04.jpg") ?>" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <span class="sale-bacth">sale</span>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Festa Junnia</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-04.jpg") ?>" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                            </div>
                        </div>
                        <!-- Best Seller Slider -->

                        <!-- Best Seller Slider -->
                        <div id="tab-2">
                            <div class="best-seller-slider">

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/best-seller/img-04.jpg") ?>" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <span class="sale-bacth">sale</span>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Rebel Spring</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-01.jpg") ?>" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="images/best-seller/img-03.jpg" alt="">
                                            <ul class="<?= base_url("assets/frontend/images/product-cart-option position-center-x") ?>">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Slow Travel</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-02.jpg") ?>" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/best-seller/img-02.jpg") ?>" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Trial by Fire</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-03.jpg") ?>" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/best-seller/img-01.jpg") ?>" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Jewels of Nizam</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-04.jpg") ?>" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                            </div>
                        </div>
                        <!-- Best Seller Slider -->

                        <!-- Best Seller Slider -->
                        <div id="tab-3">
                            <div class="best-seller-slider">

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/best-seller/img-01.jpg") ?>" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <span class="sale-bacth">sale</span>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Jewels of Nizam</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-01.jpg") ?>" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/best-seller/img-02.jpg") ?>" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <span class="sale-bacth">sale</span>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Trial by Fire</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-02.jpg") ?>" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/best-seller/img-03.jpg") ?>" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Slow Travel</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-03.jpg") ?>" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/best-seller/img-04.jpg") ?>" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Rebel Spring</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-04.jpg") ?>" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                            </div>
                        </div>
                        <!-- Best Seller Slider -->

                        <!-- Best Seller Slider -->
                        <div id="tab-4">
                            <div class="best-seller-slider">

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/best-seller/img-04.jpg") ?>" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Rebel Spring</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-01.jpg") ?>" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/book-aurthor/img-01.jpg") ?>images/best-seller/img-03.jpg" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <span class="sale-bacth">sale</span>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Slow Travel</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-01.jpg") ?>images/book-aurthor/img-02.jpg" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/book-aurthor/img-01.jpg") ?>images/best-seller/img-02.jpg" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Trial by Fire</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-01.jpg") ?>images/book-aurthor/img-03.jpg" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/book-aurthor/img-01.jpg") ?>images/best-seller/img-01.jpg" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <span class="sale-bacth">sale</span>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Jewels of Nizam</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-01.jpg") ?>images/book-aurthor/img-04.jpg" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                            </div>
                        </div>
                        <!-- Best Seller Slider -->

                        <!-- Best Seller Slider -->
                        <div id="tab-5">
                            <div class="best-seller-slider">

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/book-aurthor/img-01.jpg") ?>images/best-seller/img-04.jpg" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <span class="sale-bacth">sale</span>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Rebel Spring</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-01.jpg") ?>images/book-aurthor/img-01.jpg" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/book-aurthor/img-01.jpg") ?>images/best-seller/img-03.jpg" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Slow Travel</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-01.jpg") ?>images/book-aurthor/img-02.jpg" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/book-aurthor/img-01.jpg") ?>images/best-seller/img-02.jpg" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Trial by Fire</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-03.jpg") ?>" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                                <!-- Product Box -->
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src="<?= base_url("assets/frontend/images/best-seller/img-01.jpg") ?>" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <span>Novel</span>
                                            <h5><a href="book-detail.html">Jewels of Nizam</a></h5>
                                            <p>How to Write a Book Review...</p>
                                            <div class="rating-nd-price">
                                                <strong>$280.99</strong>
                                                <ul class="rating-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="aurthor-detail">
                                                <span><img src="<?= base_url("assets/frontend/images/book-aurthor/img-04.jpg") ?>" alt="">Pawel Kadysz</span>
                                                <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Box -->

                            </div>
                        </div>
                        <!-- Best Seller Slider -->

                    </div>
                    <!-- Tab panes -->

                </div>
                <!-- Best sellers Tabs -->

            </div>
        </section>
        <!-- Best Seller Products -->

        <!-- Add Banners -->
v
        <!-- Add Banners -->

        <!-- Recomend products -->
        <div class="recomended-products tc-padding">
            <div class="container">

                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading">
                        <h2>Staff <span class="theme-color">Recomended </span> Books</h2>
                        <p>Whether you’re a large or small employer, enterpreneur, educational institution, professional</p>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Recomend products Slider -->
                <div class="recomend-slider">

                    <!-- Item -->
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#open-book-view"><img src="<?= base_url("assets/frontend/images/recomended-products/img-01.jpg") ?>" alt=""></a>
                    </div>
                    <!-- Item -->

                    <!-- Item -->
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#open-book-view"><img src="<?= base_url("assets/frontend/images/recomended-products/img-02.jpg") ?>" alt=""></a>
                    </div>
                    <!-- Item -->

                    <!-- Item -->
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#open-book-view"><img src="<?= base_url("assets/frontend/images/recomended-products/img-03.jpg") ?>" alt=""></a>
                    </div>
                    <!-- Item -->

                    <!-- Item -->
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#open-book-view"><img src="<?= base_url("assets/frontend/images/recomended-products/img-04.jpg") ?>" alt=""></a>
                    </div>
                    <!-- Item -->

                    <!-- Item -->
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#open-book-view"><img src="<?= base_url("assets/frontend/images/recomended-products/img-05.jpg") ?>" alt=""></a>
                    </div>
                    <!-- Item -->

                </div>
                <!-- Recomend products Slider -->

            </div>
        </div>
        <!-- Recomend products -->

        <!-- Book Collections -->
        <section class="book-collection">
            <div class="container">
                <div class="row">

                    <!-- Book Collections Tabs -->
                    <div id="book-collections-tabs">

                        <!-- collection Name -->
                        <div class="col-lg-3 col-sm-12">
                            <div class="sidebar">
                                <h4>Top Books Catagories</h4>
                                <ul>
                                    <li><a href="#">Science fiction</a></li>
                                    <li><a href="#">Satire</a></li>
                                    <li><a href="#">Drama</a></li>
                                    <li><a href="#">Action and Adventure</a></li>
                                    <li><a href="#">Self help</a></li>
                                    <li><a href="#">Health</a></li>
                                    <li><a href="#">Guide</a></li>
                                    <li><a href="#">Religion, Spirituality &amp; New Age</a></li>
                                    <li><a href="#">Encyclopedias</a></li>
                                    <li><a href="#">Dictionaries</a></li>
                                    <li><a href="#">Cookbooks</a></li>
                                    <li><a href="#">Autobiographies</a></li>
                                    <li><a href="#">Biographies</a></li>
                                    <li><a href="#">Fantasy</a></li>
                                    <li><a href="#">Horror</a></li>
                                    <li><a href="#">Mystery</a></li>
                                    <li><a href="#">Solipsist</a></li>
                                    <li><a href="#">The Zombie Survival</a></li>
                                    <li><a href="#">I Am Legend</a></li>
                                    <li><a href="#">Everything i Never Told</a></li>
                                    <li><a href="#">Big Little Lies</a></li>
                                    <li><a href="#">The Bone Clocks</a></li>
                                    <li><a href="#">Revival</a></li>
                                    <li><a href="#">Station Eleven</a></li>
                                    <li><a href="#">The American Lady</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- collection Name -->

                        <!-- Collection Content -->
                        <div class="col-lg-9 col-sm-12">
                            <div class="collection">

                                <!-- Secondary heading -->
                                <div class="sec-heading">
                                    <h3>Shop <span class="theme-color">Books</span> Collection</h3>
                                    <a class="view-all" href="#">View All<i class="fa fa-angle-double-right"></i></a>
                                </div>
                                <!-- Secondary heading -->

                                <!-- Collection Content -->
                                <div class="collection-content">
                                    <ul>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="<?= base_url("assets/frontend/images/products-collection/img-01.jpg") ?>" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                                <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Ramadan Kareem</a></h6>
                                                <span>Richard Matherson</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="<?= base_url("assets/frontend/images/products-collection/img-02.jpg") ?>" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                                <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Mars Club</a></h6>
                                                <span>Eden Lepucki</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="<?= base_url("assets/frontend/images/products-collection/img-03.jpg") ?>" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                                <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Festa Junnai</a></h6>
                                                <span>George R.R. Martin</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="<?= base_url("assets/frontend/images/products-collection/img-04.jpg") ?>" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                                <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Beer Fsstivak</a></h6>
                                                <span>Micheal Circhton</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="<?= base_url("assets/frontend/images/products-collection/img-05.jpg") ?>" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                                <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Rock Festival</a></h6>
                                                <span>Richard Matherson</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="<?= base_url("assets/frontend/images/products-collection/img-06.jpg") ?>" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                                <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Summer Festival</a></h6>
                                                <span>Edgar Rice Burroghs</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="<?= base_url("assets/frontend/images/products-collection/img-07.jpg") ?>" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                                <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Festa JUnnai</a></h6>
                                                <span>Max Brooks</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="<?= base_url("assets/frontend/images/products-collection/img-08.jpg") ?>" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                                <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Summer Festival</a></h6>
                                                <span>J.R.R. Tolkien</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="<?= base_url("assets/frontend/images/products-collection/img-09.jpg") ?>" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                                <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">New Year Collection</a></h6>
                                                <span>Henry Rollins</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="<?= base_url("assets/frontend/images/products-collection/img-10.jpg") ?>" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                                <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Happy Halloween</a></h6>
                                                <span>Lily King</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Collection Content -->

                                <!-- Pagination -->
                                <div class="pagination-holder">
                                    <ul class="pagination">
                                        <li><a href="#" aria-label="Previous">Prev</a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">6</a></li>
                                        <li><a href="#">7</a></li>
                                        <li><a href="#">...</a></li>
                                        <li><a href="#">23</a></li>
                                        <li><a href="#" aria-label="Next">Next</a></li>
                                    </ul>
                                </div>
                                <!-- Pagination -->

                            </div>
                        </div>
                        <!-- Collection Content -->

                    </div>
                    <!-- Book Collections Tabs -->

                </div>
            </div>
        </section>
        <!-- Book Collections -->

        <!-- Services -->
        <section class="services-area tc-padding-bottom">
            <div class="container">
                <div class="row">

                    <!-- Services Text -->
                    <div class="col-lg-4 col-xs-12">
                        <div class="services-text">
                            <strong>Our Book Shop Service</strong>
                            <h3>Bookselling is the commercial <span class="theme-color">Trading of books</span></h3>
                            <p>Scholars and students spent many hours in these bookshop schools reading, examining, and studying available books . or purchasing favourite selections for their private libraries.
                                Book dealers traveled to </p>
                            <a href="shop-detail.html" class="btn-1 sm shadow-0">Read more<i aria-hidden="true" class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- Services Text -->

                    <!-- Services -->
                    <div class="col-lg-8 col-xs-12">
                        <div class="Services">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="service-column">
                                        <span class="service-icon"><i class="icon-amazing"></i></span>
                                        <h5><a href="#">Amazing Design Quality</a></h5>
                                        <p>Large online bookstores offer used books for sale, too. Individuals wishing to sell their used books using online bookstores agree</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-column">
                                        <span class="service-icon"><i class="icon-intuitive-design"></i></span>
                                        <h5><a href="#">Intuitive Design</a></h5>
                                        <p>Large online bookstores offer used books for sale, too. Individuals wishing to sell their used books using online bookstores agree</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-column m-0">
                                        <span class="service-icon"><i class="icon-responsive"></i></span>
                                        <h5><a href="#">Responsive</a></h5>
                                        <p>Large online bookstores offer used books for sale, too. Individuals wishing to sell their used books using online bookstores agree</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-column m-0">
                                        <span class="service-icon"><i class="icon-seo-optimized"></i></span>
                                        <h5><a href="#">SEO Optimized</a></h5>
                                        <p>Large online bookstores offer used books for sale, too. Individuals wishing to sell their used books using online bookstores agree</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Services -->

                </div>
            </div>
        </section>
        <!-- Services -->

        <!-- Timeline -->
        <section class="timeline-area tc-padding">
            <div class="container">
                <div class="row">

                    <!-- Aurthor -->
                    <div class="col-lg-3 col-sm-12">
                        <div class="aurthor-img">
                            <img src="<?= base_url("assets/frontend/images/aurthors/img-01.jpg") ?>" alt="">
                        </div>
                    </div>
                    <!-- Aurthor -->

                    <!-- Aurthor History -->
                    <div class="col-lg-9 col-sm-12 h-white">
                        <h2>Author <span class="theme-color">History</span> of Inovation</h2>
                        <div id="timeline">
                            <ul id="dates">
                                <li><a href="#1985">1985</a></li>
                                <li><a href="#1988">1988</a></li>
                                <li><a href="#1981">1981</a></li>
                                <li><a href="#1992">1992</a></li>
                                <li><a href="#1995">1995</a></li>
                                <li><a href="#2000">2000</a></li>
                            </ul>
                            <ul id="issues">
                                <li id="1985">
                                    <div class="text-box">
                                        <div class="left-box">
                                            <h5><span class="theme-color">July James</span> Books Writer</h5>
                                            <p>Melanie Raabe was born in 1981 in a small village in Germany and studied media scien
                                                ce and comparative literature in Bochum. After completing a traineeship for a Cologne city magazine, she became an actor, blogger, interviewer, stage play and screenplay writer. She has her own interview blog (www.biographilia.com) and has received several prizes for her scripts and short stories.</p>
                                            <div class="follow">
                                                <ul class="social-icons">
                                                    <li>Follow us</li>
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="s-related-products">
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-01.jpg") ?>" alt="">
                                                <h6 class="name">Electro</h6>
                                            </li>
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-02.jpg") ?>" alt="">
                                                <h6 class="name">Summer</h6>
                                            </li>
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-03.jpg") ?>" alt="">
                                                <h6 class="name">Party</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="1988">
                                    <div class="text-box">
                                        <div class="left-box">
                                            <h5><span class="theme-color">July James</span> Books Writer</h5>
                                            <p>Melanie Raabe was born in 1981 in a small village in Germany and studied media scien
                                                ce and comparative literature in Bochum. After completing a traineeship for a Cologne city magazine, she became an actor, blogger, interviewer, stage play and screenplay writer. She has her own interview blog (www.biographilia.com) and has received several prizes for her scripts and short stories.</p>
                                            <div class="follow">
                                                <ul class="social-icons">
                                                    <li>Follow us</li>
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="s-related-products">
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-01.jpg") ?>" alt="">
                                                <h6 class="name">Electro</h6>
                                            </li>
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-02.jpg") ?>" alt="">
                                                <h6 class="name">Summer</h6>
                                            </li>
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-03.jpg") ?>" alt="">
                                                <h6 class="name">Party</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="1981">
                                    <div class="text-box">
                                        <div class="left-box">
                                            <h5><span class="theme-color">July James</span> Books Writer</h5>
                                            <p>Melanie Raabe was born in 1981 in a small village in Germany and studied media scien
                                                ce and comparative literature in Bochum. After completing a traineeship for a Cologne city magazine, she became an actor, blogger, interviewer, stage play and screenplay writer. She has her own interview blog (www.biographilia.com) and has received several prizes for her scripts and short stories.</p>
                                            <div class="follow">
                                                <ul class="social-icons">
                                                    <li>Follow us</li>
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="s-related-products">
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-01.jpg") ?>" alt="">
                                                <h6 class="name">Electro</h6>
                                            </li>
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-02.jpg") ?>" alt="">
                                                <h6 class="name">Summer</h6>
                                            </li>
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-03.jpg") ?>" alt="">
                                                <h6 class="name">Party</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="1992">
                                    <div class="text-box">
                                        <div class="left-box">
                                            <h5><span class="theme-color">July James</span> Books Writer</h5>
                                            <p>Melanie Raabe was born in 1981 in a small village in Germany and studied media scien
                                                ce and comparative literature in Bochum. After completing a traineeship for a Cologne city magazine, she became an actor, blogger, interviewer, stage play and screenplay writer. She has her own interview blog (www.biographilia.com) and has received several prizes for her scripts and short stories.</p>
                                            <div class="follow">
                                                <ul class="social-icons">
                                                    <li>Follow us</li>
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="s-related-products">
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-01.jpg") ?>" alt="">
                                                <h6 class="name">Electro</h6>
                                            </li>
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-02.jpg") ?>" alt="">
                                                <h6 class="name">Summer</h6>
                                            </li>
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-03.jpg") ?>" alt="">
                                                <h6 class="name">Party</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="1995">
                                    <div class="text-box">
                                        <div class="left-box">
                                            <h5><span class="theme-color">July James</span> Books Writer</h5>
                                            <p>Melanie Raabe was born in 1981 in a small village in Germany and studied media scien
                                                ce and comparative literature in Bochum. After completing a traineeship for a Cologne city magazine, she became an actor, blogger, interviewer, stage play and screenplay writer. She has her own interview blog (www.biographilia.com) and has received several prizes for her scripts and short stories.</p>
                                            <div class="follow">
                                                <ul class="social-icons">
                                                    <li>Follow us</li>
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="s-related-products">
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-01.jpg") ?>" alt="">
                                                <h6 class="name">Electro</h6>
                                            </li>
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-02.jpg") ?>" alt="">
                                                <h6 class="name">Summer</h6>
                                            </li>
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-03.jpg") ?>" alt="">
                                                <h6 class="name">Party</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="200">
                                    <div class="text-box">
                                        <div class="left-box">
                                            <h5><span class="theme-color">July James</span> Books Writer</h5>
                                            <p>Melanie Raabe was born in 1981 in a small village in Germany and studied media scien
                                                ce and comparative literature in Bochum. After completing a traineeship for a Cologne city magazine, she became an actor, blogger, interviewer, stage play and screenplay writer. She has her own interview blog (www.biographilia.com) and has received several prizes for her scripts and short stories.</p>
                                            <div class="follow">
                                                <ul class="social-icons">
                                                    <li>Follow us</li>
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="s-related-products">
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-01.jpg") ?>" alt="">
                                                <h6 class="name">Electro</h6>
                                            </li>
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-02.jpg") ?>" alt="">
                                                <h6 class="name">Summer</h6>
                                            </li>
                                            <li>
                                                <img src="<?= base_url("assets/frontend/images/s-related-products/img-03.jpg") ?>" alt="">
                                                <h6 class="name">Party</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Aurthor History -->

                </div>
            </div>
        </section>
        <!-- Timeline -->



    </main>
    <!-- Main Content -->

    <!-- Footer -->
    <footer id="footer">

        <!-- Footer columns -->
        <div class="footer-columns">
            <div class="container">


                <!-- Columns Row -->
                <div class="row">

                    <!-- Footer Column -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-column logo-column">
                            <a href="index-1.html"><img src="<?= base_url("assets/frontend/images/logo-2.png") ?>" alt=""></a>
                            <p>Find out how to prepare your book for an editor with these 4 writing tips! The editing process can be a wonderful opportunity for writers.</p>
                            <ul class="address-list">
                                <li><i class="fa fa-home"></i>888 South Avenue Street, New York City.</li>
                                <li><i class="fa fa-phone"></i>00+123-456-789</li>
                                <li><i class="fa fa-envelope"></i>contact@onlinbookshops.com</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Column -->

                    <!-- Footer Column -->
                    <div class="col-lg-2 col-sm-6">
                        <div class="footer-column footer-links">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">shop</a></li>
                                <li><a href="#">blog</a></li>
                                <li><a href="#">categories</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Column -->

                    <!-- Footer Column -->
                    <div class="col-lg-2 col-sm-6">
                        <div class="footer-column footer-links">
                            <h4>Shipping info</h4>
                            <ul>
                                <li><a href="#">New Products</a></li>
                                <li><a href="#">top Sellers</a></li>
                                <li><a href="#">Manufactirers</a></li>
                                <li><a href="#">Suppliers</a></li>
                                <li><a href="#">Special</a></li>
                                <li><a href="#">Imported</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Column -->

                    <!-- Footer Column -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-column newsletter">
                            <h4>Weekly Newsletter</h4>
                            <p>Get our awesome releases and latest updates with exclusive news and offers in your inbox.</p>
                            <form class="newsletter-input">
                                <i class="fa fa-envelope-o"></i>
                                <input class="form-control.newsletter" type="text" placeholder="Enter Your Email">
                                <button>SUBSCRIBE</button>
                            </form>
                            <p>We're on Social Networks. Follow us &amp; get in touch!</p>
                            <ul class="social-icons">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Column -->

                </div>
                <!-- Columns Row -->

            </div>
        </div>
        <!-- Footer columns -->

        <!-- Sub Footer -->
        <div class="sub-foorer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>Copyright <i class="fa fa-copyright"></i> 2005-2016 <span class="theme-color">FineLayers</span> All Rights Reserved.</p>
                    </div>
                    <div class="col-sm-6">
                        <a class="back-top" href="#">Back to Top<i class="fa fa-caret-up"></i></a>
                        <ul class="cards-list">
                            <li><img src="<?= base_url("assets/frontend/images/cards/img-01.jpg") ?>" alt=""></li>
                            <li><img src="<?= base_url("assets/frontend/images/cards/img-02.jpg") ?>" alt=""></li>
                            <li><img src="<?= base_url("assets/frontend/images/cards/img-03.jpg") ?>" alt=""></li>
                            <li><img src="<?= base_url("assets/frontend/images/cards/img-04.jpg") ?>" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sub Footer -->

    </footer>
    <!-- Footer -->

</div>
<!-- Wrapper -->

<!-- Slide Menu -->
<nav id="menu" class="responive-nav">
    <a class="r-nav-logo" href="index.html"><img src="<?= base_url("assets/frontend/images/logo-1.png") ?>" alt=""></a>
    <ul class="respoinve-nav-list">
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-1"><i class="pull-right fa fa-angle-down"></i>Home</a>
            <ul class="collapse" id="list-1">
                <li><a href="index.html">home 1</a></li>
                <li><a href="index-2.html">home 2</a></li>
            </ul>
        </li>
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-2"><i class="pull-right fa fa-angle-down"></i>Shop</a>
            <ul class="collapse" id="list-2">
                <li><a href="shop.html">shop</a></li>
                <li><a href="shop-detail.html">shop Detail</a></li>
            </ul>
        </li>
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-3"><i class="pull-right fa fa-angle-down"></i>Blog</a>
            <ul class="collapse" id="list-3">
                <li><a href="blog-all-views.html">blog all views</a></li>
                <li><a href="blog-larg.html">blog Larg</a></li>
                <li><a href="blog-list.html">blog List</a></li>
                <li><a href="blog-grid.html">blog Grid</a></li>
                <li><a href="blog-detail.html">blog detail</a></li>
            </ul>
        </li>
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-4"><i class="pull-right fa fa-angle-down"></i>Pages</a>
            <ul class="collapse" id="list-4">
                <li><a href="about.html">about</a></li>
                <li><a href="gallery.html">gallery</a></li>
                <li><a href="event-list.html">event list</a></li>
                <li><a href="event-detail.html">event detail</a></li>
                <li><a href="book-list.html">blog list</a></li>
                <li><a href="book-detail.html">book detail</a></li>
                <li><a href="404.html">404</a></li>
            </ul>
        </li>
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-5"><i class="pull-right fa fa-angle-down"></i>author</a>
            <ul class="collapse" id="list-5">
                <li><a href="author.html">author</a></li>
                <li><a href="author-detail.html">author detail</a></li>
            </ul>
        </li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav>
<!-- Slide Menu -->

<!-- View Pages -->
<div class="modal fade open-book-view" id="open-book-view" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div id="magazine">
<!--                <div style="background-image:url(../images/pages/01.jpg);"></div>-->
<!--                <div style="background-image:url(images/pages/02.jpg);"></div>-->
<!--                <div style="background-image:url(images/pages/03.jpg);"></div>-->
<!--                <div style="background-image:url(images/pages/04.jpg);"></div>-->
<!--                <div style="background-image:url(images/pages/04.jpg);"></div>-->
<!--                <div style="background-image:url(images/pages/05.jpg);"></div>-->
<!--                <div style="background-image:url(images/pages/05.jpg);"></div>-->
<!--                <div style="background-image:url(images/pages/06.jpg);"></div>-->
            </div>
        </div>
    </div>
</div>
<!-- View Pages -->

<!-- Login Modal -->
<div class="modal fade login-modal" id="login-modal" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <strong>Register</strong>
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="social-options">
                <ul>
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Register with facebook</a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i>Register with twitter</a></li>
                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i>Register with gmail+</a></li>
                </ul>
            </div>
            <form class="sending-form">
                <div class="form-group">
                    <input class="form-control" required="required" placeholder="Full name">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group">
                    <input class="form-control" required="required" placeholder="Email Address">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" required="required" placeholder="Password">
                    <i class="fa fa-user"></i>
                </div>
                <p class="terms">You agree to the hldy.hr <a href="#">Terms &amp; Conditions</a></p>
                <button class="btn-1 shadow-0 full-width">Register account</button>
            </form>
        </div>
    </div>
</div>
<!-- Login Modal -->

<!-- Quick View -->
<div class="modal fade quick-view" id="quick-view" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="single-product-detail">
                <div class="row">

                    <!-- Product Thumnbnail -->
                    <div class="col-sm-5">
                        <div class="product-thumnbnail">
                            <img src="<?= base_url("assets/frontend/images/qiuck-view/img-01.jpg") ?>" alt="">
                        </div>
                    </div>
                    <!-- Product Thumnbnail -->

                    <!-- Product Detail -->
                    <div class="col-sm-7">
                        <div class="single-product-detail">
                            <span class="availability">Availability :<strong>Stock<i class="fa fa-check-circle"></i></strong></span>
                            <h3>Land the Earth Beach</h3>
                            <ul class="rating-stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li>1 customer review</li>
                            </ul>
                            <div class="prics"><del class="was">$32.00</del><span class="now">$30.99</span></div>
                            <h4>Overview</h4>
                            <p>With this highly anticipated new novel, the author of the bestselling Life of Pi returns to the storytelling power and luminous wisdom of his master novel. The High Mountains of Portugal.</p>
                            <div class="quantity-box">
                                <label>Qty :</label>
                                <div class="sp-quantity">
                                    <div class="sp-minus fff"><a class="ddd" data-multi="-1">-</a></div>
                                    <div class="sp-input">
                                        <input type="text" class="quntity-input" value="1" />
                                    </div>
                                    <div class="sp-plus fff"><a class="ddd" data-multi="1">+</a></div>
                                </div>
                            </div>
                            <ul class="btn-list">
                                <li><a class="btn-1 sm shadow-0 " href="#">add to cart</a></li>
                                <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-repeat"></i></a></li>
                                <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Product Detail -->

                </div>
            </div>
            <!-- Single Product Detail -->

        </div>
    </div>
</div>
<!-- Quick View -->






<?php $this->load->view("includes/frontend/footer"); ?>
