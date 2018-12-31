<!DOCTYPE html
  PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta content="Webmaster" name="author" />
	<meta content="Sacred Heart - St Marys Roman Catholic Church" name="description" />
	<meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Expires" content="-1" />
	<title>Religious Ed Forms - Sacred Heart - St Marys</title>
        <link rel="icon" href="./images/SHSM.ico">
	<link href="main.css" media="all" rel="stylesheet" type="text/css" />
	<link href="colorschemes/colorscheme7/colorscheme.css" media="all" rel="stylesheet" type="text/css" />
	<link href="style.css" media="all" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="live_tinc.js"></script>
	<style type="text/css">
        .auto-style1 
        {
        font-family: serif;
        font-weight: normal;
        font-size: medium;
        color: #000000;
        }   
        
	.auto-style18 
        {
	color: black;
        }
        
        h1,h3 { 
            text-align: center;
        }
        
        .content a:link
        { 
            color: black ; 
            text-decoration: none ; 
        }
        .content a:visited
        {
            color: black ; 
        }
        .content a:hover
        {
            color: red ;
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
<hr />
<h1>FORMS and Information</h1>
<h3>Click on Name of Form to view<br>OR<br>Right click and <u>Save Link As</u> to download.</h3>
<hr />
<br />
<!-- php scripts here -->
<?php
    $dirname = "./Forms/RelEdForms";
    $dh = opendir($dirname) or die("couldn't open directory");
    $cnt = 0;
    while (!(($file = readdir($dh)) === false)) {
        if (!is_dir("$dirname/$file")) {
            if ($file != "." || $file != "..") {
                // here is where to push each element into the array
                $file2List[$cnt] = "$file";
                $cnt++;
            } 
        }
    }   // end the array filling

    // perform the sort of the array
    sort($file2List);

    // take the list of file names and for max entry number-1, see if it is less or equal to today's date
    // if less or equal, leave array alone.  
    // If greater than today, removed from list so not available until proper day
    // reduce counter by one because it is pointing to end of the array (next higher position)
    $maxOfList = (count($file2List)-1 );

    $file2List = array_values($file2List);

    //Populate the selection array with the files available, making them options to pull the document
    $totalCnt = (sizeof($file2List));
    for ($vcnt=0; $vcnt < $totalCnt ; $vcnt++) {
    //for ($vcnt = (sizeof($file2List)-1); $vcnt >= 0; $vcnt--) {
        echo "<a href=\"$dirname/$file2List[$vcnt]\"  width=\"450\" />$file2List[$vcnt]</a><br><br>";
    }
    closedir($dh);
?>

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
