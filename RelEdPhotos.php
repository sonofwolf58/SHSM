<!DOCTYPE html
  PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <title>Religious Education Photos</title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta content="Webmaster" name="author" />
	<meta content="Sacred Heart - St Marys Roman Catholic Church" name="description" />
	<meta content="no-cache" http-equiv="Cache-Control" />
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
    <body>
        <?php include_once("../../siteCommon.php");
        // include the site common function file
        ?>
        <p>&nbsp;</p>
        <h2>If you wish to download the picture,<br>RIGHT click ON THE IMAGE and select Save Image As...<br>Then you can save it to your local drive.</h2>
        <div>
            <?php include_once("./processPhotosScript-v01.php");
            displayThumbSelectPhoto("./");
            ?>  
        </div>
        <hr />
        <p>&nbsp;</p>
        <div id="footer">
        <div id="footer_text">
        <?php
            displayFooterText();
        ?>
        </div>
        </div>
    </body>
</html>
