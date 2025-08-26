<?php
session_start();
session_unset();
session_destroy();
header("location:WEBSITE_PROJECT/HomePage.php?login=logout");
exit();