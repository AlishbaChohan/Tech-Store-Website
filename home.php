<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <script src="java.js"></script>
    <link rel="stylesheet" href="styles.css">

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
    
         <div class="content">
             <h1 id="ani">New Arrivals</h1>
             <table width="70%" cellspacing="15px" border="1" cell-pading="0" height="450">
                 <tr>
                     <td class="t" id="t1">
                         <img src="2.jpeg" class="abc"><br>
                         <h1 align="center" style="color:#349ff6 ;">HOME CONTROLLER</h1>
                         <div class="details1" align="center">
                             No need to worry about getting up to turn off lights or to lock doors!<br>
                             Control your home on your fingertips only!<br>
                             Price:100,000 pkr only

                         </div>

                     </td>
                    
                     
                 </tr>
                 <tr>
                    <td class="t" id="t2">
                        <img src="3.jpg" class="abc">
                        <h1 align="center" style="color:#349ff6 ;">STEREO</h1>
                        <div class="details2" align="center">
                            Enjoy the beat with the super Stereo System!<br>
                            Exhale Stress Out! Inhale Music In!<br>
                            Price:150,000 pkr only

                        </div>

                    </td>
                   
                </tr>

                <tr>
                    <td class="t" id="t3">
                        <img src="4.jpg" class="abc">
                        <h1 align="center" style="color:#349ff6 ;">ROOM FRANGRANCER</h1>
                        <div class="details3" align="center">
                            Enjoy the refreshing scents at your home!<br>
                            Give your home the comfy vibes!<br>
                            Price:80,000 pkr only

                        </div>

                    </td>
                   
                </tr>






             </table>
         </div>
         <?php include("footer.php") ?>
    </div>
    
</body>
</html>