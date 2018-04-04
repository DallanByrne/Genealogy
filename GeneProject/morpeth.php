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
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#news">Morpeth</a></li>
        <li><a href="#contact">Soundex</a></li>
        <li style="float: right;"><a href=''>Sign Up</a></li>
        <li style="float: right;"><a href=''>Login</a></li>
    </ul>

    <div id="content">

        <div class="intro">
            
            <h2>Morpeth Finder</h2>
            <div id=morth>
                <img src="img/Morpeth_rte_roll.jpg">
                <p>The Morpeth Finder is a website which enables the user to search through the names of the Morpeth role. Logging in to
                    site you can submit a CSV file and using an algorithm, the website can narrow down where the name occurs on the scroll.
                </p>

                <a href="http://postgis.cs.nuim.ie/morpethfinder/home.php">
                <button>Take me there!</button>
                </a>
            </div>
        </div>

    </div>


    </body>
</html>