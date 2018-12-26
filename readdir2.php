<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> Bulletin Archive Development Page</title>
<meta name="Generator" content="Alleycode HTML Editor">
<meta name="Description" content="Your description here...">
<meta name="Keywords" content="Your keywords here...">
</head>

<body>

<p>Bulletin Archives</p>

<form action="bulletinArchiveHandler.php" method="post">

<select name="whichDoc">

<?php
$dirname = "./bulletins/BulletinsCurrent";
$dh = opendir($dirname) or die("couldn't open directory");
$cnt=0;
while (!(($file = readdir($dh)) === false)) {
	if ( ! is_dir("$dirname/$file")) {
		if ($file != "." || $file != "..") {
			// here is where to push each element into the array
			$file2List[$cnt]="$file" ;
			$cnt++ ;
		} // end the array filling
		
		// perform the sort of the array
	}
}
// here is where we take the sorted array and create the option items

sort($file2List);

// note: the latest bulletin is already in the directory, so subract 2 from start
for($vcnt=(sizeof($file2List)-2); $vcnt > 0; $vcnt--) {
echo "<option value=\"$file2List[$vcnt]\" >$file2List[$vcnt]</option>" ;
}
closedir($dh);
?>
</select>

<input type="submit" value="GO">

</form>

</body>
</html>
