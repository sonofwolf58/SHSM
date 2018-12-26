<!DOCTYPE html
  PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta content="Webmaster" name="author" />
	<meta content="no-cache" http-equiv="Cache-Control" />
	<meta content="Sacred Heart - St Marys Roman Catholic Church" name="description" />
	<title>Mass Schedule - Sacred Heart - St Marys</title>
        <link rel="icon" href="./images/SHSM.ico">
	<link href="main.css" media="all" rel="stylesheet" type="text/css" />
	<link href="colorschemes/colorscheme7/colorscheme.css" media="all" rel="stylesheet" type="text/css" />
	<link href="style.css" media="all" rel="stylesheet" type="text/css" /><script type="text/javascript" src="live_tinc.js"></script>
	<style type="text/css">.auto-style1 {
	color: #000000;
}
.auto-style2 {
	text-decoration: underline;
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
<div class="auto-style1" id="slogan"><span class="auto-style2">MASS SCHEDULE:</span>
<?php
displayArray("./images/massSchedule");
?>
<br />
<br />
Be thoughtful and reverent&mdash;<br />
for this is the house of the Lord.<br />
Before the Mass, speak to the Lord;<br />
During the Mass, let the Lord speak to you;<br />
After the Mass, speak to one-another<br />
<br />
<span class="auto-style2">RECONCILIATION:</span><br />
<br />
Saturday 3:15pm and the 1st Thursday of the month after the 12:10pm Mass, or by appointment<br />
<br />
<span class="auto-style2">BAPTISMS:</span><br />
<br />
Arrangement for Baptism should be made by calling the parish office during office hours.<br />
<br />
<span class="auto-style2">SACRAMENT OF MARRIAGE:</span><br />
<br />
Couples should call the parish office to inquire six (6) months prior to the wedding. PRE-CANA IS REQUIRED.</div>
</div>
</div>
</div>

<div id="footer">
<div id="footer_text">
    <?php
    displayFooterText();
    ?></div>
</div>
</div>
</body>
</html>
