<!DOCTYPE html>
<html >
<head>
    <title>Restaurant Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="header">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li>
                        <a href="foods.html">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
            </div>
            <div class="clearfix"></div>
    </div>

    <div class="food-search text-center">
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
    </div>

    <div id="categories">
            <h2 class="text-center">Explore Foods</h2>
            <a href="category-foods.html">
            <div class="box-3 float-container">
                <img src="images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">
                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>
            <a href="#">
            <div class="box-3 float-container">
                <img src="images/burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>
            <a href="#">
            <div class="box-3 float-container">
                <img src="images/momo.jpg" alt="Momo" class="img-responsive img-curve">
                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a>
            <div class="clearfix"></div>
    </div>
</body>
</html>