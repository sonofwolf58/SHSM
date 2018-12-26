<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
       	<meta content="no-cache" http-equiv="Cache-Control" />
        <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
        <meta name="generator" content="Alleycode" />
        <!-- <hs:title> -->
        <title>Bulletin Page </title>
        <link rel="icon" href="./images/SHSM.ico">
        <link rel="stylesheet" href="SHSM-Styles.css" type="text/css" />
        <link href="main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="colorschemes/colorscheme7/colorscheme.css" media="all" rel="stylesheet" type="text/css" />
        <link href="style.css" media="all" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="live_tinc.js"></script>
        <style type="text/css">.auto-style1 {
                line-height: 100%;
            }
            .auto-style2 {
                line-height: 50%;
            }
            .auto-style3 {
                color: #FF0000;
            }
        </style>

    </head>
    <body id="main_body" style="background-image: url('./images/background_image.jpg')">
                
        <?php include_once("./siteCommon.php");
        // include the site common function file
        ?>
        
        <div id="container" style="z-index: 1; left: 0px; top: 0px;">
            <div id="header">
                <div id="key_visual" style="z-index: 1"></div>
            </div>
            <div id="logo"></div>
            <div id="main_container" style="height: 0px">
                <div id="left_column_container">
                    <div id="main_nav_container">
                         <?php
                         displaySelectBar();
                         ?>
                    </div>
                </div>

                <div id="sub_container2">
                    <div id="content_area">
                        <div class="content" id="content_container" align="center">
                            <br />
                            <br />
                            <br />
                            <h2>Bulletin Selector</h2>
                            <p>(Select which bulletin you wish to view and press get bulletin.)</p>
                            <form action="bulletinArchiveHandler.php" method="post">
                                <select name="whichDoc" multiple="multiple" size="5">

                                    <?php
                                    $dirname = "./Bulletins/BulletinsCurrent";
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

                                    // get today's date (per system time)
                                    $todayIs = strftime('%Y.%m.%d');
                                    
                                    // take the list of file names and for max entry number-1, see if it is less or equal to today's date
                                    // if less or equal, leave array alone.  
                                    // If greater than today, removed from list so not available until proper day
                                    // reduce counter by one because it is pointing to end of the array (next higher position)
                                    $maxOfList = (count($file2List)-1);

                                    // naming convention for the bulletin files is yyyy.mm.dd-SHSM-bulletin.pdf
                                    // so therefore take the first 10 chars and store for comparison (yyyy.mm.dd)
                                    // get the first one so the while statement is populated
                                    $firstplaceDate = substr($file2List[$maxOfList], 0, 10);
                                    
                                    // compare the current date versus the newest file date (see naming convention)
                                    // repeat until all earlier than today are removed from the array
                                    while ($todayIs < $firstplaceDate)
                                    {
                                        $actionDone = "remove the firstplaceDate from array<br><br>";
                                        unset($file2List[$maxOfList]);
                                        $file2List = array_values($file2List);
                                        
                                        // recheck the list size
                                        $maxOfList = (count($file2List)-1);
                                        
                                        // get the first item from the new list 
                                        $firstplaceDate = substr($file2List[$maxOfList], 0, 10);
                                    }
                                    
                                    //Populate the selection array with the files available, making them options to pull the document
                                    for ($vcnt = (sizeof($file2List) - 1); $vcnt > 0; $vcnt--) {
                                        echo "<option value=\"$file2List[$vcnt]\" >$file2List[$vcnt]</option>";
                                    }
                                    closedir($dh);
                                    ?>
                                </select>

                                <input type="submit" value="Get Bulletin">

                            </form>
                            <!-- end of bulletin archive lister -->
                            
                            <br />
                            <br />
                            <br />
                            <br />
                            <p> If you do not have the Adobe Reader, click on the button below to download the latest copy</p><a href="http://www.adobe.com/products/acrobat/readstep2.html" target="blank"><img src="../images/get_adobe_reader.gif" alt="get adobe reader image" border="0" /></a></div>
                        <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
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