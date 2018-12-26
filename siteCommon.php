<?php
// -----------------------------------------------------------------------------
// this file contains common functions used by the SHSM web automation
// 
// author = mathew wolkowicz
// 
// displayFooterText    no inputs   places the formatted copyright text
// displaySelectBar     no inputs   links to additional pages on site
// displayArray         directory name  displays things in directory that are dated greater than todays date
// -----------------------------------------------------------------------------

function displayFooterText(){
echo "Copyright 2010-18 Sacred Heart St. Mary\n";
}

function displaySelectBar(){
echo "<ul id=\"main_nav_list\">\n";
echo "<li><a class=\"main_nav_active_item\" href=\"index.php\">Home</a></li>\n";
echo "<li><a class=\"main_nav_item\" href=\"announcements.php\">Announcements</a></li>\n";
echo "<li><a class=\"main_nav_item\" href=\"events.php\">Events</a></li>\n";
echo "<li><a class=\"main_nav_item\" href=\"bulletin.php\">Weekly Bulletins</a></li>\n";
echo "<li><a class=\"main_nav_item\" href=\"reled.php\">Religious Ed</a></li>\n";
echo "<li><a class=\"main_nav_item\" href=\"massschedule.php\">Mass Schedule</a></li>\n";
//echo "<li><a class=\"main_nav_item\" href=\"frartspage.php\">Fr. Art&#39;s Page</a></li>";
echo "<li><a class=\"main_nav_item\" href=\"history.php\">Parish History</a></li>\n";
echo "<li><a class=\"main_nav_item\" href=\"ministry.php\">Parish Ministry</a></li>\n";
echo "<li><a class=\"main_nav_item\" href=\"slideshows.php\">Slideshows</a></li>\n";
echo "<li><a class=\"main_nav_item\" href=\"photos.php\">Photos</a></li>\n";
echo "<li><a class=\"main_nav_item\" href=\"prayers.php\">Prayers</a></li>\n";
echo "<li><a class=\"main_nav_item\" href=\"links.php\">Links</a></li>\n";
echo "</ul>";
}

function displayArray($dirname) {
    //
    // dirname is the directory that we will be parsing for the array values
    //
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
    
    // because it has changed on me before, define the timezone here so date is correct to filter out old events/announcements, etc.
    date_default_timezone_set('America/New_York');

    // take the list of file names and for max entry number-1, see if it is less or equal to today's date
    // if less or equal, leave array alone.  
    // If greater than today, removed from list so not available until proper day
    // reduce counter by one because it is pointing to end of the array (next higher position)
    $maxOfList = (count($file2List)-1 );

    // compare the current date versus the newest file date (see naming convention)
    // repeat until all earlier than today are removed from the array
    for ($vcnt = (sizeof($file2List)-1); $vcnt >= 0; $vcnt--) {
        if (substr($file2List[$vcnt], 0, 10) < $todayIs) {
            unset($file2List[$vcnt]);
        }
    }

    $file2List = array_values($file2List);

    //Populate the selection array with the files available, making them options to pull the document
    $totalCnt = (sizeof($file2List));
    for ($vcnt=0; $vcnt < $totalCnt ; $vcnt++) {
    //for ($vcnt = (sizeof($file2List)-1); $vcnt >= 0; $vcnt--) {
        echo "<hr /><img alt=\"$file2List[$vcnt]\" src=\"$dirname/$file2List[$vcnt]\"  width=\"500\" />\n";
    }
    closedir($dh);
}

function displayPhotos($dirname) {
    //
    // dirname is the directory that we will be parsing for the array values
    //
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
    
    // because it has changed on me before, define the timezone here so date is correct to filter out old events/announcements, etc.
    date_default_timezone_set('America/New_York');

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
        echo "<hr /><img alt=\"$file2List[$vcnt]\" src=\"$dirname/$file2List[$vcnt]\"  width=\"500\" />\n";
    }
    closedir($dh);
}


?>

