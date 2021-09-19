<!DOCTYPE html>
<html>
<head>
<title>wow food</title>
<link rel="stylesheet" href="css/style.css">
<style>
    .header{
        height: 100px;
    }
    .logo{
        float:left;
        width: 100%;
        height: 100%;
    }
    .menu{
        float: right;
        width: 20%;
        height: 80%;
    }
    .categories{
        height: 100px;
    }
    .Pizza{
        float:left;
        width: 100%;
        height: 100%;
    }
    .Burger{
        float: center;
    }
    .Momo{
        float: right;
    }
</style>    
</head>

<body>

    <div id="header">
        <div class="logo">
            <img src="image/logo.png" alt="" width="10%" class="img-responsive" >
        <div>
        <div class="menu">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Foods</a>
            <a href="#">Contact</a>
        </div>
    </div>
    <div class="clear-float">    
    </div>
    <div id="find">
        <div class="search">
            <form action="search_food">
                <label for="search"></label>
                <input type="search" id="" name="" placeholder="Search for Food.." required
                style="width: 100%;; padding:10px">
                <input type="submit" value="Search"style="width: 100%;; padding:10px">
            </form>
        </div>
    </div>
    <div id="categories">
            <h2 class="text-center">Explore Foods
            </h2>
            <a href="category-foods.html">
                <div class="Pizza">
                    <img src="image/pizza.jpg" alt="Pizza" class="">
                    <h3 class="">Pizza</h3>
                </div>
            </a>
            <a href="Burger.html">
                <div class="Burger">
                    <img src="image/burger.jpg" alt="Burger" class="">
                    <h3 class="">Burger</h3>
                </div>
            </a>
            <a href="Momo.html">
                <div class="Momo">
                    <img src="image/momo.jpg" alt="Momo" class="">

                    <h3 class="">Momo</h3>
                </div>
            </a>
            <div class="clearfix">
            </div>
    </div>
</body>
</html>