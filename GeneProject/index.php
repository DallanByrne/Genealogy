<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="CSS/designer.css">
    <title>Irish Genealogical Data Science</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>


<body style="background-color: #fff;">

        <ul>
            <li><a class="active" href="welcome.php#content">Home</a></li>
            <li><a href="morpeth.php#morth">Morpeth</a></li>
            <li><a href="soundex.html">Irish Soundex</a></li>
            <li><a href="census.php">Census Archives</a></li>
            <li style="float: right;"><a href=''>Sign Up</a></li>
            <li style="float: right;"><a href=''>Login</a></li>
        </ul>
        
            <div id="content">
                    
                <div id="sound" style="clear: both;">
                    <div id="x">
                    
                        <img src="img/IrishSoundex_banner.jpg">

                        
                        <form action="" method="post" accept-charset="utf-8">
                            <p>
                                Below is a soundex encoder. It is designed to take in Irish names and produce the sound code for it.
                                 Enter a surname and press submit to get your sound code for further use.
                            </p>
                            <div style="padding: 5%; padding-top:2%; padding-bottom:2%;">
                                Surname: <br>
                                <input type="text" id="text" name="val" />
                                <br />
                                <br />
                                <input type="submit" value="Submit" />

                                <br />
                                <br />

                                
                            </div>
                            
                        </form>
                        <hr>
                        <?php
                        error_reporting(0);
                        header('Content-Type: text/html; charset=utf-8');
                            include 'Soundex.php';
                            //call();
                            
                                $surName = $_POST['val'];
                                //include 'Soundex.php';
                                echo $surName."<br>";
                                $result = GetSoundexResult($surName);
                                //$result = mb_convert_encoding($result, "UTF-8");
                                //$result = accents($result);
                                //echo $result;
                            
                            if( isset($result) ){ echo "<div id='result' style='margin: 5%; width: 20%;'>".
                                "<h3 style='background: yellow;padding: 3%;'>".iconv('UTF-8', 'ISO-8859-1//TRANSLIT//IGNORE', $result)."</h3>"
                                ."</div>"; 
                            }//print the result above the form
                            /*
                                error_reporting(0);
                                $x = $_POST["name"];
                                include 'Soundex.php';
                                echo GetSoundexResult($x);
                            */  

                        ?>
                        </div>
                        
                        
                    </div>
                </div>

            </div>

</body>