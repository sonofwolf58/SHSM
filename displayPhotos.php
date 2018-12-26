<?php
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

