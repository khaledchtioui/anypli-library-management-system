<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/koparion/koparion/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Aug 2023 20:12:13 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Koparion – Book Shop HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!-- flexslider.css-->
    <link rel="stylesheet" href="../assets/css/flexslider.css">
    <!-- chosen.min.css-->
    <link rel="stylesheet" href="../assets/css/chosen.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="../assets/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body class="cart">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
<!-- header-area-start -->
<header>
    <!-- header-top-area-start -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="language-area">
                        <ul>
                            <li><img src="../assets/img/flag/1.jpg" alt="flag" /><a href="#">English<i class="fa fa-angle-down"></i></a>
                                <div class="header-sub">
                                    <ul>
                                        <li><a href="#"><img src="../assets/img/flag/2.jpg" alt="flag" />france</a></li>
                                        <li><a href="#"><img src="../assets/img/flag/3.jpg" alt="flag" />croatia</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">USD $<i class="fa fa-angle-down"></i></a>
                                <div class="header-sub dolor">
                                    <ul>
                                        <li><a href="#">EUR €</a></li>
                                        <li><a href="#">USD $</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="account-area text-end">
                        <ul>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="login.html">Sign in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top-area-end -->
    <!-- header-mid-area-start -->
    <div class="header-mid-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-12">
                    <div class="header-search">
                        <form action="#">
                            <input type="text" placeholder="Search entire store here..." />
                            <a href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="logo-area text-center logo-xs-mrg">
                        <a href="index.html"><img src="../assets/img/logo/logo.png" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="my-cart" id="my-carts">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-shopping-cart"></i>My Cart</a>
                                <span id="cart-item-count">0</span>
                                <div class="mini-cart-sub" id="mini-cart-sub">
                                    <div class="cart-product" id="cart-products">
                                        <!-- Cart items will be dynamically added here -->
                                    </div>
                                    <div class="cart-totals">
                                        <h5>Total <span id="cart-total">£0.00</span></h5>
                                    </div>
                                    <div class="cart-bottom">
                                        <a class="view-cart" href="{{ route('bookss.cart') }}">View Cart</a>
                                        <a href="checkout.html">Check out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-mid-area-end -->
    <!-- main-menu-area-start -->
    <div class="main-menu-area d-md-none d-none d-lg-block sticky-header-1" id="header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-area">
                        <nav>
                            <ul>
                                <li><a href="product-details.html">Book<i class="fa fa-angle-down"></i></a>
                                    <div class="mega-menu">
												<span>
													<a href="#" class="title">Jackets</a>
													<a href="shop.html">Tops & Tees</a>
													<a href="shop.html">Polo Short Sleeve</a>
													<a href="shop.html">Graphic T-Shirts</a>
													<a href="shop.html">Jackets & Coats</a>
													<a href="shop.html">Fashion Jackets</a>
												</span>
                                        <span>
													<a href="#" class="title">weaters</a>
													<a href="shop.html">Crochet</a>
													<a href="shop.html">Sleeveless</a>
													<a href="shop.html">Stripes</a>
													<a href="shop.html">Sweaters</a>
													<a href="shop.html">hoodies</a>
												</span>
                                        <span>
													<a href="#" class="title">Bottoms</a>
													<a href="shop.html">Heeled sandals</a>
													<a href="shop.html">Polo Short Sleeve</a>
													<a href="shop.html">Flat sandals</a>
													<a href="shop.html">Short Sleeve</a>
													<a href="shop.html">Long Sleeve</a>
												</span>
                                        <span>
													<a href="#" class="title">Jeans Pants</a>
													<a href="shop.html">Polo Short Sleeve</a>
													<a href="shop.html">Sleeveless</a>
													<a href="shop.html">Graphic T-Shirts</a>
													<a href="shop.html">Hoodies</a>
													<a href="shop.html">Jackets</a>
												</span>
                                    </div>
                                </li>
                                <li><a href="product-details.html">Audio books<i class="fa fa-angle-down"></i></a>
                                    <div class="mega-menu">
												<span>
													<a href="#" class="title">Shirts</a>
													<a href="shop.html">Tops & Tees</a>
													<a href="shop.html">Sweaters </a>
													<a href="shop.html">Hoodies</a>
													<a href="shop.html">Jackets & Coats</a>
												</span>
                                        <span>
													<a href="#" class="title">Tops & Tees</a>
													<a href="shop.html">Long Sleeve </a>
													<a href="shop.html">Short Sleeve</a>
													<a href="shop.html">Polo Short Sleeve</a>
													<a href="shop.html">Sleeveless</a>
												</span>
                                        <span>
													<a href="#" class="title">Jackets</a>
													<a href="shop.html">Sweaters</a>
													<a href="shop.html">Hoodies</a>
													<a href="shop.html">Wedges</a>
													<a href="shop.html">Vests</a>
												</span>
                                        <span>
													<a href="#" class="title">Jeans Pants</a>
													<a href="shop.html">Polo Short Sleeve</a>
													<a href="shop.html">Sleeveless</a>
													<a href="shop.html">Graphic T-Shirts</a>
													<a href="shop.html">Hoodies</a>
												</span>
                                    </div>
                                </li>
                                <li><a href="product-details.html">children’s books<i class="fa fa-angle-down"></i></a>
                                    <div class="mega-menu mega-menu-2">
												<span>
													<a href="#" class="title">Tops</a>
													<a href="shop.html">Shirts</a>
													<a href="shop.html">Florals</a>
													<a href="shop.html">Crochet</a>
													<a href="shop.html">Stripes</a>
												</span>
                                        <span>
													<a href="#" class="title">Bottoms</a>
													<a href="shop.html">Shorts</a>
													<a href="shop.html">Dresses</a>
													<a href="shop.html">Trousers</a>
													<a href="shop.html">Jeans</a>
												</span>
                                        <span>
													<a href="#" class="title">Shoes</a>
													<a href="shop.html">Heeled sandals</a>
													<a href="shop.html">Flat sandals</a>
													<a href="shop.html">Wedges</a>
													<a href="shop.html">Ankle boots</a>
												</span>
                                    </div>
                                </li>
                                <li><a href="#">blog<i class="fa fa-angle-down"></i></a>
                                    <div class="sub-menu sub-menu-2">
                                        <ul>
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-details.html">blog-details</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">pages<i class="fa fa-angle-down"></i></a>
                                    <div class="sub-menu sub-menu-2">
                                        <ul>
                                            <li><a href="shop.html">shop</a></li>
                                            <li><a href="shop-list.html">shop list view</a></li>
                                            <li><a href="product-details.html">product-details</a></li>
                                            <li><a href="product-details-affiliate.html">product-affiliate</a></li>
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-details.html">blog-details</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="login.html">login</a></li>
                                            <li><a href="register.html">register</a></li>
                                            <li><a href="my-account.html">my-account</a></li>
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="compare.html">compare</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="safe-area">
                        <a href="product-details.html">sales off</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- main-menu-area-end -->
    <!-- mobile-menu-area-start -->
    <div class="mobile-menu-area d-lg-none d-block fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul id="nav">
                                <li><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home-1</a></li>
                                        <li><a href="index-2.html">Home-2</a></li>
                                        <li><a href="index-3.html">Home-3</a></li>
                                        <li><a href="index-4.html">Home-4</a></li>
                                        <li><a href="index-5.html">Home-5</a></li>
                                        <li><a href="index-6.html">Home-6</a></li>
                                        <li><a href="index-7.html">Home-7</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-details.html">Book</a>
                                    <ul>
                                        <li><a href="shop.html">Tops & Tees</a></li>
                                        <li><a href="shop.html">Polo Short Sleeve</a></li>
                                        <li><a href="shop.html">Graphic T-Shirts</a></li>
                                        <li><a href="shop.html">Jackets & Coats</a></li>
                                        <li><a href="shop.html">Fashion Jackets</a></li>
                                        <li><a href="shop.html">Crochet</a></li>
                                        <li><a href="shop.html">Sleeveless</a></li>
                                        <li><a href="shop.html">Stripes</a></li>
                                        <li><a href="shop.html">Sweaters</a></li>
                                        <li><a href="shop.html">hoodies</a></li>
                                        <li><a href="shop.html">Heeled sandals</a></li>
                                        <li><a href="shop.html">Polo Short Sleeve</a></li>
                                        <li><a href="shop.html">Flat sandals</a></li>
                                        <li><a href="shop.html">Short Sleeve</a></li>
                                        <li><a href="shop.html">Long Sleeve</a></li>
                                        <li><a href="shop.html">Polo Short Sleeve</a></li>
                                        <li><a href="shop.html">Sleeveless</a></li>
                                        <li><a href="shop.html">Graphic T-Shirts</a></li>
                                        <li><a href="shop.html">Hoodies</a></li>
                                        <li><a href="shop.html">Jackets</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-details.html">Audio books</a>
                                    <ul>
                                        <li><a href="shop.html">Tops & Tees</a></li>
                                        <li><a href="shop.html">Sweaters</a></li>
                                        <li><a href="shop.html">Hoodies</a></li>
                                        <li><a href="shop.html">Jackets & Coats</a></li>
                                        <li><a href="shop.html">Long Sleeve</a></li>
                                        <li><a href="shop.html">Short Sleeve</a></li>
                                        <li><a href="shop.html">Polo Short Sleeve</a></li>
                                        <li><a href="shop.html">Sleeveless</a></li>
                                        <li><a href="shop.html">Sweaters</a></li>
                                        <li><a href="shop.html">Hoodies</a></li>
                                        <li><a href="shop.html">Wedges</a></li>
                                        <li><a href="shop.html">Vests</a></li>
                                        <li><a href="shop.html">Polo Short Sleeve</a></li>
                                        <li><a href="shop.html">Sleeveless</a></li>
                                        <li><a href="shop.html">Graphic T-Shirts</a></li>
                                        <li><a href="shop.html">Hoodies</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-details.html">children’s books</a>
                                    <ul>
                                        <li><a href="shop.html">Shirts</a></li>
                                        <li><a href="shop.html">Florals</a></li>
                                        <li><a href="shop.html">Crochet</a></li>
                                        <li><a href="shop.html">Stripes</a></li>
                                        <li><a href="shop.html">Shorts</a></li>
                                        <li><a href="shop.html">Dresses</a></li>
                                        <li><a href="shop.html">Trousers</a></li>
                                        <li><a href="shop.html">Jeans</a></li>
                                        <li><a href="shop.html">Heeled sandals</a></li>
                                        <li><a href="shop.html">Flat sandals</a></li>
                                        <li><a href="shop.html">Wedges</a></li>
                                        <li><a href="shop.html">Ankle boots</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">blog-details</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-details.html">Page</a>
                                    <ul>
                                        <li><a href="shop.html">shop</a></li>
                                        <li><a href="shop-list.html">shop list view</a></li>
                                        <li><a href="product-details.html">product-details</a></li>
                                        <li><a href="product-details-affiliate.html">product-affiliate</a></li>
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog-details</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="my-account.html">my-account</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area-end -->
</header>
<!-- header-area-end -->
<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="{{ route('bookss.index') }}">Home</a></li>
                        <li><a href="#" class="active">cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- entry-header-area-start -->
<div class="entry-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="entry-header-title">
                    <h2>Cart</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cart-main-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="#">
                    <div class="table-content table-responsive mb-15 border-1">
                        <!-- Cart View -->

                        <table>
                            <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                            </thead>
                            <tbody id="cart-items">
                            <!-- This section will be dynamically populated with cart items -->
                            </tbody>
                        </table>

                        <script>
                            // Retrieve cart data from Session Storage
                            const cartData = JSON.parse(sessionStorage.getItem('cart')) || {};

                            // Get the cart items container
                            const cartItemsContainer = document.getElementById('cart-items');

                            // Loop through cart data and generate HTML for each item
                            for (const productId in cartData) {
                                if (cartData.hasOwnProperty(productId)) {
                                    const product = cartData[productId];

                                    // Create a table row for each cart item
                                    const row = document.createElement('tr');

                                    // Fill in the row with product details
                                    row.innerHTML = `
                <td class="product-thumbnail"><a href="#"><img src="{{ asset('storage/${product.image}') }}" alt="${product.name}"></a></td>
                <td class="product-name"><a href="#">${product.name}</a></td>
                <td class="product-quantity"><input type="number" value="${product.quantity}" data-product-id="${productId}"></td>
                <td class="product-remove"><a href="#" class="remove-item" data-product-id="${productId}"><i class="fa fa-times"></i></a></td>
            `;

                                    // Append the row to the cart items container
                                    cartItemsContainer.appendChild(row);
                                }
                            }

                            // Attach event listeners for updating quantity and removing items
                            const quantityInputs = document.querySelectorAll('.product-quantity input');
                            const removeButtons = document.querySelectorAll('.remove-item');

                            quantityInputs.forEach(input => {
                                input.addEventListener('change', updateQuantity);
                            });

                            removeButtons.forEach(button => {
                                button.addEventListener('click', removeItem);
                            });

                            // Function to update quantity
                            function updateQuantity(event) {
                                const productId = event.target.getAttribute('data-product-id');
                                const newQuantity = parseInt(event.target.value, 10);

                                if (!isNaN(newQuantity) && newQuantity >= 0) {
                                    cartData[productId].quantity = newQuantity;
                                    sessionStorage.setItem('cart', JSON.stringify(cartData));
                                } else {
                                    event.target.value = cartData[productId].quantity;
                                }
                            }

                            // Function to remove item
                            function removeItem(event) {
                                const productId = event.target.getAttribute('data-product-id');
                                delete cartData[productId];
                                sessionStorage.setItem('cart', JSON.stringify(cartData));

                                // Refresh the cart UI
                                cartItemsContainer.innerHTML = '';
                                for (const productId in cartData) {
                                    if (cartData.hasOwnProperty(productId)) {
                                        const product = cartData[productId];

                                        const row = document.createElement('tr');
                                        row.innerHTML = `
                    <td class="product-thumbnail"><a href="#"><img src="{{ asset('storage/${product.image}') }}" alt="${product.name}"></a></td>
                    <td class="product-name"><a href="#">${product.name}</a></td>
                    <td class="product-quantity"><input type="number" value="${product.quantity}" data-product-id="${productId}"></td>
                    <td class="product-remove"><a href="#" class="remove-item" data-product-id="${productId}"><i class="fa fa-times"></i></a></td>
                `;
                                        cartItemsContainer.appendChild(row);
                                    }
                                }

                                // Attach event listeners again
                                quantityInputs.forEach(input => {
                                    input.addEventListener('change', updateQuantity);
                                });

                                removeButtons.forEach(button => {
                                    button.addEventListener('click', removeItem);
                                });
                            }
                        </script>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- cart-main-area-end -->
<!-- footer-area-start -->
<footer>
    <!-- footer-top-start -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-top-menu bb-2">
                        <nav>
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="#">Enable Cookies</a></li>
                                <li><a href="#">Privacy and Cookie Policy</a></li>
                                <li><a href="#">contact us</a></li>
                                <li><a href="#">blog</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top-start -->
    <!-- footer-mid-start -->
    <div class="footer-mid ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-footer br-2 xs-mb">
                                <div class="footer-title mb-20">
                                    <h3>Products</h3>
                                </div>
                                <div class="footer-mid-menu">
                                    <ul>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="#">Prices drop </a></li>
                                        <li><a href="#">New products</a></li>
                                        <li><a href="#">Best sales</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-footer br-2 xs-mb">
                                <div class="footer-title mb-20">
                                    <h3>Our company</h3>
                                </div>
                                <div class="footer-mid-menu">
                                    <ul>
                                        <li><a href="contact.html">Contact us</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">Stores</a></li>
                                        <li><a href="register.html">My account </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-footer br-2 xs-mb">
                                <div class="footer-title mb-20">
                                    <h3>Your account</h3>
                                </div>
                                <div class="footer-mid-menu">
                                    <ul>
                                        <li><a href="contact.html">Addresses</a></li>
                                        <li><a href="#">Credit slips </a></li>
                                        <li><a href="#"> Orders</a></li>
                                        <li><a href="#">Personal info</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="single-footer mrg-sm">
                        <div class="footer-title mb-20">
                            <h3>STORE INFORMATION</h3>
                        </div>
                        <div class="footer-contact">
                            <p class="adress">
                                <span>My Company</span>
                                Your address goes here.
                            </p>
                            <p><span>Call us now:</span> 0123456789</p>
                            <p><span>Email:</span>  demo@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-mid-end -->
    <!-- footer-bottom-start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row bt-2">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="copy-right-area">
                        <p>&copy; 2022 <strong> Koparion </strong> Mede with ❤️ by <a href="https://hasthemes.com/" target="_blank"><strong>HasThemes</strong></a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="payment-img text-end">
                        <a href="#"><img src="../assets/img/1.png" alt="payment" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- In your Blade template (cart.blade.php) -->

    <!-- footer-bottom-end -->
</footer>
<!-- footer-area-end -->


<!-- all js here -->
<!-- jquery latest version -->
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>


<!-- bootstrap js -->
<script src="../assets/js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="../assets/js/owl.carousel.min.js"></script>
<!-- meanmenu js -->
<script src="../assets/js/jquery.meanmenu.js"></script>
<!-- wow js -->
<script src="../assets/js/wow.min.js"></script>
<!-- jquery.parallax-1.1.3.js -->
<script src="../assets/js/jquery.parallax-1.1.3.js"></script>
<!-- jquery.countdown.min.js -->
<script src="../assets/js/jquery.countdown.min.js"></script>
<!-- jquery.flexslider.js -->
<script src="../assets/js/jquery.flexslider.js"></script>
<!-- chosen.jquery.min.js -->
<script src="../assets/js/chosen.jquery.min.js"></script>
<!-- jquery.counterup.min.js -->
<script src="../assets/js/jquery.counterup.min.js"></script>
<!-- waypoints.min.js -->
<script src="../assets/js/waypoints.min.js"></script>
<!-- plugins js -->
<script src="../assets/js/plugins.js"></script>
<!-- main js -->
<script src="../assets/js/main.js"></script>
<script>
    const cartItemCount = document.getElementById('cart-item-count');
    const cartProducts = document.getElementById('cart-products');
    const cartTotal = document.getElementById('cart-total');

    // Function to update the cart UI
    function updateCartUI() {
        const cartData = JSON.parse(sessionStorage.getItem('cart')) || {};
        let total = 0;
        let itemCount = 0;

        cartProducts.innerHTML = ''; // Clear existing cart items

        for (const productId in cartData) {
            const product = cartData[productId];
            const itemTotal = product.quantity * parseFloat(product.price);
            total += itemTotal;
            itemCount += product.quantity;

            // Create and append cart item HTML
            const cartItem = document.createElement('div');
            cartItem.classList.add('single-cart');
            cartItem.innerHTML = `
                <div class="cart-img">
                    <a href="#"><img src="{{ asset('storage/${product.image}') }}" alt="book" /></a>
                </div>
                <div class="cart-info">
                    <h5><a href="#">${product.name}</a></h5>
                    <p>${product.quantity} x </p>
                </div>
                <div class="cart-icon">
                    <a href="#" class="remove-item" data-product-id="${productId}"><i class="fa fa-remove"></i></a>
                </div>
            `;
            cartProducts.appendChild(cartItem);
        }

        cartItemCount.textContent = itemCount;
        cartTotal.textContent = `£${total.toFixed(2)}`;

        const removeButtons = document.querySelectorAll('.remove-item');
        console.log(removeButtons);
        removeButtons.forEach(button => {
            button.addEventListener('click', removeFromCart);
        });
    }
    function removeFromCart(event) {

        const productId = event.target.getAttribute('data-product-id');
        console.log(productId); // Add this line

        const cartData = JSON.parse(sessionStorage.getItem('cart')) || {};

        if (cartData[productId]) {
            delete cartData[productId];
            sessionStorage.setItem('cart', JSON.stringify(cartData));
            updateCartUI(); // Update the cart UI after removing item
        }
    }

    // Call updateCartUI to initialize the cart UI
    updateCartUI();
</script>

</body>

<!-- Mirrored from htmldemo.net/koparion/koparion/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Aug 2023 20:12:14 GMT -->
</html>
