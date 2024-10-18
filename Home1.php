<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent a Vehicle Today!</title>
    <style>
        /* Basic styling for the page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Style for the navigation bar */
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 1em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            font-size: 1.5em;
            font-weight: bold;
        }

        /* Style for the navigation links */
        .nav-links {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .nav-links li {
            margin-left: 1em;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
        }

        .account-icon img {
            width: 30px;
            vertical-align: middle;
            margin-right: 10px;
        }

        .account-icon a {
            color: #fff;
            text-decoration: none;
            margin-left: 10px;
        }

        /* Main content area */
        .main-content {
            padding: 2em;
            text-align: center;
        }

        /* Footer styling */
        footer {
            background-color: #f0f0f0;
            padding: 1.5em;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* About us section in footer */
        .about-us h2 {
            margin: 0;
        }

        .about-us p {
            margin: 0.5em 0;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="navbar-left">
            <div class="logo"></div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Bookings</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </div>
        <div class="account-icon">
            <img src="account-logo.png" alt="Account" />
            <a href="OEP_registration_page.html" target="_self">Register</a>
            <a href="OEP_sign_in.html" target="_self">Sign-In</a>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="main-content" id="page-content">
        <h1>Welcome to Our Vehicle Rental Service</h1>
        <p>Find the perfect vehicle for your next trip. Browse our selection of cars, SUVs, and more!</p>
    </div>

    <!-- About Us Section in Footer -->
    <footer id="footer">
        <div class="about-us">
            <h2>About Us</h2>
            <p>We are a leading vehicle rental company offering a wide range of cars, SUVs, and more.</p>
            <p>Our mission is to provide the best rental experience with competitive prices and top-notch customer service.</p>
            <p>Whether you're looking for a short-term rental or a long-term vehicle solution, we have you covered. Thank you for choosing us!</p>
        </div>
    </footer>

</body>
</html>
