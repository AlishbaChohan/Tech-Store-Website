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
    <title>Contact Us</title>
</head>
<body>
    <div class="main">
   
        <?php include("menu+head.php") ?>
    
         <div class="content3">

            <div id="contactform">
                 <h1>CONTACT US</h1>
                    
                    <!-- <div style="margin: auto; padding-left: 25%;"> -->
                   
                    
                    <form style="margin: auto; padding-left:25%;">
                    <label> FULL NAME: </label><input type="text" id="fname2" required><br>
                    <label> E-MAIL: </label><input type="text" id="email2" required><br><br>


                    <label style="margin-top:10px;"> CONCERN: </label><br>
                    
                    <input type="radio" name="req" value="Feedback" id="r1">
                    <label for="r1" style="color: black;">Feedback</label>


                    <br><input type="radio" value="Complaint" name="req" id="r2">
                    <label for="r2"  style="color: black;">Complaint</label><Br><br>


                        <textarea style="width: 300px;height:100px;"> </textarea>
                   
                </form><br>
                <button id="submit" style=" background-color:#df39bc;margin-left:25%;" onclick="respo()">Submit</button><br><br>
            </div>

           <br>

            <div id="response">
            
                 <h1>FEEDBACK SUBMITTED!</h1>
                 <p>Thankyou for you valueable feedback !</p>
                 <p>We appreciate your time you took out to compliment our services!</p>

        </div> <br>

        
        <div id="response2">
            
            <h1>COMPLAIN SUBMITTED!</h1>
            <p>Your Complain have been submitted!</p>
            <p>Our customer support department will reach you soon!</p>

       </div>
        

    </div>
<br><br><br><br><br><br>
    <div class="footer">All Rights reserved.<br><br><i class="fab fa-facebook-f"></i><i class="fab fa-twitter"></i><i class="fab fa-whatsapp"></i></div>

</div>

    
</body>
</html>