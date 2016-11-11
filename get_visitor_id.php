<?php

$tracker = new PiwikTracker($_GET["site_id"]);

return $tracker->getVisitorId();