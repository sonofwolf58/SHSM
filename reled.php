<!DOCTYPE html
    PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta content="Webmaster" name="author" />
        <meta content="Sacred Heart - St Marys Roman Catholic Church" name="description" />
        <meta content="no-cache" http-equiv="Cache-Control" />
        <title>Religious Ed - Sacred Heart - St Marys</title>
        <link rel="icon" href="./images/SHSM.ico">
        <link href="main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="colorschemes/colorscheme7/colorscheme.css" media="all" rel="stylesheet" type="text/css" />
        <link href="style.css" media="all" rel="stylesheet" type="text/css" /><script type="text/javascript" src="live_tinc.js"></script>
        <style type="text/css">.auto-style1 {
                font-family: serif;
                font-weight: normal;
                font-size: medium;
                color: #000000;
            }
            .auto-style18 {
                color: black;
            }
        </style>
    </head>
    <body id="main_body" style="background-image: url('./images/background_image.jpg')">
                
        <?php include_once("./siteCommon.php");
        // include the site common function file
        ?>
        
        <div id="container">
            <div id="header">
                <div id="key_visual"></div>

                <div id="logo"></div>
            </div>

            <div id="main_container">
                <div id="left_column_container">
                    <div id="main_nav_container">
                        <?php
                        displaySelectBar();
                        ?>
                    </div>
                </div>

                <div id="sub_container2">
                    <div id="content_area">
                        <div class="content" id="content_container">
                            <!-- <p class="auto-style1">FAITH FORMATION NEWS</p> -->

                            <h1>Announcements</h1>
                            <?php
                            displayArray("./images/ReligiousEdAnnouncements");
                            ?>
                            <br />
                            <br />
                            <hr />
                            <h1>Religious Education Calendar</h1>
                            <br />
                            <a href="./reledCalendar.php">Click here for Religious Ed Calendar </a>
                            <br />
                            <br />
                            <hr />
                            <h1>FORMS and Information</h1>
                            <br />
                            <a href="./RelEdForms.php">Click here for Religious Education Forms and Information</a>
                            <br />
                            <br />
                            <hr />
                            <h1>Bible Study</h1>
                            <p>Every Thursday from 9:30am - 11:00am.</p>
                            <p>Place: Cow Palace</p>
                            <p>Please join us to learn, share and pray the Bible.</p>
                            <br />
                            <hr />
                            <h1>Adult Faith Formation:</h1>
                            <img alt="RCIA notice" height="300" src="./images/2016.01.03-RCIA.jpg" width="550" />

                            <!-- This section is under development -->
                            <h1>Photos</h1>
                            <a href="./images/ReligiousEdPhotos/RelEdPhotos.php">Click here for Religious Education Photos</a>
                            <br />
                            <br />
                            <hr />

                            <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="footer">
                <div id="footer_text">
                    <?php
                    displayFooterText();
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
