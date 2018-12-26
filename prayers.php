<!DOCTYPE html
    PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta content="Webmaster" name="author" />
        <meta content="no-cache" http-equiv="Cache-Control" />
        <meta content="Sacred Heart - St Marys Roman Catholic Church" name="description" />
        <title>Prayers - Sacred Heart - St Marys</title>
        <link rel="icon" href="./images/SHSM.ico">
        <link href="main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="colorschemes/colorscheme7/colorscheme.css" media="all" rel="stylesheet" type="text/css" />
        <link href="style.css" media="all" rel="stylesheet" type="text/css" /><script type="text/javascript" src="live_tinc.js"></script>
        <style type="text/css">.auto-style1 {
                font-weight: normal;
            }
            .auto-style2 {
                font-size: x-large;
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
                        <?php
                        displayArray("./images/prayers");
                        ?>
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
