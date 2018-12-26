<!DOCTYPE html
    PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta content="Webmaster" name="author" />
        <meta content="no-cache" http-equiv="Cache-Control" />
        <meta content="Sacred Heart - St Marys Roman Catholic Church" name="description" />
        <title>Events - Sacred Heart - St Marys</title>
        <link rel="icon" href="./images/SHSM.ico">
        <link href="main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="colorschemes/colorscheme7/colorscheme.css" media="all" rel="stylesheet" type="text/css" />
        <link href="style.css" media="all" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="live_tinc.js"></script>
                <style type="text/css">.auto-style1 {
                text-align: center;
            }
            .auto-style2 {
                text-align: left;
            }
            .auto-style3 {
                color: #B55843;
                font-size: medium;
            }
            .auto-style4 {
                color: #B55843;
                font-size: small;
            }
            .auto-style9 {
                line-height: 1.3;
                color: #00f;
                font-family: tahoma, verdana, arial, sans-serif;
                font-style: normal;
                font-size: x-large;
                font-weight: bold;
                text-decoration: none;
                text-align: center;
                margin-left: 0;
                margin-right: 0;
                margin-top: 5px;
                margin-bottom: 20px;
                padding: 0;
            }
            .auto-style11 {
                font-size: large;
                color: #ff0000;
            }
            .auto-style12 {
                font-size: large;
                color: #0000FF;
            }
            .auto-style17 {
                color: #B22B6B;
            }
            .auto-style18 {
                color: #000080;
            }
            .auto-style24 {
                color: #0000FF;
            }
            .auto-style27 {
                color: #008000;
                font-size: large;
            }
            .auto-style29 {
                color: #008000;
            }
            .auto-style32 {
                color: #000080;
                font-size: large;
            }
            .auto-style33 {
                font-size: medium;
            }
            .auto-style34 {
                color: #0000FF;
                text-align: center;
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
                        <div class="auto-style9" id="content_container">
                            <div class="auto-style1">

                            <hr /><!-- Upcoming Events or Announcements -->
                            <p align="center" class="auto-style18">*** Events ***</p>
                            <?php
                            displayArray("./images/eventsPageImages");
                            ?>
                            &nbsp;
                            &nbsp;
                            &nbsp;  
                            </div>
                        </div>
                        <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                    </div>
                </div>
            </div>
            &nbsp;
            <div id="footer">
                <div id="footer_text">
                    <?php
                    displayFooterText();
                    ?></div>
            </div>
        </div>
    </body>
</html>
