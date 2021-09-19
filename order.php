<!DOCTYPE html>
<html >
<head>
    <link rel="stylesheet" href="css/oder.css">
    <title>Oder</title>
</head>
<body>
      <section class = "navbar">
        <div class ="container">

        <div class ="logo">
                <img src="image/logo.png" alt="restaurant logo" class = "img-responisive" >
        </div>

        <div class = "menu text-right"> 
                <ul>
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="food.php">Food</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            
            
            </div>

            <div class= "clearfix"></div>
        </div>
    </section>
      <!--  -->
      <div id="main">
         <div class="main_acc" id="logo1">
             <img src="image/bg.jpg" alt="lich" width="400" height="200">
         </div>
         <div class="main_acc" id="logo2">
             <div id="fill">
                 <p>Fill this form to confirm your oder.</p>
             </div>
             <div id="select">
                 <form action="">
                   <fieldset >
                       <legend>Select Food</legend>
                      <div id="img"> 
                          <img src="image/menu-pizza.jpg" alt="photo" width="120" height="120">
                      </div>
                      <div id="price">
                       <p>Food Title</p>
                       <p>$2.3</p>
                       <p>Quantity</p>
                       <input type="number" id="quantity"  min="1" max="20" value="1" >
                    </div>
                   </fieldset>
                </form>
             </div>
             <div id="Delivery">
             <form action="" method="post">
                      <fieldset>
                          <legend>Delivery Details</legend>
                          <label for="">Full Name</label>
                          <br>
                          <input type="text" placeholder="  E.g.Vijay Thapa">
                          <br>
                          <label for="">Phone Number</label>
                          <br>
                          <input type="text" placeholder="  E.g.9843xxxxxx">
                          <br>
                          <label for="">Email</label>
                          <br>
                          <input type="text" placeholder="  E.g.hi@vijaythapa.com">
                          <br>
                        <label for="">Address</label>
                        <br>
                          <textarea name="address" id="" cols="30" rows="10"></textarea> 
                          <button type="submit" id="submit"> Confirm Oder </button>
                      </fieldset>
                   

              </form>
             </div>
         </div>
          </div>
          <section class ="social text-center">
    <div class ="container">
        <ul>
            <li>
                <a href = "#"><img src="https://img.icons8.com/color/48/000000/facebook-new.png"/></a>
            </li>
            <li>
                <a href = "#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/></a>
            </li>
            <li>
                <a href = "#"><img src="https://img.icons8.com/color/50/000000/twitter.png"/></a>
            </li>
        </ul>
            </div>
    </section>
    <section class ="footer">
    <div class ="container text-center">
    <p>All rights reserved.</a></p>
            </div>
    </section>
    
</body>
</html>