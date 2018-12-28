<!DOCTYPE html
  PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta content="Webmaster" name="author" />
	<meta content="Sacred Heart - St Marys Roman Catholic Church" name="description" />
	<meta content="no-cache" http-equiv="Cache-Control" />
	<title>Announcements - Sacred Heart - St Marys</title>
        <link rel="icon" href="./images/SHSM.ico">
	<link href="main.css" media="all" rel="stylesheet" type="text/css" />
	<link href="colorschemes/colorscheme7/colorscheme.css" media="all" rel="stylesheet" type="text/css" />
	<link href="style.css" media="all" rel="stylesheet" type="text/css" /><script type="text/javascript" src="live_tinc.js"></script>
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
        
<div class="auto-style1" id="container">
<div id="header" style="left: 0px; top: 0px">
<div id="key_visual">
&nbsp;
<div id="layer3" style="position: absolute; width: 584px; height: 41px; z-index: 3; left: 8px; top: -11px">
</div>
</div>
<div id="logo">

</div>    
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
<p align="center" class="auto-style18">*** Photos ***</p>

<!-- temporary hard links until able to automate the directory parsing -->

<a href="./photo_links.php?whichDir=D1">2007-UnityMass</a><br>
<a href="./photo_links.php?whichDir=D2">2008.04-Retreat</a><br>
<a href="./photo_links.php?whichDir=D3">2008.06-catechistCertificationAwards</a><br>
<a href="./photo_links.php?whichDir=D4">2008-ChurchFestival</a><br>
<a href="./photo_links.php?whichDir=D5">2008-PreSchool</a><br>
<a href="./photo_links.php?whichDir=D6">2008-SacredHeartSaintMary-Confirmation</a><br>
<a href="./photo_links.php?whichDir=D7">2016.10.23--RelEd.Retreat</a><br>
<a href="./photo_links.php?whichDir=D8">2018.01.07--HolyFamily</a><br>
<a href="./photo_links.php?whichDir=D9">ChurchPhotos</a><br>
<hr

<!-- just a spacer in the code -->
<!-- php scripts here -->

<?php
// ---------------------------------------------
// $whichDir is the parameter sent in the URLs
// if blank, then use ./photos
// otherwise, use the provided directory id
// ---------------------------------------------

$whichDir = htmlspecialchars($_GET["whichDir"]);

switch ($whichDir) {
    case "D1":
        $showDir = './photos/2007-UnityMass';
        break;
    case "D2":
        $showDir = './photos/2008.04-Retreat';
        break;
    case "D3":
        $showDir = './photos/2008.06-catechistCertificationAwards';
        break;
    case "D4":
        $showDir = './photos/2008-ChurchFestival';
        break;
    case "D5":
        $showDir = './photos/2008-PreSchool';
        break;
    case "D6";
        $showDir = './photos/2008-SacredHeartSaintMary-Confirmation';
        break;
    case "D7":
        $showDir = './photos/2016.10.23--RelEd.Retreat';
        break;
    case "D8":
        $showDir = './photos/2018.01.07--HolyFamily';
        break;
    case "D9":
        $showDir = './photos/ChurchPhotos';
        break;
    default:
        $showDir = './photos';
        break;
}

// removed the leading ./photos/ from the title of the photos
$DirTitle = substr($showDir, 9, 99);

echo "<h2 class=\"auto-style18\">$DirTitle</h2>";

// now call the function to display directory contents
displayPhotos("$showDir");
?>

&nbsp;
<!-- another spacer -->
&nbsp;
<!-- back to the original page -->
&nbsp;
</div>
</div>
</div>
</div>
</div>
&nbsp;
<div id="footer">
<div id="footer_text">
    <?php include_once("./footerText.php");
    displayFooterText();
    ?>
</div>
</div>
</div>
</body>
</html>
