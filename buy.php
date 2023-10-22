<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="java.js"></script>

    <title>AJ Technology</title>


</head>
<body>
    <div class="main">
        <!-- <div class="header"><img src="b2.png"></div> 
         <div class="menu">
           
            <a href="home.html">Home</a> 
            <a href="buy.html">Purchase</a> 
            <a href="contact.html" id="ab">Contact</a> 
            <a href="location.html"  id="abc">Location</a>  
            
            <span class="search"><form><input type="text" placeholder="Search Products "><i class="fas fa-search"></i></form></span>

        </div> -->

        <?php include("menu+head.php") ?>
        
    
         <div class="content2">
             <div class="buy">
                 <h1>BUY NOW</h1>
                 <div class="cart">
                    <i class="fas fa-shopping-cart"></i><span style="font-size: 20px;">Items in your Cart: <span id="cont"> 0 </span></span>
                 </div><br><br>
                 <div class="list">
                     <div class="abcd"><img src="2.jpeg" ><button id="btn" onclick="aj()">Add to Cart</button></div>
                     <div class="abcd"><img src="3.jpg" ><button id="btn" onclick="aj()">Add to Cart</button></div>
                     <div class="abcd"><img src="4.jpg" ><button id="btn" onclick="aj()">Add to Cart</button></div><br>
                     <hr><br>
                     <button id="pay">Proceed to Payment </button><br><br>
                 </div>
             </div><br><br>
             <div id="checkout">
                 <form style="padding-right: 90px;">
                    <label> FULL NAME: </label><input type="text" id="fname" required><br>
                    <label> ADDRESS: </label><input type="text" id="adrename" required><br>
                    <label> CONTACT: </label><input type="text" id="contname" required><br>
                    <label> PAYMENT: </label><input type="radio" name="payname" value="Cash on Delivery" id="radi"><label for="radi">Cash</label>
                    <br><input type="radio" value="Card Payment" name="payname" id="radi2"><label for="radi2">Card</label><Br><br>
                    <center></center>
                    
                    
                 </form>
                 <button  id="pay2" value="Confirm" style="border: none; border-radius: 35px; margin-right: 230px;" > Confirm</button><br><br>

             </div>
             <div class="confirm">
                 <h1>CONGRATULATIONS!</h1>
                 <p>Your order has been Placed Successfully!</p>
                 <p>Details are given below</p>
                <p id="full"><u>Name:</u></p>
                <p id="adree"><u>Address:</u></p>
                <p id="contact"><u>Contact:</u></p>
                <p id="met"><u>Delivery method:</u></p>
                 

             </div><br><br>
         </div>

        <?php include("footer.php") ?>
   </div>
</div>

   </body>
   </html>