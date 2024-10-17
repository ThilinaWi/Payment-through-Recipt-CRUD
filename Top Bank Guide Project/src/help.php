<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Bank Guide</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="help.css">
    <script src="help.js"></script>
</head>
<body>
    <header class="head1">
        <div class="logo">
            <img src="Images/logoicon.png" alt="Logo">
            <h1>Online Examination Platform</h1>
        </div>
        <div class="user-section">
            <span class="user-name">User Name</span>
            <img src="Images/usericon.png" alt="User Icon" class="user-icon">
        </div>
    </header>
    <header  class="head2">
        <nav>
            <ul class="nav-menu">
                <li><a href="index.html"><img src="Images/homeicon.png" alt="Home Icon"> Home</a></li>
                <li><a href="exam.html"><img src="Images/examicon.png" alt="Exam Icon"> Exam</a></li>
                <li><a href="result.html"><img src="Images/result.png" alt="Result Icon"> Result</a></li>
                <li><a href="payment.html"><img src="Images/savepay1.png" alt="Payment Icon"> Payment</a></li>
                <li><a href="library.html"><img src="Images/libraryicon.png" alt="Library Icon"> Library</a></li>
                <li><a href="help.html"><img src="Images/help.png" alt="Help Icon"> Help</a></li>
            </ul>
        </nav>
    </header>
    <h2>INQUIRY FORM</h2>
    <div class="form">
        <form method="post" action ="insert.php">
            <fieldset>

                <label for="uid">User ID:</label><br>
                <input type="text" id="uid" name="uid"><br>
                <br>
                
                <label for="fname">Your name:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <br>

                <label for="nic">Your NIC:</label><br>
                <input type="text" id="nic" name="nic"><br>
                
                <label for="Email">Your Email:</label><br>
                <input type="text" id="Email" name="Email"><br>
                <br>
                
                <label for="Cnum">Contact number:</label><br>
                <input type="text" id="Cnum" name="Cnum"><br>
            
                <label for="problem">Describe your problem:</label><br>
                <textarea id="problem" name="problem_text" rows="4" cols="80"></textarea><br>
            </fieldset>
            
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
<footer>
    <div class="footer-container">
        <div class="logo">
            <img src="Images/logoicon.png" alt="Logo">
        </div>

        <div class="footer-follow-us">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <a href="#"><img src="Images/fbicon.png" alt="Facebook"></a>
                <a href="#"><img src="Images/whatsappicon.png" alt="WhatsApp"></a>
                <a href="#"><img src="Images/youtube.png" alt="YouTube"></a>
                <a href="#"><img src="Images/tiwitter.png" alt="Twitter"></a>
            </div>
        </div>

        <div class="footer-links">
            <a href="aboutus.html"><img src="Images/about.png" alt="About Icon">About Us</a>
            <a href="t&c.html"><img src="Images/t&c.png" alt="t&c Icon">Terms and Conditions</a>
            <a href="contactus.html"><img src="Images/callicon.png" alt="Contact Icon">Contact Us</a>
        </div>
    </div>

    <div class="footer-copyright">
        <p>Copyright 2024 © TopBankGuide. All Rights Reserved.</p>
    </div>
</footer>  


</body>
</html>