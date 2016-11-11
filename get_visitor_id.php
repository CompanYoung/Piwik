<?php
include "PiwikTracker.php";
$tracker = new PiwikTracker($_GET["site_id"]);

echo $tracker->getVisitorId();
 