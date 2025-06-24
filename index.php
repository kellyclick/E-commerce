<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concepcion Motorcycle parts and accessories Shop</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        body {
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, lightpink, skyblue);
            color: white;
        }

        .navbar-custom {
            background-color: #222;
            padding: 10px 20px;
        }

        .navbar-custom .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .navbar-custom .nav-link {
            color: white;
            margin-right: 15px;
            font-size: 18px;
        }

        .navbar-custom .nav-link:hover {
            background: #6e8efb;
            border-radius: 5px;
        }

        .card:hover {
            transform: scale(1.02);
            transition: transform 0.3s ease;
        }

        .text-dark .fa-2x {
            color: #0d6efd;
        }

        /* Hover dropdown fix */
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        .navbar .dropdown-toggle::after {
            display: none !important;
        }

        /* Optional: Prevent flicker when hovering between link and menu */
        .navbar .dropdown-menu {
            margin-top: 0;
            border: none;
            border-radius: 0;
            background-color: #333;
        }

        .navbar .dropdown-item {
            color: white;
        }

        .navbar .dropdown-item:hover {
            background-color: #6e8efb;
            color: white;

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark py-2">
        <div class="container-fluid justify-content-center">
            <span class="navbar-brand mb-0 h1 text-center">🏍️Concepcion Motorcycle Parts and Accessories Shop</span>
        </div>
    </nav>

    <!-- Second Navbar for Navigation Links -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container-fluid">
            <!-- Toggle button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links and search -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <!-- Left side: search form -->
                <form class="d-flex me-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search products..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
                </form>

                <!-- Right side: nav links -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="cart.html"><i class="fas fa-cart-plus"></i> Cart</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="motorDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Motors
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="motorDropdown">
                            <li><a class="dropdown-item" href="#">Parts</a></li>
                            <li><a class="dropdown-item" href="#">Accessories</a></li>
                            <li><a class="dropdown-item" href="#">Brand</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html"><i class="fas fa-user"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="hero text-center text-white">
        <h1>Big Deals on Motorcycle Parts!</h1>
        <p>Shop the best gears, parts & accessories All in one place!</p>
        <a href="catalog.html" class="btn btn-primary btn-lg mt-2">Shop Now</a>
    </div>

    <div class="container content my-5">

        <h3 class="text-center mb-4"> Featured Products</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4 text-dark">
            <div class="col">
                <div class="card h-100">
                    <img src="img/rim.jpg" class="card-img-top" alt="Colored Rim">
                    <div class="card-body">
                        <h5 class="card-title">Colored Rim</h5>
                        <p class="card-text">₱10,000 - Smooth performance with stylish design.</p>
                    </div>
                    <div class="card-footer text-end">
                        <a href="product-details.html?id=1" class="btn btn-primary">Buy Now</a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/topbox.jpg" class="card-img-top" alt="compartment box">
                    <div class="card-body">
                        <h5 class="card-title">compartment Box</h5>
                        <p class="card-text">₱4,500 - Safety and comfort in one gear.</p>
                    </div>
                    <div class="card-footer text-end">
                        <a href="product-details.html?id=1" class="btn btn-primary">Buy Now</a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/honda engine oil.jpg" class="card-img-top" alt="Honda Engine Oil">
                    <div class="card-body">
                        <h5 class="card-title">Honda Engine Oil</h5>
                        <p class="card-text">₱350 - Keep your engine running smoothly.</p>
                    </div>
                    <div class="card-footer text-end">
                        <a href="product-details.html?id=1" class="btn btn-primary">Buy Now</a>

                    </div>
                </div>
            </div>
        </div>


        <h3 class="text-center my-5">Shop by Category</h3>
        <div class="row text-center text-dark mb-5">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/motor-category.jpg" class="card-img-top" alt="Motorcycles">
                    <div class="card-body">
                        <h5 class="card-title">Motorcycles</h5>
                        <a href="#" class="btn btn-outline-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/parts-category.jpg" class="card-img-top" alt="Parts">
                    <div class="card-body">
                        <h5 class="card-title">Parts</h5>
                        <a href="#" class="btn btn-outline-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/accessories-category.jpg" class="card-img-top" alt="Accessories">
                    <div class="card-body">
                        <h5 class="card-title">Accessories</h5>
                        <a href="#" class="btn btn-outline-primary">View</a>
                    </div>
                </div>
            </div>
        </div>


        <h3 class="text-center text-white mb-4">Why Choose Us?</h3>
        <div class="row text-center text-dark mb-5">
            <div class="col-md-3">
                <i class="fas fa-shipping-fast fa-2x"></i>
                <p>Fast Shipping</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-certificate fa-2x"></i>
                <p>Genuine Products</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-headset fa-2x"></i>
                <p>Great Support</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-star fa-2x"></i>
                <p>Trusted by Riders</p>
            </div>
        </div>

        <h3 class="text-center text-white mb-4">Customer Reviews</h3>
        <div class="row text-dark">
            <div class="col-md-4">
                <div class="card p-3">
                    <p>“Super bilis ng delivery! Sulit ang bayad. ”</p>
                    <small>- John cruz</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <p>“Legit yung parts, original talaga. Highly recommended.”</p>
                    <small>- Mark Santos</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <p>“Customer service is helpful and responsive. Thanks!”</p>
                    <small>- Anne Reyes</small>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
