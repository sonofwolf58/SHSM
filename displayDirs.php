<?php
function displayDirs($dirname) {
    //
    // dirname is the directory that we will be parsing for directory names
    //
    $dh = opendir($dirname) or die("couldn't open directory");

    while (!(($file = readdir($dh)) === false)) {

        // this section gives the directories only
        if (is_dir("$dirname/$file")) {
            if ($file != "." && $file != "..") {
                echo "<a href=\"$dirname/$file\">$file</a> ";
                echo "<br>";
            } 
        }
    }   // end the while

    closedir($dh);
}
?>

