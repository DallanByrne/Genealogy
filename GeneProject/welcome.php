<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="CSS/designer.css">
    <title>Irish Genealogical Data Science</title>
</head>


<body style="background-color: #fff;">
    
    
    
    <div id="opener">
        <br />
        <div class="welcome"><h1>Irish Genealogical Data Science</h1></div>
        
        <div class="slide show" style="background-image: url('img/Country_bridge.jpg');"></div>
    <div class="slide" style="background-image: url('img/Cliffs-of-Moher-3.jpg');"></div>
    <div class="slide" style="background-image: url('img/irish-heritage-main.jpg');"></div>
    
    </div>
    
    
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
        var index = 0;
        $imageEls = $('.product-slide-show .slide'); // Get the images to be cycled.
        var interval;

        function cycleBackgrounds() {
        var index = 0;
    
        $imageEls = $('#opener .slide'); // Get the images to be cycled.
    
        setInterval(function () {
            // Get the next index.  If at end, restart to the beginning.
            index = index + 1 < $imageEls.length ? index + 1 : 0;
            
            // Show the next
            $imageEls.eq(index).addClass('show');
            
            // Hide the previous
            $imageEls.eq(index - 1).removeClass('show');
        }, 6000);
    };
    
    // Document Ready.
    $(function () {
        cycleBackgrounds();
    });
    </script>


        <ul>
            <li><a class="active" href="#content">Home</a></li>
            <li><a href="morpeth.php#morth">Morpeth</a></li>
            <li><a href="soundex.html">Irish Soundex</a></li>
            <li><a href="census.php">Census Archives</a></li>
            <li style="float: right;"><a href=''>Sign Up</a></li>
            <li style="float: right;"><a href=''>Login</a></li>
        </ul>

    <div id="content">

        <div class="intro">
            
            <h2>Welcome</h2>
            <img src="img/ireland.jpg">
            <p>We the Irish Genealogical Data Project. Our mission is to give our users access to the most relavent resources to do 
                their own research on their Irish heratage.
            </p>

            <p>By creating an acount with us you have means of storing your findings and leads. Whenever you need them you can reopen 
                the documents and continue.
            </p>
        </div>

        <br>
        <br>

        <div class="split"><h2 style="color:#E0E0E0;">History</h2></div>
        
        <div class="history" style="padding:0px">
            <div class="text-box">
                <p>With a rich and well documented history of the Irish people there are plenty of records available.</p>
                
                <p>The Irish Genealogical Data Project provides you access to findings from the Morpeth roll, census data, Rhode Island and more. </p>
                <p>Plenty of ways to trace back your family tree.</p>
            </div>
            
        </div>
        <div class="split2"></div>

        <br>

        <div class="tech">
            <hr style="border: 0; border-top: 2px solid #00bfff;">
            <h2>Technology</h2>
        
            <img src="img/Maynooth_University.jpg" style="box-shadow: 5px 10px #9F9F9F;">
        
            <p>Our website has compiled many tools, such as Irish Soundex Encoder, into one easily accessable format. 
                We designed the interface to be as user friendly as possible so anyone can start their persuit of knowledge.
            </p>

            <p>These make searching through various records easier using graphs, search functions and more. Many of which were 
                made or suppored by Maynooth University students and staff.
            </p>

        </div>

        <div class="account">
            <hr class="flare">
            <p>Consider creating an account with us to have the same access.</p>
            <P style="margin-left:7%; margin-right:7%;">By creating an account you can store your findings and research in one place. 
                Sign up now to have the full experience of our services.</P>
            <br>
            <br>
            <button>Sign up</button>
        </div>
    </div>
</body>
</html>
