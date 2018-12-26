<?php
/**
 * 
 *
 * @version $Id$
 * @copyright 2009 
 **/
// phpinfo();
 
// echo "entered the handler\n\n" ;

$whichBulletin=$_POST["whichDoc"] ;
$siteLocation=$_SERVER["HTTP_HOST"] ;

// echo "whichDoc = $whichBulletin\n\n " ;
header("Location: http://$siteLocation/Bulletins/BulletinsCurrent/$whichBulletin") ;

// echo "we have exited the handler\n\n" ;
?>