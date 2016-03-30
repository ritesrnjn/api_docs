<?php
if(session_status() == PHP_SESSION_NONE) session_start();
require 'login/settings.php';

require 'login/authenticate.php';
require 'login/header.php';
require 'login/welcome.php';
require 'login/footer.php';