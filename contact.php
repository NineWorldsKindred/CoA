<!DOCTYPE HTML>
<html>
  <head>
    <title>Central Ohio Asatru Community :: Contact Us</title>   
    <meta name="description" content="Central Ohio Asatru Home Page" />
    <meta name="keywords" content="Asatru, Ohio, Heathens, Columbus, Central Ohio, Heathen" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-precomposed.png">
    <link rel="stylesheet" type="text/css" href="css/coa.css" media="Screen" />
    <link rel="stylesheet" type="text/css" href="css/coa-hh.css" media="handheld" />
    <!--[if IE]><link rel="stylesheet" href="fix-ie.css" type="text/css" media="screen, projection" /><![endif]-->
  </head>
  <body>
    <div id="wrapper">
      <div id="face">
        <div id="flag" onclick="location.href='index.html';"></div>
        <div id="header">
          <div id="header4"></div>
          <div id="menu">
            <div class="menulink-leading"><a href="about.html" title="About Us">ABOUT US</a></div><div class="menulink">&#124;</div>
            <div class="menulink"><a href="asatru.html" title="About Asatru">ABOUT ASATRU</a></div><div class="menulink">&#124;</div>
            <div class="menulink"><span class="on">CONTACT US</span></div><div class="menulink">&#124;</div>
            <div class="menulink-ending"><a href="links.html" title="External Resources">RESOURCES</a></div>
          </div>
        </div>
        <div id="content">
        <div class="clear"></div>
        <h1>Contact Us</h1>
        <div class="round">
            <div id="contact-area">

            <form method="post" action="verify.php">

            <label for="Name">Name:</label>
            <input type="text" name="Name" id="Name" size="35" /><br />

            <label for="Email">Email:</label>
            <input type="text" name="Email" id="Email" size="45"><br />

            <label for="Message">Message:</label><br />
            <textarea name="Message" rows="7" cols="50" id="Message"></textarea>

            <div class="clear"></div>

            <script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6LfLSc8SAAAAAN8l4lUtGeI1aZIXlTFJ_Y0DYnHE">
            </script>
            <noscript>
            <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LfLSc8SAAAAAN8l4lUtGeI1aZIXlTFJ_Y0DYnHE" height="300" width="500" frameborder="0">
            </iframe><br/>
            <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
            <input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
            </noscript>
            <script type="text/javascript">
            var RecaptchaOptions = {
            theme : 'white'
            };
            </script>

            <?php
                require_once('scripts/recaptchalib.php');
                $publickey = "6LfLSc8SAAAAAN8l4lUtGeI1aZIXlTFJ_Y0DYnHE";
                echo recaptcha_get_html($publickey);
            ?>

            <input type="submit" class="submit-button" value="Submit" />
            </div>
        </div>
        <div class="spacer"></div>
        </div>
        <div id="footer">
            <a href="index.html" title="Home">HOME</a> &nbsp; &#124; &nbsp;
            <a href="about.html" title="About Us">ABOUT US</a> &nbsp; &#124; &nbsp;
            <a href="asatru.html" title="Abotu Asatru">ABOUT ASATRU</a> &nbsp; &#124; &nbsp;
            <a href="contact.php" title="Contact Us">CONTACT US</a> &nbsp; &#124; &nbsp;
            <a href="links.html" title="External Resources">RESOURCES</a>
        </div>
        </div>
  </body>
</html>
